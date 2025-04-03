<?php

namespace app\widgets;

use kartik\base\Widget;

class Publications extends Widget
{
public function run(){
    return $this->render('publications');
}
}