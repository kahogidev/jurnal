<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Candidate;
use app\models\StaticFunctions;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CandidateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xodimlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangi xodim yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fullname',
            'address',
            'email:email',
            [
                'attribute' => 'image',
                'value' => function($data){
                    $image = StaticFunctions::getImage('candidates',$data->id, $data->image);
                    return "<img src='$image' style='max-width: 100px'>";
                },
                'format' => 'html'
            ],
            //'website_link',
            //'phone',
            //'school',
            //'university',
            //'degree',
            //'experience_title',
            //'company',
            //'from_year',
            //'to_year',
            //'skill_first',
            //'skill_second',
            //'skill_third',
            //'telegram_link',
            //'instagram_link',
            //'facebook_link',
            //'tweetter_link',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Candidate $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
