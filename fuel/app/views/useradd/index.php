<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <?=Asset::css('login.css')?>
    <title>ユーザ作成</title>
</head>
<body>
<div class="parent" align="center">
    <h1>アカウント登録</h1>

    <?php if (isset($create_err) && $create_err): ?>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 alert alert-danger"><?= $create_err; ?></div>
        </div>
    <?php endif ?>
    <form action="useradd" method="post">
        <p>メールアドレス</p><input type="text" name="mailaddress"><br><br>
        <div class="input#submit_button" align="center">
            <input id="submit_button" type="submit" name="sendmail" value="メール送信">
        </div>
        <p><?php  if (isset($good)) echo $good?></p>
        <p><?php if(isset($msg)) echo $msg?></p>
        <p><?php if(isset($errmsg))echo $errmsg?></p>
        <h3>アカウント情報入力のためのURLをご指定のメールアドレスに送ります<br>
        </h3><br>
</div>
</form>
</body>
</html>