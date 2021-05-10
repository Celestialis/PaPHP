<?php
$myArr = array(1,2,3,4,5,6,7,8,9);
foreach($myArr as $key => $item){
    if ($item == 3){
      unset($myArr[$key]);
    }
}