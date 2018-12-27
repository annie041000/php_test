<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach</title>

</head>
<body>
<pre>
    <?php

    $ar2 = array(
        "name" => "fuyu",
        "age" => 24,
        "gender" => "female",
    );
//foreach 陣列變數 as key => value (其變數名稱可自行命名)
    foreach ($ar2 as $k => $val) {
        echo "$k : $val<br>";
    }
    echo "---------<br>";
    foreach ($ar2 as $a => $b) {
        echo "$a : $b<br>";
    }
    echo "---------<br>";
    foreach ($ar2 as $i) {
        echo "$i<br>";
    }
    echo "---------<br>";
    ?>
</pre>


</body>
</html>
