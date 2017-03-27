<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class HelloController extends Controller {

    public function actionIndex() {
        //查询数据
//        $sql = "select * from test where id=:id";
//        $result=Test::findBySql($sql,array(':id'=>1))->all();
        
        //id=1
//        $result = Test::find()->where(['id' => 1])->all();
        
        //id>0
//        $result = Test::find()->where(['>','id',0])->all();
        
        //title like '%...%'
//        $result = Test::find()->where(['like','title','title'])->all();
        
        //查询结果转化为数组
//        $result = Test::find()->where(['like','title','title'])->asArray()->all();
        
        //批量查询
//        foreach(Test::find()->batch(1) as $test){
//            print_r($test);
//        }
        
//        print_r($result);
    }

}
