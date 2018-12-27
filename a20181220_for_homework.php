<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework</title>

</head>
<body>
<table border="1">
    <?php

    for($i=1;$i<=9;$i++){
//        echo $i;
        echo '<tr>';
        for($k=1;$k<=9;$k++){
            echo '<td>'.$i*$k.'</td>';
        }
        echo '</tr>';
    };

    ?>
<!--    輸出時標籤也要成對-->

</table>
</body>
</html>
