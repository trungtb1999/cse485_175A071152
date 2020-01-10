<?php

global $db;
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'webbtl';
// khởi tạo kết nối
$db = new mysqli($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
if ($db->connect_error) {
    exit('Kết nối không thành công. chi tiết lỗi:' . $db->connect_error);
}
$db->query("SET NAMES utf8");

?>