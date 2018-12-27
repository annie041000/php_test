<?php
date_default_timezone_set('Asia/Taipei');


$deadline = '2019-02-20';
$deadline_time = strtotime($deadline);

$day = ($deadline_time-time())/(24*60*60);

?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deadline</title>

</head>
<body>

<?= intval($day).'<br>' ?>
<?= (int)$day ?>

</body>
</html>
