<!DOCTYPE HTML>
<html lang="ja">
    <meta charset="UTF-8">
<?=Asset::css('style.css')?>
<head>
    <link rel="SHORTCUT ICON" HREF="assets/img/favicon.ico">
    <title>FJBlog</title>
</head>
<body>
<!-- バージョン表記 -->
<div class="ver" align="right">
    ばーじょんは1.0だよ！
</div>

<div class="gazou" align="center">
<?=Asset::img('FJBlog.png')?>
</div>
<!-- トップ等のアクセス -->
<table border="2" align="center" class="aaa">
　<tr class="main" data-ng-href="">
　　<th class="home"><a href="">ホーム</a></th>
　　<th class="twitter"><a href="">twitter</a></th>
    <th class"keijibann"><a href="">けいじばん</a></th>
　</tr>
</table><!-- トップ等のアクセス　ここまで -->

<h2>～みんなの投稿～</h2>

<!-- ユーザーの投稿 -->
 <?php foreach ($dbObj as $result): ?>
<table style="border-collapse:collapse;border:none;" align="center" class="bbb">
　<tr class="space">
　　<th class="user"><?= $result->username ?></th>
　　<th class="text"><?= $result->text ?></th>
    <th class="timestamp"><?= $result->created_at ?></th>
　</tr>
<?php endforeach ?>

</table><!-- 投稿テーブルここまで -->

<div class="toukou">
<form action="bord.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
    <label><input type="text" name="user" placeholder="ユーザー名"></label>
    <p><textarea name="text" placeholder="本文を入力してください"></textarea></p>
    <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
</div>

</body>
</html>