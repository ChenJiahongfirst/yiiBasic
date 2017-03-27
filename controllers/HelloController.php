<?php

namespace app\controllers;

use yii\web\Controller;


class HelloController extends Controller {

    public function actionIndex() {
        $test='test<script>alert(3);</script>';
        $test_array=array(0,1);
        $data=array();
        $data['key_test']=$test;
        $data['key_test_array']=$test_array;
        return $this->renderPartial('index',$data);
    }

}
