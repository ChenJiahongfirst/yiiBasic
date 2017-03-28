<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class HelloController extends Controller {

    public function actionIndex() {
        $test=new Test();
        $test->id=3;
        $test->title='title3';
        $test->validate();
        if($test->hasErrors()){
            echo 'data has error';
            die;
        }
        $test->save();
    }

}
