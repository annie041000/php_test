<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>

</head>
<body>

<?php

$a = isset($_GET['a']) ? $_GET['a']: '';
//isset:判斷有沒有設定值? ,有的話取值;沒有就給空字串
$b = empty($_GET['b']) ? '': $_GET['b'];
//empty:是不是空值?

?>


<?= $a ?><br>
<?= $b ?>
</body>
</html>
