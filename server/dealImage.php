<?php
/**
 * User: may
 * Date: 2020/2/6
 * Time: 下午2:11
 */

// 假定数据库用户名：root，密码：root，数据库：zoo 建议使用myqli方法  mysql_query的方法已弃用
$con=mysqli_connect("localhost:8889","root","root","zoo");
if (mysqli_connect_errno($con))
{
    echo "连接 MySQL 失败: " . mysqli_connect_error();
}


$data=$_POST;

echo '<pre>';
print_r($data);

if(!isset($data['img'])){
    echo '<script>alert("请先上传图片")</script>';
    echo '<script>window.location.href="http://hee.com:8888/image-upload/index.html"</script>';
}else{
    foreach ($data['img'] as $k=>$v){
        $arr[$k]['goods_id']=1;//管理的属性id  默认1
        $arr[$k]['img']=$v;
        if(empty($v)){
            echo '<script>window.location.href="http://hee.com:8888/image-upload/index.html"</script>';
        }else{
            $query="INSERT INTO picture (good_id,img) VALUES ('1','$v')";
            echo $query."<br>";
            $result=mysqli_query($con,$query);
            // 输出自动生成的 ID
            echo "插入成功,新 id 为: " . mysqli_insert_id($con);
        }

    }

}

mysqli_close($con);


?>



