<?php

namespace app\widgets;

use app\models\Contacts;
use app\models\Menu;
use app\models\Service;
use yii\bootstrap4\Widget;

class Footer extends Widget
{
    public function run()
    {
        $contacts = Contacts::find()->all();
        $menues = Menu::find()->all();
        $services = Service::find()->all();
        return $this->render('footer', compact("contacts","menues","services"));
    }
}