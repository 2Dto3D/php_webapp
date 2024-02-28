<?php

$arr=array('日','月','火','水','木','金','土');
echo $_POST["week"];
$cn_week = count($_POST["week"]);
for ($ji = 0; $ji <= $cn_week; $ji++) {
    echo $arr[$ji];
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>week_select</title>
</head>
<div>
        <ul>
    <li>取りたい時限</li>
        <label for="1時限"><input type="checkbox" name="time[]" value="1" id="1時限" />1時限</label>
        <label for="2時限"><input type="checkbox" name="time[]" value="2" id="2時限" />2時限</label>
        <label for="3時限"><input type="checkbox" name="time[]" value="3" id="3時限" />3時限</label>
        <label for="4時限"><input type="checkbox" name="time[]" value="4" id="4時限" />4時限</label>
        <label for="5時限"><input type="checkbox" name="time[]" value="5" id="5時限" />5時限</label>
        <label for="6時限"><input type="checkbox" name="time[]" value="6" id="6時限" />6時限</label>
      </ul>
</div>
<body>
</body>
</html>