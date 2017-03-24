<?php
namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller {
    public function actionIndex() {
        //获得请求组件
        $request=\YII::$app->request;

        //echo $request->get('id','获取id失败！');

//        if($request->isGet){
//            echo 'This is a get method';
//        }
        
        echo $request->userIp;
    }
}
