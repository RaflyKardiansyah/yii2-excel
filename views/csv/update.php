<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Csv */

$this->title = Yii::t('app', 'Update Csv: {name}', [
    'name' => $model->csv_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Csvs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->csv_id, 'url' => ['view', 'id' => $model->csv_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="csv-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
