<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array_push</title>

</head>
<body>
<pre>
    <?php

    $br = array(); //說明
    $br[] = 3;
    $br[] = 7;
    $br[] = 11;
    $br[] = 'yo';
    $br[] = 5;
    $br[] = 2;
    $br[] = true;

    for($i=0;$i<count($br);$i++) {
        echo "$i: $br[$i]<br>";
    };

    ?>
</pre>


</body>
</html>
