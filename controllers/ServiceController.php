<?php
namespace app\controllers;

use app\models\StaticFunctions;
class ServiceController extends GeneralController
{
    public function actionView()
    {
        $models = \app\models\Service::find()->all();
//        debug($sponsors); die();
        $image = StaticFunctions::getImage('services',$models->id,$models->image);
        return $this->render('view',compact('models'));
    }
}