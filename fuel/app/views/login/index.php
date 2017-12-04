<!--login.html-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <?=Asset::css('login.css')?>
    <meta charset="utf-8">
    <title>ログインページ</title>
</head>
<body>
<div class="parent" align="center">
    <h2>FJBlogにログイン</h2>
    <form action="login" method="post">
        <p>ユーザ名</p><input type="text" name="username"><br>
        <p>パスワード</p><input type="password" name="password" size="20" maxlength="20"><br><br>
        <!--ボタン-->
        <div class="input#submit_button" align="center">
            <input id="submit_button" type="submit" name="login" value="ログイン"><br><br>
            <input id="submit_button" type="submit" name="login" value="ゲストログイン">
        </div>
        <p><?=$error?></p>
</div>
</form>
</body>
</html>