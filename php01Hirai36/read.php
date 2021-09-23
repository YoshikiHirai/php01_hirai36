
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post.php</title>
  </head>
    <header>
     <p>データ</p>
    </header>

    <body>
        <section>
            <table id="table">
                <tr>
                    <th>名前</th>
                    <th>メール</th>
                </tr>
                <?php
                    // ファイルを開く
                    $openFile = fopen('data/data.txt', 'r');
                    // ファイル内容を1行ずつ読み込んで出力
                    while ($str = fgets($openFile)) {
                        // 行末の\nを削除
                        $str = str_replace('\n', '', $str);
                        // ,ごとに配列に保管
                        $profile_read = explode(",", $str );
                        $p0 = $profile_read[0];
                        $p1 = $profile_read[1];
                        $row = <<<EOM
                            <tr>
                                <td>$p0</td>
                                <td>$p1</td>
                            </tr>
                        EOM;
                        echo $row;
                    }
                    // ファイルを閉じる
                    fclose($openFile);
                    ?>
            </table>
        </section>
        <ul>
            <li><p><a href="index.php">TOPへ</a></p></li>
            <li><p><a href="post.php">登録</a></p></li>
        </ul>

    </body>

</html>
