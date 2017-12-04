<!doctype html>
<html lang="ja">
    <?=Asset::css('jk.css')?>
    <?=Asset::css('jkdrop.css')?>
    <?=Asset::css('table.css')?>
    <?=Asset::css('form.css')?>
<head>
    <link rel="SHORTCUT ICON" HREF="assets/img/favicon.ico">
    <meta charset="utf-8">
    <title>船橋周辺のファミレス</title>
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
    <h2>船橋駅周辺のファミレス</h2><hr>


    <h3>サイゼリヤ　イトーヨーカドー店</h3>
    <?=Asset::img('sizy.jpg')?>
    <div class="jk">
     <p>よく見覚えのあるサイゼリヤ、船橋駅南口店よりも混んでいる印象</p><br>
    </div>

    <h3>サイゼリヤ　船橋駅南口店</h3>
    <?=Asset::img('size.png')?>
    <div class="jk">
        <p>ビルの一回にあり、近くにカラオケやネカフェもあるので
        息抜きにどうぞ</p><br>
    </div>

    <h3>ガスト　京成船橋駅前店</h3>
    <?=Asset::img('gast.png')?>
    <div class="jk">
        <p>ポテトにケチャップとマヨネーズがついてくる、美味しい</p><br>
    </div>

    <h3>ロイヤルホスト　船橋北店</h3>
    <?=Asset::img('royaru.png')?>
    <div class="jk">
        <p>他よりは少しお高い印象だが、ちょっと贅沢な気分になれる</p><br>
    </div>

    <h3>不二家レストラン　船橋東部店</h3>
    <?=Asset::img('fuji.jpg')?>
    <div class="jk">
        <p>パフェなどスイーツが豊富</p><br><hr>
    </div>

    <?php foreach ($dbObj as $result): ?>
        <table class="timeline" align="center">
            <tr>
                <td class="shop"><?= $result->shopname ?></td>
                <td class="voice"><?= $result->voice ?></td>
            <tr>
        </table>
    <?php endforeach ?>

    <div class="toukou">
        <form action="fami.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
                <select name="shop">
                    <option disabled="disabled" selected>レストランを選択</option>
                    <option value="サイゼリヤ　イトーヨーカドー店">サイゼリヤ　イトーヨーカドー店</option>
                    <option value="サイゼリヤ　船橋駅南口店">サイゼリヤ　船橋駅南口店</option>
                    <option value="ガスト　京成船橋駅前店">ガスト　京成船橋駅前店</option>
                    <option value="ロイヤルホスト　船橋北店">ロイヤルホスト　船橋北店</option>
                    <option value="不二家レストラン　船橋東部店">不二家レストラン　船橋東部店</option>
                </select>
            <p><textarea name="voice" placeholder="本文を入力してください"></textarea></p>
            <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
    </div>

    </body>
</html>