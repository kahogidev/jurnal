<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Newss */

$this->title = 'Yangilik yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
