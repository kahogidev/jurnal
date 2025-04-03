<?php
namespace app\controllers;

use app\models\Newss;
use app\models\StaticFunctions;


class NewssviewController extends GeneralController
{
    public function actionView($id){
        $model = Newss::findOne($id);
//        var_dump($model);
        if (empty($model)){
            return $this->goBack();
        }else{
            $img = StaticFunctions::getImage('news',$model->id,$model->image);
            return $this->render('view',compact('model','img'));
        }
    }
}