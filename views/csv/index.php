<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CsvSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Csvs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csv-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Csv'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'csv_id',
            'csv_first_name',
            'csv_last_name',
            'csv_email:email',
            'csv_csv_file_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
