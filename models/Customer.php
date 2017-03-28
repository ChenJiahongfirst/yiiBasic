<?php

namespace app\models;

use yii\db\ActiveRecord;

class Customer extends ActiveRecord {
    //根据顾客查询订单
    public function getOrders() {
        $orders=$this->hasMany(Order::className(), ['cid'=>'id'])->asArray();
        return $orders;
    }

}
