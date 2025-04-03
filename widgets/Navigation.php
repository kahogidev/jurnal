<?php
namespace app\widgets;

use app\models\Contacts;
use app\models\Menu;
use yii\bootstrap4\Widget;

class Navigation extends Widget
{
    public function run()
    {
        $menues = Menu::find()->where(['status'=>1])->orderBy(["order_by"=>SORT_ASC])->all();
        $contacts = Contacts::find()->all();
        return $this->render('navigation',compact('menues', 'contacts'));
    }
}