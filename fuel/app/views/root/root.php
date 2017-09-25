<!DOCTYPE html>
<head>
    <title>管理者ページ</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-2 "></div>
        <div class="col-xs-7 ">
            <form class="form-signin" method="post" action="root">


                <h3>アカウント作成</h3>
                <?php if (isset($create_err) && $create_err): ?>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3 alert alert-danger"><?= $create_err; ?></div>
                    </div>
                <?php endif ?>
                ユーザ名<input name="create_username" type="text" style="width: 500px;" class="form-control" placeholder="">
                パスワード<input name="create_password" type="password" style="width: 500px;" class="form-control"
                            placeholder="">
                メールアドレス<input name="create_email" type="text" style="width: 500px;" class="form-control"
                              placeholder="">
                <button name='action' value="create" class="btn btn-embossed btn-primary">
                    作成
                </button>

                <h3>アカウント削除</h3>
                <?php if (isset($delete_err) && $delete_err): ?>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3 alert alert-danger"><?= $delete_err; ?></div>
                    </div>
                <?php endif ?>
                ユーザ名<input name="delete_username" type="text" style="width: 500px;" class="form-control" placeholder="">
                <button name='action' value="delete" class="btn btn-embossed btn-primary">
                    削除
                </button>

                <h3>パスワード変更</h3>
                <?php if (isset($update_err) && $update_err): ?>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-3 alert alert-danger"><?= $update_err; ?></div>
                    </div>
                <?php endif ?>
                ユーザ名<input name="change_user" type="text" style="width: 500px;" class="form-control" placeholder="">
                新しいパスワード<input name="change_password" type="password" style="width: 500px;" class="form-control"
                               placeholder="">
                <button name='action' value="update" class="btn btn-embossed btn-primary">
                    変更
                </button>

        </div>
        <div class="col-xs-3">
            <button name="action" value="logout" class="btn btn-embossed btn-primary">
                ログアウト
            </button>
            <br>
            <h3>ユーザ情報</h3>
            <?php foreach ($user_list as $result): ?>
                <table class="table  table-hover table-condensed" border="1">
                    <td>ID <?= $result->id ?><br>
                        ユーザ名 <?= $result->username ?><br>
                        メールアドレス <?= $result->email ?><br>
                        アカウント作成日時 <?= date("Y/m/d H:i:s",$result->created_at+ 25200) ?><br>
                        最終ログイン <?= date("Y/m/d H:i:s",$result->last_login + 25200) ?><br>
                    </td>
                </table>
            <?php endforeach; ?>
            </form>
        </div>
</body>
</html>