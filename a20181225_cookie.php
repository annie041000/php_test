<?php

setcookie('my_cookie','安安~~~~',time()+10,'/');

if(!isset($_COOKIE['my_cookie'])){
    $_COOKIE['my_cookie'] = '';
}

?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./js/jquery-3.3.1.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>

</head>
<body>

<?php

echo $_COOKIE['my_cookie'];

?>

</body>
</html>
