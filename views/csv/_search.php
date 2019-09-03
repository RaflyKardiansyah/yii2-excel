<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CsvSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="csv-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'csv_id') ?>

    <?= $form->field($model, 'csv_first_name') ?>

    <?= $form->field($model, 'csv_last_name') ?>

    <?= $form->field($model, 'csv_email') ?>

    <?= $form->field($model, 'csv_csv_file_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
