<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="test_style.css">
</head>

<body>
<form action="postest.php" method="post">
<title>時間割作成</title>
    <h1><font size="6">時間割作成サイト</font></h1>
    <div class="box2">
    <font size="4">あなたに合った時間割を提案するサイトです。下記の項目を入力し、送信ボタンを押してください。</font>
</div>
    <br>
    <h2>①学年・学部・学期</h2>
    <div>
        <ul>
        <li></li<label for="gakunenn">学年</label></li>
        <select name="gakunenn" required>
            <option value="">選択してください</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </ul>
    </div>
    <div>
        <ul>
        <li><label for="faculty">専攻</label></li>
        <select name="faculty" required>
            <option value="">選択してください</option>
            <option value="1" disabled>経済専攻</option>
            <option value="2" disabled>観光・地域創生専攻</option>
            <option value="3">経営専攻</option>
            <option value="4" disabled>AI・ビジネス専攻</option>
            <option value="5" disabled>スポーツビジネス専攻</option>
        </select>
    </div>
    <div>
        <ul>
        <li><label for="semester">学期</label></li>
        <select name="semester" required>
            <option value="">選択してください</option>
            <option value="1">前期</option>
            <option value="2">後期</option>
        </select>
        </ul>

        <ul>
    <li>取りたい科目区分</li>
        <label for="基礎科目"><input type="checkbox" name="subject[]" value="基礎科目" id="基礎科目" />基礎科目</label>
        <label for="基礎専門科目A群"><input type="checkbox" name="subject[]" value="基礎専門科目A群" id="基礎専門科目A群" />基礎専門科目A群</label>
        <label for="基礎専門科目B群"><input type="checkbox" name="subject[]" value="基礎専門科目B群" id="基礎専門科目B群" />基礎専門科目B群</label>
        <label for="上級専門科目A群"><input type="checkbox" name="subject[]" value="上級専門科目A群" id="上級専門科目A群" />上級専門科目A群</label>
        <label for="上級専門科目B群"><input type="checkbox" name="subject[]" value="上級専門科目B群" id="上級専門科目B群" />上級専門科目B群</label>
        <label for="教養科目"><input type="checkbox" name="subject[]" value="教養科目" id="教養科目" />教養科目</label>
      </ul>
    </div>
    <h2>②時間割の範囲指定</h2>

    <div>
        <ul>
    <li>曜日</li>
        <select name="week">
            <option value="1">月曜日</option>
            <option value="2">火曜日</option>
            <option value="3">水曜日</option>
            <option value="4">木曜日</option>
            <option value="5">金曜日</option>
            <option value="6">土曜日</option>
        </select><br>
        </ul>
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

    <div>
    <h2>③パーソナルデータ</h2>
    <p>次の質問に対して、当てはまる方を選択してください。</p>
        <ul>
        <li>テスト形式はどちらがいいですか？</li>
          <select name="test">
            <option value="1">筆記テスト</option>
            <option value="0">レポート</option>
            <option value="2">どちらでもいい</option>
          </select><br>

    <li>数学を扱う授業が多数あります。数学は得意ですか？</li>
        <select name="cul">
          <option value="1">得意</option>
          <option value="0">不得意</option>
          <option value="2">普通</option>
        </select><br>

    <li>情報に関連する授業を取りたいですか？</li>
        <select name="it">
          <option value="1">はい</option>
          <option value="0">いいえ</option>
        </select><br>

    <li>スポーツに関連する授業を取りたいですか？</li>
        <select name="sport">
        <option value="1">はい</option>
        <option value="0">いいえ</option>
        </select><br>
    </ul>

    </div>
    <br>
    <p><input type="submit" value="送信" class = "b"></input></p>

</form>
</body>
</html>