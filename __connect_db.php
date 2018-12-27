<?php

$db_host = 'localhost';
$db_name = 'my_test';
$db_user = 'fufu';
$db_password = 'admin';

$dsn = sprintf('mysql:host=%s;dbname=%s',$db_host, $db_name);

try {
    $pdo = new PDO($dsn, $db_user, $db_password);

    // 連線使用的編碼設定
    $pdo->query("SET NAMES utf8");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    echo 'Connection failed:'. $ex->getMessage();
}
?>