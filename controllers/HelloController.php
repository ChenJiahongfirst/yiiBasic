<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Test;
use app\models\Customer;
use app\models\Order;

class HelloController extends Controller {

    public function actionIndex() {
        //根据顾客名查取订单信息
//        $customer = Customer::find()->where(['name' => '张三'])->one();
//        $orders=$customer->hasMany(Order::className(), ['cid'=>'id'])->asArray()->all();
//        $orders=$customer->getOrders();
//        $orders=$customer->orders;//调用__get()方法，自动匹配getOrders()方法，再加上all();
//        print_r($orders);
        
        //根据订单查询顾客信息
//        $order=Order::find()->where(['id'=>1])->one();
//        $customer=$order->customer;//调用__get()方法，自动匹配getCustomer()方法，再加上one();
//        print_r($customer);
        
        //关联查询结果缓存(顾客的订单有了变化)
//          $customer = Customer::find()->where(['name' => '张三'])->one();
//          $orders=$customer->orders;
          //重置关联关系
//          unset($customer->orders);
//          $orders2=$customer->orders;
        
        //关联查询的多次查询
        //select * from order where id in(..)   with('orders')的作用，有效减少查询次数
        $customers= Customer::find()->with('orders')->all();
        foreach ($customers as $customer) {
            $orders=$customer->orders;
            print_r($orders);
        }
    }

}
