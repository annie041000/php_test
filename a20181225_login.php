<?php

session_start();

if (isset($_POST['user']) and (isset($_POST['password']))) {
    if ($_POST['user'] === 'fuyu' and $_POST['password'] === '123456') {
        $_SESSION['user'] = $_POST['user'];

    } else {
        $info = '帳號或密碼錯誤喔！';
    }
}


//if(!isset($_SESSION['my'])){
//    $_SESSION['my'] = 1;
//}


?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./js/jquery-3.3.1.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>

</head>
<body>

<div class="container">

    <div class="col-lg-6">
        <?php if (isset($info)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $info ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['user'])): ?>
            <h2><?= $_SESSION['user'] ?> 歡迎回來！</h2>
            <a href="./a20181225_logout.php"> 我要登出</a>
        <?php else: ?>
            <form method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="請填入帳號">
                </div>
                <div class="form-group">
                    <label for="password">密碼</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php endif; ?>

    </div>
</div>

</body>
</html>
