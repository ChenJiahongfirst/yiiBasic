<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<h3><?=Html::encode($key_test)?></h3>
<h3><?=HtmlPurifier::process($key_test)?></h3>
<h3><?=$key_test_array[0]?></h3>

