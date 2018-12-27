<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Json 01</title>

</head>
<body>
<pre>
    <?php
    $str = '{"name":"安安","age":24,"gender":"female"}';

    $a = json_decode($str);
    var_dump($a);
    echo $a->name.'<br>';


    $b = json_decode($str,true); //當該參數為true返回為array並非object
    var_dump($b);
    echo $b['name'].'<br>';
    ?>
</pre>

</body>
</html>
