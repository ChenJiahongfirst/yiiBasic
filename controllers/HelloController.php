<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller {
    
    public $layout='common';
    public function actionIndex() {       
        return $this->render('about');//php文件默认传送到$content中
    }

}
