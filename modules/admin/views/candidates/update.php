<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */

$this->title = 'Update Candidate: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Candidate', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
