<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Cookie;


class HelloController extends Controller {

    public function actionIndex() {
//        $cookies=\YII::$app->response->cookies;
        //添加cookie
//        $cookie_data=array('name'=>'user','value'=>'张三');       
//        $cookies->add(new Cookie($cookie_data));
        //移除cookie
//        $cookies->remove('user');
        //使用cookie
//        $cookies=\YII::$app->request->cookies;
//        echo $cookies->getValue('user','cookie过期');
    }

}
