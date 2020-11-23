<?php

namespace app\components\widgets;

use yii\base\Widget;

class MenuWidget extends Widget
{
    public $name;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if ($this->name === null) {
            $this->name = 'Guest';
        }
    }

    public function run()
    {
        //return '<h1>Hello, ' . $this->name . '</h1>';
        return $this->render('menu', ['name' => $this->name]);
    }

}