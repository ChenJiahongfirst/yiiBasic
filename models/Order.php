<?php
namespace app\models;

use yii\db\ActiveRecord;
class Order extends ActiveRecord{
    //根据订单查询顾客信息
    public function getCustomer() {
        $customer=$this->hasOne(Customer::className(), ['id'=>'cid'])->asArray();
        return $customer;
    }
}

