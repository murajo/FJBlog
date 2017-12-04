<!DOCTYPE html>
<html lang="ja">
    <?=Asset::css('conbini.css')?>
    <?=Asset::css('jkdrop.css')?>
    <?=Asset::css('table.css')?>
    <?=Asset::css('form.css')?>
<head>
    <link rel="SHORTCUT ICON" HREF="assets/img/favicon.ico">
    <meta charset="utf-8">
    <title>インスタ映え</title>

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
<body>
    <h2>周辺のコンビニ</h2>
        <?=Asset::img('chizu1.png')?>
    <h3>セブンイレブン</h3>
        <p>徒歩一分。一番近いのですが、お昼の時間は混雑しています。</p><br>
    <h3>ファミリーマート</h3>
        <p>徒歩三分。比較的空いています。</p><br><hr>

        <?php foreach ($dbObj as $result): ?>
            <table class="timeline" align="center">
                <tr>
                    <td class="shop"><?= $result->shopname ?></td>
                    <td class="voice"><?= $result->voice ?></td>
                <tr>
            </table>
        <?php endforeach ?>

    <div class="toukou">
        <form action="conbini.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
            <select name="shop">
                    <option disabled="disabled" selected>お店を選択</option>
                    <option value="セブンイレブン">セブンイレブン</option>
                    <option value="ファミリーマート">ファミリーマート</option>
            </select>
            <p><textarea name="voice" placeholder="本文を入力してください"></textarea></p>
            <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
    </div>
</body>
</html>