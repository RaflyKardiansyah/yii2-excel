<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CsvFile */

$this->title = Yii::t('app', 'Create Csv File');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Csv Files'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csv-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
