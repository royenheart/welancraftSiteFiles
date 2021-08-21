<?php

/**
 * 网站数据库链接
 * @author RoyenHeart
 * 
 * 此文件做数据库链接功能
 * 具体参数请以个人实际情况确定
 * 数据表中包含host，port，name字段
 * 
 * 实际部署时请去掉文件前缀后'NoSecret'
 */

/* 变量存储数据 */
$hosts = array();
$ports = array();
$names = array();

/* 连接数据库 */
$con = mysqli_connect('数据库地址','用户名','用户密码','使用的数据库');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

/* 获取服务器数据 */
$sql="SELECT * FROM 存放数据的数据表名称"; // 获取数据表指令
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    $hosts[count($hosts) + 1] = $row['host'];
    $ports[count($ports) + 1] = $row['port'];
    $names[count($names) + 1] = $row['name'];
}

mysqli_close($con);

?>