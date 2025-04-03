<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Candidate', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="candidates-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullname',
            'address',
            'email:email',
            'images',
            'website_link',
            'phone',
            'school',
            'university',
            'degree',
            'experience_title',
            'company',
            'from_year',
            'to_year',
            'skill_first',
            'skill_second',
            'skill_third',
            'telegram_link',
            'instagram_link',
            'facebook_link',
            'tweetter_link',
            'status',
        ],
    ]) ?>

</div>
