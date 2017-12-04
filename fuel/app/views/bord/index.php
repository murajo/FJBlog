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
    
    <script type="text/javascript" src="ajax.js?ver=1.0"></script>

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
        ばーじょんは1.1.5だよ！<br>
        <form class="form-horizontal" method="post">
            <div class="row"><div class="col-sm-push-10 col-sm-2"><button class="btn btn-success btn-block" name="logout" value="logout">ログアウト</button></div></div>
        </form>
    </div>

    <div class="gazou" align="center">
        <?=Asset::img('FJBlog.png')?>
    </div>

    <h2>～みんなの投稿～</h2>

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
    <?php if($username != 'guest') : ?>
    <div class="toukou">
        <form action="bord.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
            <p><textarea name="text" placeholder="本文を入力してください"></textarea></p>
            <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
    </div>
    <?php endif; ?>

</body>
</html>