<?php

namespace app\widgets;

use app\models\Newss;
use yii\base\Widget;

class News extends Widget
{
public function run(){
    $models = Newss::find()->where(["status" => 1])->all();
    return $this->render('News', compact("models"));

}
}