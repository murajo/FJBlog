<!DOCTYPE HTML>
<html lang="ja">
<meta charset="UTF-8">
<?=Asset::css('drop.css')?>
<?=Asset::css('style.css')?>
<?=Asset::css('table.css')?>
<?=Asset::css('form.css')?>
<head>
    <link rel="SHORTCUT ICON" HREF="assets/img/favicon.ico">
    <title>FJBlog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.drawer').drawer({
                navListClass: "test"
            });
        });
    </script>
</head>
<body class="drawer drawer--left" style="overflow-x: hidden">

<header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
        <!-- ここからドロップダウンの中身 -->

        <ul class="drawer-menu">
            <div class="drawer-back">
                <li><a class="drawer-menu-item " href="http://localhost/FJBlog/public/bord">
                        <div class="drawer-char">ホームページ</div>
                    </a></li>
                <li><a class="drawer-menu-item" href="http://localhost/FJBlog/public/tweet">
                        <div class="drawer-char">Twitter検索</div>
                    </a></li>
                <li><a class="drawer-menu-item" href="http://localhost/FJBlog/public/lunch">
                        <div class="drawer-char">Lunchlog</div>
                    </a></li>
                <li><a class="drawer-menu-item" href="http://localhost/FJBlog/public/tweet">
                        <div class="drawer-char">マニュアル</div>
                    </a></li>
                <li><a class="drawer-menu-item" href="http://localhost/FJBlog/public/tweet">
                        <div class="drawer-char"></div>
                    </a></li>
                <li><br><br><br><br><br><br><br><br><br><br><br><br><br></li>
            </div>
        </ul>
        <!-- ここまでドロップダウンの中身 -->
    </nav>

</header>
<main role="main">
    <!-- バージョン表記 -->
    <div class="ver" align="right">
        ばーじょんは1.1.5だよ！
    </div>

    <div class="gazou" align="center">
        <?=Asset::img('FJBlog.png')?>
    </div>

    <div class="food">
        <p><a class="conbini" href="lunch/conbini">コンビニ</a></p>
        <p><a class="eat" href="lunch/noodle">ラーメン</a></p>
        <p><a class="fami" href="lunch/fami">ファミレス</a></p>
        <p><a class="jk" href="lunch/jk">インスタ</a></p>
    </div>

    <h2>～みんなの声～</h2>

    <!-- ユーザーの投稿 -->
    <?php foreach ($dbObj as $result): ?>
        <table class="timeline" align="center">
            <tr>
                <td class="user"><?= $result->username ?></td>
                <td class="text"><?= $result->text ?></td>
                <td class="time"><?= $result->created_at ?></td>
            <tr>
        </table>
    <?php endforeach ?>

    <div class="toukou">
        <form action="lunch.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
            <label><input type="text" name="user" placeholder="ユーザー名"></label>
            <p><textarea name="text" placeholder="本文を入力してください"></textarea></p>
            <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
    </div>

</body>
</html>