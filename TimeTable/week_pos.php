<?php



try{
    $pdo = new PDO($dsn, $user, $password,array(PDO::ATTR_EMULATE_PREPARES=>false));
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ここから時間割表示処理
    if (isset($_POST['time'])) {
        $time = $_POST['time'];
    }else{
        $time = array(1,2,3,4,5,6);
    }
    $inClause = substr(str_repeat(',?', count($time)), 1);
//sql
    $gaku = "SELECT * FROM zikannwari_table WHERE zigenn1 IN({$inClause})";

// 学期の値を取得
    if (isset($_POST['semester'])) {
        $gakki = $_POST['semester'];
        $gaku = $gaku . " AND gakki = $gakki";
    }

// 学年の値を取得
    for ($g = 0; $g <= $_POST['gakunenn']; $g++) {
        if ($_POST['gakunenn'] == $g) {
            $gakunenn = $_POST['gakunenn'];
            $gaku = $gaku . " AND gakunenn <= $gakunenn";
        }
    }
// 曜日の値を取得
    if (isset($_POST['week'])) {
        $week = $_POST['week'][0];
        $gaku = $gaku . " AND week1 = $week";
    }
// テストの値を取得
    if ($_POST['test'] == 0) {
        $test = $_POST['test'];
        $gaku = $gaku . " AND test =$test";
    } else {
        $gaku = $gaku . " AND test <=1";
    }
// 計算が得意かの値を取得
    if ($_POST['cul'] == 1) {
        $gaku = $gaku . " AND suugaku <= 1 AND sannsuu <=1";
    } elseif ($_POST['cul'] == 0) {
        $gaku = $gaku . " AND suugaku =0 AND sannsuu =0";
    } else {
        $gaku = $gaku . " AND suugaku =0 AND sannsuu <=1";
    }

// 情報系の値を取得
    if (isset($_POST['it'])) {
        $it = $_POST['it'];
        $gaku = $gaku . " AND zyouhou <= $it";
    }

    if (isset($_POST['sport'])){
        $sport = $_POST['sport'];
        $gaku = $gaku . " AND suports <= $sport";
    }

    $stmt = $pdo->prepare($gaku);
    $stmt->execute($time);
    $result = $stmt->fetchALL();
} catch (Exception $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}

?>






<!-- html部分 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>week_pos</title>
</head>

<body>
<h3>
<?php
if($_POST['semester'] == 1){
    echo "前期";
}else{
    echo "後期";
}
echo "<br/>\n";
// $arr=array('日','月','火','水','木','金','土');
// for ($ji = 0; $ji <= $_POST['week']; $ji++) {
//     if ($_POST["week"] == $ji) {
//         echo $_POST['gakunenn']."年生"."のあなたにおススメの" . $arr[$ji] . "曜日の時間割はこれです。";
//     }
// }

?>
</h3>

<?php
echo "<table>
    <tr>
    <th>授業名</th>
    <th>学年</th>
    <th>区分</th>
    <th>時限1</th>
    <th>曜日2</th>
    <th>曜日2の時限</th>
    </tr>";
foreach ($result as $row) {
    echo "<tr><td>";
    echo $row['classname'];
    echo "</td><td>";
    echo $row['gakunenn'];
    echo "</td><td>";
    echo $row['kubunn'];
    echo "</td><td>";
    echo $row['zigenn1'];
    echo "</td><td>";
    echo $row['week2'];
    echo "</td><td>";
    echo $row['zigenn2'];
}
?>

</body>
</html>