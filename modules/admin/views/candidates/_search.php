<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'images') ?>

    <?php // echo $form->field($model, 'website_link') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'school') ?>

    <?php // echo $form->field($model, 'university') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'experience_title') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'from_year') ?>

    <?php // echo $form->field($model, 'to_year') ?>

    <?php // echo $form->field($model, 'skill_first') ?>

    <?php // echo $form->field($model, 'skill_second') ?>

    <?php // echo $form->field($model, 'skill_third') ?>

    <?php // echo $form->field($model, 'telegram_link') ?>

    <?php // echo $form->field($model, 'instagram_link') ?>

    <?php // echo $form->field($model, 'facebook_link') ?>

    <?php // echo $form->field($model, 'tweetter_link') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
