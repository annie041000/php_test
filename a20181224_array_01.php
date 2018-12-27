<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array01</title>

</head>
<body>
<pre>
    <?php

    $ar = array(2, 3, 4, 5, 6);
    $ar2 = array(
        "name" => "fuyu",
        "age" => 24,
        "gender" => "female",
    );

    echo $ar2['name'] ."\n";

//    $ar3 = $ar2; //設定值，是先拷貝$ar2的值後直接給$ar3(實體複製)
    $ar3 = &$ar2; // "&"傳遞位址設定
    $ar2['name'] = 'Annie';
    print_r($ar2);
    print_r($ar3);

    ?>
</pre>


</body>
</html>
