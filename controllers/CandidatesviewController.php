<?php
namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Candidate;


class CandidatesviewController extends GeneralController
{
    public function actionView($id){
        $model = Candidate::findOne($id);
//        var_dump($model);
        if (empty($model)){
            return $this->goBack();
        }else{
            $img = StaticFunctions::getImage('candidates',$model->id,$model->image);
            return $this->render('view',compact('model','img'));
        }
    }
}