<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?=Asset::add_path('assets/FlatUI/dist/css/','css');?>
    <?=Asset::add_path('assets/FlatUI/dist/css/vendor/bootstrap/css/bootstrap.min.css','css');?>
    <?=Asset::add_path('assets/FlatUI/dist/js/vendor','js');?>
    <?=Asset::add_path('assets/FlatUI/js/','js');?>
    <?=Asset::add_path('assets/FlatUI/docs/assets/js/','js');?>
    <?=Asset::css('bootstrap.min.css');?>
    <?=Asset::css('flat-ui.css');?>
    <?=Asset::css('flat-ui.min.css');?>
    <?=Asset::js('html5shiv.js');?>
    <?=Asset::js('respond.min.js');?>
</head>
<body>
<h2>アカウント作成</h2>
<form class="form-signin" method="post" action="telapo">
    ユーザー名<input name="username" type="text" style="width: 500px;" class="form-control" placeholder="">
    パスワード<input name="password" type="パスワード" style="width: 500px;" class="form-control" placeholder="">
    メールアドレス<input name="email" type="text" style="width: 500px;" class="form-control" placeholder="">
</form>
<?=Asset::js('jquery.min.js');?>
<?=Asset::js('video.js');?>
<?=Asset::js('radiocheck.js');?>
<?=Asset::js('application.js');?>
</body>
</html>