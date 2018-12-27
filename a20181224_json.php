<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Json</title>

</head>
<body>
<pre>
    <?php

    $ar2 = array(
        "name" => "馥宇",
        "age" => 24,
        "gender" => "female",
    );

    echo json_encode($ar2)."<br>";
    echo json_encode($ar2, JSON_UNESCAPED_UNICODE);
    ?>
</pre>
<script>
    //直接將JSON寫進javascript內
    var ar = <?= json_encode($ar2, JSON_UNESCAPED_UNICODE); ?>
    for(var s in ar){
        console.log(s,ar[s]);
    }


</script>

</body>
</html>
