<?php
date_default_timezone_set('Asia/Taipei');

?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date</title>

</head>
<body>
<?= date("Y-m-d H:i:s").'<br>'; ?>
<?= date('Y-m-d', time()-30*24*60*60); ?>
</body>
</html>
