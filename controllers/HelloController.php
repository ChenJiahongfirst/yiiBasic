<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller {

    public function actionIndex() {
        $session=\YII::$app->session;
        $session->open();
//        if($session->isActive){
//            echo 'session is start';
//        }
       
//        $session->set('name','张三');
//        echo $session->get('name');
//        $session->remove('name');
        
//        $session['name']='李四';
//        echo $session['name'];
//        unset($session['name']);
    }

}
