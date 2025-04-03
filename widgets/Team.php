<?php

namespace app\widgets;

use app\models\Candidate;
use yii\base\Widget;

class Team extends Widget
{
    public function run(){
        $models = Candidate::find()->where(["status" => 1])->all();
        return $this->render('team', compact("models"));
    }
}