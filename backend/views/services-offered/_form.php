<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\ServicesOffered */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-offered-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'services_desc_id')->widget(Select2::classname(), [
        'options' => ['multiple' => false, 'placeholder' => 'Select Services Description'],
        'data' => ArrayHelper::map($services_desc, 'id', 'service_desc'),
        'pluginOptions' => [
            'allowClear' => true
        ],                
    ]); 
    ?> 
	<?= $form->field($model, 'service_offered_desc')->textInput(['maxlength' => true]) ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
