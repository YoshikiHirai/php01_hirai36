
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>post.php</title>
    </head>

    <header>
        <p>ユーザー登録</p>
    </header>

    <body>
    <form method="post" action="write.php">
     <ul>
        <li>
        <dl>
            <dt>
                <ul>
                    <li>お名前</li>
                </ul>
            </dt>
            <dd>
                <ul>
                    <li><input class="input" maxlength="32" name="name" type="text"style="margin-right: 10px; " required/></li>
                </ul>
            </dd>
        </dl>       
        </li> 
        <li>
        <dl>
            <dt>
                <ul>
                    <li>メールアドレス</li>
                </ul>
            </dt>
            <dd>
                <ul>
                    <li><input class="input" maxlength="32" name="mail" type="text" style="margin-right: 20px; " required/></li>
                </ul>
            </dd>
        </dl>
        </li>

        <li>
            <p><input type="submit" value="登録"></p>
        </li>

    </ul>

        </form>

        <ul>
            <li><p><a href="index.php">TOPへ</a></p></li>
            <li><p><a href="read.php">データ</a></p></li>
        </ul>
    </body>

</html>
