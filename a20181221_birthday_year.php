<?php
date_default_timezone_set('Asia/Taipei');

$this_year = date("Y");
$y_begin = $this_year-70;
$y_end = $this_year-18;
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birthday year</title>

</head>
<body>
<form action="">
    <label for="b_year">出生年份: </label>
    <select name="" id="b_year">
    <?php for($i=$y_begin;$i<$y_end;$i++): ?>
        <option value="<?= $i ?>">西元: <?= $i ?>年, 民國: <?= $i-1911 ?>年</option>
    <?php endfor ?>
    </select>
</form>
</body>
</html>
