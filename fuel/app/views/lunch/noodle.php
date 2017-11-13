<!doctype html>
<html lang="ja">
<?=Asset::css('food.css')?>
<?=Asset::css('table.css')?>
<head>
    <link rel="SHORTCUT ICON" HREF="assets/img/favicon.ico">
    <meta charset="utf-8">
    <title>FJB周辺のラーメン屋</title>
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
    <h2>FJB周辺のラーメン屋</h2><hr>


    <h3>いさりび</h3>
    <div class="a"><?=Asset::img('isaribi.png')?></div>
    <div class="noodle">
        <p>あっさりとした本格ラーメン、お店一押しの自家製ラー油はやみつきに<br>
            なりやめられない。<br>
            途中で調味料を加えて、何回も味の変化を楽しめるので飽きが来ない。</p>
    </div><hr>

    <h3>青葉</h3>
    <div class="a"><?=Asset::img('aoba.png')?></div>
    <div class="noodle">
        <p>昼時はいつも混んでいる、中華風特製ラーメンの味玉は特に絶品の一品<br>
            水にレモンが入ってるところもオシャレで雰囲気が良いです。</p>
    </div><hr>

    <h3>まるは</h3>
    <div class="a"><?=Asset::img('aoba.png')?></div>
    <div class="noodle">
        <p>店内が広いので、4人~大人数で行く時はここがオススメ！<br>
            鶏白湯のコラーゲンを含んだメニューもあるので女性にも人気。</p>
    </div><hr>

    <h3>ぎらぎら</h3>
    <div class="a"><?=Asset::img('siro.png')?></div>
    <div class="noodle">
        <p>ランチ時は大盛もしくはライスが無料でついてくる。<br>
            量が多く、濃厚スープが特徴的で食べ盛りの学生に人気！</p>
    </div><hr>

    <h3>麺屋二代目弦</h3>
    <div class="a"><?=Asset::img('nidaime.png')?></div>
    <div class="noodle">
        <p>スープや小松菜にこだわっているラーメンが楽しめます。<br>
            真空低温調理の鶏チャーシューが特徴的で美味しい！</p>
    </div><hr>

    <h3>無限大</h3>
    <div class="a"><?=Asset::img('aoba.png')?></div>
    <div class="noodle">
        <p>太麺の無限大ラーメンと細麺の無双ラーメンを気分で選べる。<br>
            たっぷりと入っている野菜が美味しく特徴的！</p>
    </div><hr>

    <?php foreach ($dbObj as $result): ?>
        <table class="timeline" align="center">
            <tr>
                <td class="shop"><?= $result->shopname ?></td>
                <td class="voice"><?= $result->voice ?></td>
            <tr>
        </table>
    <?php endforeach ?>

    <div class="toukou">
        <form action="noodle.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
            <label><input type="text" name="shop" placeholder="店名"></label>
            <p><textarea name="voice" placeholder="本文を入力してください"></textarea></p>
            <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
    </div>

    </body>
</html>