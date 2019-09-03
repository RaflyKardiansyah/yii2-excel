<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Csv */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="csv-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'csv_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'csv_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'csv_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
