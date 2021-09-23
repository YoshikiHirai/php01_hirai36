<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>post.php</title>
</head>

<header>
<p>登録完了！</p>
</header>

<body>

<?php
    //POSTの受け取りは$_POST["input名"];
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $profile = [$name, $mail];
    for ($i = 0; $i < count($profile); $i++) {
        $str = $str.','.$profile[$i];
    }
    $str = mb_substr($str,1)."\n";
?>

    お名前：<?php echo $name; ?><br>
    EMAIL：<?php echo $mail; ?><br>


    <ul>
        <li><p><a href="index.php">TOPに戻る</a></p></li>
        <li><p><a href="read.php">会員登録データの閲覧</a></p></li>
    </ul>



    </body>

    </html>

    <?php
    $file = fopen('./data/data.txt', 'a' ); //ファイルOPEN
    fwrite( $file, $str ); //書込みです
    fclose( $file ); //ファイル閉じる
    ?>