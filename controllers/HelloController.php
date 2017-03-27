<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller {

    public function actionIndex() {
        //获得请求组件

        $res = \YII::$app->response;
        //状态码
//        $res->statusCode='404';
        //请求头
//        $res->headers->add('pragma','no-cache');
        //跳转
//        $this->redirect('http://www.baidu.com',302);
        //文件下载
        $res->sendFile('./robots.txt');
        
    }

}
