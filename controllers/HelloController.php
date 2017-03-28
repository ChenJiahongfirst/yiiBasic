<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;

class HelloController extends Controller {

    public function actionIndex() {
        //删除数据
//        $results = Test::find()->where(['id' => 1])->all();
//        $results[0]->delete();
        
//       Test::deleteAll('id>:id',array(':id'=>0));
    }

}
