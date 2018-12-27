<?php

session_start();

unset($_SESSION['user']); //清除session功能

header('Location: a20181225_login.php'); //清除session後頁面立馬轉向(redirect)