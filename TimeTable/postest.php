

<!-- html部分 -->
<!DOCTYPE html>
<html lang="ja">
<h2>・簡易時間割表</h2>
<table>
  <tr>
    <th>&nbsp;</th>
    <th>月曜日</th>
    <th>火曜日</th>
    <th>水曜日</th>
    <th>木曜日</th>
    <th>金曜日</th>
  <tr>
    <td>
        1限
    </td>
    <td>

    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 1");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>

 <?php
 $place = ("SELECT * FROM zikannwari_table WHERE place1 = 7");
 $stmt = $dbh->query($place);
 foreach($stmt as $row) {
     echo $row['classname']. '<br/>';
 }


 ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 13");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 19");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 25");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
  </tr>
  <tr>
     <td>
        2限
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 2");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 8");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 14");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 20");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 26");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
  </tr>
  <tr>
    <td>
        3限
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 3");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 9");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 15");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 21");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 27");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
  </tr>
  <tr>
    <td>
        4限
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 4");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 10");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 16");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 22");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 28");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    </tr>
    <tr>
     <td>
        5限
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 5");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td>
    <?php
    $place = ("SELECT * FROM zikannwari_table WHERE place1 = 11");
    $stmt = $dbh->query($place);
    foreach($stmt as $row) {
        echo $row['classname']. '<br/>';
    }


    ?>
    </td>
    <td></td>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Result</title>
</head>




<body>
<h3>
<?php
// if($_POST['semester'] == 1){
//     echo "前期";
// }else{
//     echo "後期";
// }
// echo "<br/>\n";
// $week_array=array('日','月','火','水','木','金','土');
// for ($ji = 0; $ji <= $_POST['week']; $ji++) {
//     if ($_POST["week"] == $ji) {
//         echo $_POST['gakunenn']."年生"."のあなたにおススメの" . $week_array[$ji] . "曜日の時間割はこれです。";
//     }
// }
try{
    $pdo = new PDO($dsn, $user, $password,array(PDO::ATTR_EMULATE_PREPARES=>false));
    // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ここから時間割表示処理

//時限処理
    if (isset($_POST['time'])) {
        $time = $_POST['time'];
    }else{
        $time = array(1,2,3,4,5,6);
    }

    if(isset($time) and count($time)>0){
        $str_check1 = "";
        for($i=0;$i<count($time);$i++){
        if($i == 0){
            $str_check1 .= $time[$i];
        }
        else{
            $str_check1 .= "," . $time[$i];
        }
        }
    }

    if (isset($_POST['subject'])) {
        $sub = $_POST['subject'];
    }else{
        $sub = array("基礎科目","基礎専門科目A群","基礎専門科目B群","上級専門科目A群","上級専門科目B群","教養科目");
    }
    $inClause = substr(str_repeat(',?', count($sub)), 1);


//sql
$gaku = "SELECT * FROM zikannwari_table WHERE zigenn1 IN($str_check1) AND kubunn IN ({$inClause})";

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
        $week = $_POST['week'];
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
        $math = 1;
        $gaku = $gaku . " AND suugaku <= $math AND sannsuu <=$math";
    } elseif ($_POST['cul'] == 0) {
        $math = 0;
        $gaku = $gaku . " AND suugaku =$math AND sannsuu =$math";
    } else {
        $math = 1;
        $gaku = $gaku . " AND suugaku < $math AND sannsuu <= $math";
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

    $gaku = $gaku . " ORDER BY zigenn1 ASC ";

    $stmt = $pdo->prepare($gaku);
    // $stmt->execute(array($time, $sub));
    $stmt->execute($sub);
    $stmt->debugDumpParams();
    $result = $stmt->fetchALL();





} catch (Exception $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}
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
    <th>URL</th>
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
    echo "</td><td>";
    echo '<a href="' . $row['link'] . '">シラバスへのリンクはこちらから</a>';
}
?>

</body>
</html>