<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\StaticFunctions;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */
/* @var $form yii\widgets\ActiveForm */




$js1 = <<<JS
    CKEDITOR.replace( 'candidates-body_uz' );
    CKEDITOR.replace( 'candidates-body_ru' );
    CKEDITOR.replace( 'candidates-body_en' );
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





<div class="candidates-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="card-body p-4 border rounded">
        <div class="row">
            <div class="col-6">
                <?= $form->field($model, 'fullname')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'address')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'email')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'website_link')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'phone')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'school')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'university')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'degree')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'experience_title')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'company')->textarea(['rows' => 2]) ?>

            </div>
            <div class="col-6">
                <?= $form->field($model, 'skill_first')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'skill_second')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'skill_third')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'telegram_link')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'instagram_link')->textarea(['rows' => 2]) ?>
                <?= $form->field($model, 'tweetter_link')->textarea(['rows' => 2]) ?>

                <div class="box">

                    <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('candidates',$model->id,$model->image)?>)"></div>
                    <div class="upload-options">
                        <label class="btn-light">
                            <?= $form->field($model, 'image')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                        </label>
                    </div>
                </div>
                <?= $form->field($model, 'status')->textarea(['rows' => 2]) ?>

            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
