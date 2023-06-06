<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $stmt = $pdo -> query("select * from 4each_keijiban");

    
?>

    <header>
    <img src="4eachblog_logo.jpg">
    <ul class="menu">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </header>

    <div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
    <br>

    <form method="post" action="insert.php">
        <h3>入力フォーム</h3>
        <label>ハンドルネーム</label><br>
        <input type="text" name="handlename" size="40"><br>
        <label>タイトル</label><br>
        <input type="text" name="title" size="40"><br>
        <label>コメント</label><br>
        <textarea name="comments" cols="40" rows="4"></textarea><br>
        <input type="submit" value="投稿する"><br>
    </form>

    <?php

    while($row = $stmt -> fetch()){

    echo "<div class='kiji'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>"; } ?>
    </div>

    <div class="right">
        <h3>人気の記事</h3>
        <ul class="a">
            <li>PHPおすすめ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTop5</li>
            <li>HTMLの基礎</li>
        </ul>
        <h3>オススメリンク</h3>
        <ul class="b">
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipeのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>
        <h3>カテゴリ</h3>
        <ul class="c">
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JAVA</li>
        </ul>

    </div>
    <footer>
        copyright internous | 4each blog the which provides A to Z about programming
    </footer>

    





</body>
</html>