<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CsvFile */

$this->title = Yii::t('app', 'Update Csv File: {name}', [
    'name' => $model->csv_file_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Csv Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->csv_file_id, 'url' => ['view', 'id' => $model->csv_file_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="csv-file-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
