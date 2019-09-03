<?php

namespace app\controllers;

use Yii;
use app\models\CsvFile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\UploadedFile;

use app\models\Csv;

/**
 * CsvFileController implements the CRUD actions for CsvFile model.
 */
class CsvFileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CsvFile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CsvFile::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CsvFile model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CsvFile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CsvFile();

        $csvFile = UploadedFile::getInstance($model, 'csv_file_name');

        if ($model->load(Yii::$app->request->post())) {
            //Csv Upload
            $csvName = Yii::$app->security->generateRandomString(4). '_' . $csvFile->baseName . '.' . $csvFile->extension;
            $csvFile->saveAs(Yii::getAlias("@app") . '/web/uploads/csv/' . $csvName);

            $data = \moonland\phpexcel\Excel::import(Yii::getAlias("@app") . '/web/uploads/csv/' . $csvName, [
                'setFirstRecordAsKeys' => true, // if you want to set the keys of record column with first record, if it not set, the header with use the alphabet column on excel. 
                'setIndexSheetByName' => true, // set this if your excel data with multiple worksheet, the index of array will be set with the sheet name. If this not set, the index will use numeric. 
                'getOnlySheet' => 'sheet1', // you can set this property if you want to get the specified sheet from the excel data with multiple worksheet.
            ]);

            $model->csv_file_name = $csvName;
            $model->save();
            
            $list= array();

            foreach ($data as $row) {
                $csvModel = new Csv();

                $listFirstName = $row['first_name'];
                $listLastName = $row['last_name'];
                $listEmail = $row['email'];

                $csvModel->csv_first_name = $listFirstName;
                $csvModel->csv_last_name = $listLastName;
                $csvModel->csv_email = $listEmail;
                $csvModel->csv_csv_file_id = $model->csv_file_id;

                $csvModel->save();
            }

            $csvModel->save();

            return $this->redirect(['view', 'id' => $model->csv_file_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CsvFile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->csv_file_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CsvFile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CsvFile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CsvFile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CsvFile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
