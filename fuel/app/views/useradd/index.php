<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ユーザ作成</title>
</head>
<body>
<div class="parent" align="center">
    <form action="useradd" method="post">
        <p>メールアドレス</p><input type="text" name="mailaddress"><br>
        <button name='action' value="sendmail" class="btn btn-embossed btn-primary">
            メール送信
        </button>
        <p><?php if(isset($msg))?></p>
        <p><?php if(isset($errmsg))?></p>
</div>
</form>
</body>
</html>