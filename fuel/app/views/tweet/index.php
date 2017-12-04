<!DOCTYPE HTML>
<html lang="ja">
<meta charset="UTF-8">
<?=Asset::css('drop.css')?>
<?=Asset::css('style.css')?>
<?=Asset::css('table.css')?>
<?=Asset::css('form.css')?>
<head>
    <link rel="SHORTCUT ICON" HREF="assets/img/favicon.ico">
    <title>Twitter検索</title>
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

    <h2>～twitter検索～</h2>

    <div class="kensaku">
        <form action="tweet.php" method="post">
            <p><input type="text" name="search" maxlength="20" placeholder="検索したいキーワード"></p>
            <input class="sousin" type="submit" name="save" value="検索">
    </div>

    <?php date_default_timezone_set('Asia/Tokyo')?>

    <?php foreach ($tweets as $result): ?>
        <table class="info" align="left">
            <td class="twimg"><img src="<?= $result->user->profile_image_url ?>"></td>
            <td class="twid"><?= $result->user->screen_name ?></td>
        </table>

        <table class="timeline" border="1" bordercolor="green" align="center">
            <tr>
                <td class="user"><?= $result->user->name ?></td>
                <td class="text"><?= $result->text ?></td>
                <td class="time"><?= date("Y/m/d H:i",strtotime($result->created_at)) ?></td>
            </tr>
        </table>
    <?php endforeach; ?>
</body>
</html>
