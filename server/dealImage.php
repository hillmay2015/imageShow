<?php
/**
 * User: may
 * Date: 2020/2/6
 * Time: 下午2:11
 */

echo '<pre>';
print_r($_POST);

$data=$_POST;

foreach ($data['img'] as $k=>$v){
    $arr[$k]['goods_id']=1;//管理的属性id  默认1
    $arr[$k]['img']=$v;
}
print_r($arr);
