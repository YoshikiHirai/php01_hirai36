<!-- XSS対策用functionを定義 -->
<?php

function h($value) {
    return htmlspecialchars($value , ENT_QUOTES);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>post.php</title>

<!-- jqueryを読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- CSSをリセット -->
<link rel="stylesheet" type="text/css" href="css/reset.css">


</head>

<header>
<p>トップページ</p>
</header>

<body>

   <p><a href="post.php">会員登録ページへ</a></p>
   <p><a href="read.php">データ閲覧</a></p>
</body>

</html>



<!-- CSS -->
<style type="text/css">
p {
    margin:20px;
    
}

<?php
// 取得したプロフィールをローカルファイルに保存する
$file = fopen('./data/data.txt', 'a' ); //ファイルOPEN
fwrite( $file, $str ); //書込みです
fclose( $file ); //ファイル閉じる
?>