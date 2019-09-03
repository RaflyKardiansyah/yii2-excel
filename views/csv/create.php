<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Csv */

$this->title = Yii::t('app', 'Create Csv');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Csvs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'csvFile' => $csvFile,
    ]) ?>

</div>
