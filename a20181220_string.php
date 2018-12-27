<?php
$title = '您好';
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title.'----' ?></title>
<!--    <title>--><?php echo $title. '===' ?><!--</title>-->
</head>
<body>
<?php

$name = 'fufu';

echo "name <br>";
echo "name: $name <br>";
echo "\$name: $name <br>";
echo '$name <br>';


?>
</body>
</html>
