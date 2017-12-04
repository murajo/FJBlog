<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <?=Asset::css('login.css')?>
    <meta charset="utf-8">
    <title>アカウント作成情報入力</title>
</head>
<body>
<div class="parent" align="center">
    <h1>アカウント作成情報入力</h1>
    <?php if (isset($create_err) && $create_err): ?>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 alert alert-danger"><?= $create_err; ?></div>
        </div>
    <?php endif ?>
    <form action="createuser" method="post">
        <p>ユーザ名<br>
        ※ユーザ名は半角英数字 4文字以上12文字以内</p><input type="text" name="username"><br>
        <p>パスワード<br>
        ※パスワードは半角英数字 7文字以上20文字以内</p><input type="password" name="password"><br>
        <p>パスワード(確認用)</p><input type="password" name="password_retype"><br>
        <div class="input#submit_button" align="center">
            <input id="submit_button" type="submit" name="send" value="送信"><br><br>
        </div>
</div>
</form>
</body>
</html>