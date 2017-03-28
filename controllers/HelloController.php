<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class HelloController extends Controller {

    public function actionIndex() {
        $test = Test::find()->where(['id' => 2])->one();
        $test->id=2;
        $test->title='title2';
        $test->save();
    }

}
