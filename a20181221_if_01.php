<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if01</title>

</head>
<body>
<?php
$a = 1;
if ($a == 1) {
    echo '123';
} else {
    echo '456';
}
?>

<?php
$a = 1;
if ($a == 1) :
    ?>
    123
<?php else: ?>
    456
<?php endif ?>

<!--常常多層包會混淆,在php中可以將中括號{}改寫成:、end-->
</body>
</html>