<?php
namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Department;


class DepartmentviewController extends GeneralController
{
    public function actionView($id){
        $model = Department::findOne($id);
//        var_dump($model);
        if (empty($model)){
            return $this->goBack();
        }else{
            $img = StaticFunctions::getImage('departments',$model->id,$model->image);
            return $this->render('view',compact('model','img'));
        }
    }
}