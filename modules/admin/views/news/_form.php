<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\StaticFunctions;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */




$js1 = <<<JS
    CKEDITOR.replace( 'news-body_uz' );
    CKEDITOR.replace( 'news-body_ru' );
    CKEDITOR.replace( 'news-body_en' );
JS;
$this->registerJs($js1);
$js2 = <<<JS
		$('.datepicker').pickadate({
			selectMonths: true,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
	
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'DD-YY-MM HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
JS;
$this->registerJs($js2);


?>





<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="card-body p-4 border rounded">
        <div class="row">
            <div class="col-6">
                <?= $form->field($model, 'title_uz')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'title_ru')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'title_en')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'description_uz')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'description_ru')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'description_en')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'body_uz')->textarea(['rows' => 5]) ?>
                <?= $form->field($model, 'body_ru')->textarea(['rows' => 5]) ?>
            </div>
            <div class="col-6">
                <?= $form->field($model, 'body_en')->textarea(['rows' => 5]) ?>
                <div class="box">
                    <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('news',$model->id,$model->image)?>)"></div>
                    <div class="upload-options">
                        <label class="btn-light">
                            <?= $form->field($model, 'image')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                        </label>
                    </div>
                </div>
                <?= $form->field($model, 'status')->textInput() ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
