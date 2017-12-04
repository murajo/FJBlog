<!DOCTYPE html>
<html lang="ja">
    <?=Asset::css('jk.css')?>
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

    <h2>インスタ映え</h2>

    <h3>幸せのパンケーキ 船橋店</h3>
    <?=Asset::img('pancake.jpg')?>
    <?=Asset::img('pancake2.jpg')?>
    <element class="jk">
    <p>
    世界一ふわふわでしっとり感のあるパンケーキに濃厚でクリーミーな<br>
    ニュージーランドの高級マヌカハニーと発酵バターをブレンドしたホ<br>
    イップクリームを絡めるとこれまでになかった驚きと感動に包まれま<br>
    す。
    </p></element>



    <h3>FES by asobi</h3>
    <?=Asset::img('asobi.jpg')?>
    <?=Asset::img('asobi2.jpg')?>
    <element class="jk">
    <p>
    店内がおしゃれな感じなのと、様々なタイプの席が用意されているので<br>
    今度はあっちの席に座ってみたいな～～～と思ったりします。料理は見<br>
    た目も味も良かったです。
    </p></element>

    <h3>スターバックス　シャポー 船橋店</h3>
    <?=Asset::img('staba3.jpg')?>
    <?=Asset::img('staba2.jpg')?>
    <element class="jk">
    <p>船橋駅から徒歩1分です。作業や待ち合わせにも適していると思いま<br>
    す。</p></element><br>



    <h3>Bistro Incontro </h3>
    <?=Asset::img('bistro.jpg')?>
    <?=Asset::img('bistro2.jpg')?>
    <element class="jk">
    <p>
    Bistro Incontroはイタリアンとフレンチを融合させたレストランです。<br>
    食材は健康志向を意識した体に良い素材、肉料理はこだわりのブランド肉<br>
    を使い、魚料理は自分で市場まで足を運び、厳選した確かな品を使用して<br>
    いるそうです。ランチだと値段が手ごろです。</p>
    </element>

    <h3>フラッグスカフェ　東武船橋店</h3>
    <?=Asset::img('flags2.jpg')?>
    <?=Asset::img('flags.jpg')?>
    <element class="jk">
    <p>東武百貨店４Fにあるカフェです。4℃がプロデュースしています。紅茶<br>
        の種類が豊富です。</p>
    </element><hr>
        <?php foreach ($dbObj as $result): ?>
            <table class="timeline" align="center">
                <tr>
                    <td class="shop"><?= $result->shopname ?></td>
                    <td class="voice"><?= $result->voice ?></td>
                <tr>
            </table>
        <?php endforeach ?>

    <div class="toukou">
        <form action="jk.php" method="post" onsubmit="return false"><!-- Enterが押されてもsubmitしない -->
            <select name="shop">
                    <option disabled="disabled" selected>お店を選択</option>
                    <option value="幸せのパンケーキ">幸せのパンケーキ</option>
                    <option value="FES by asobi">FES by asobi</option>
                    <option value="スターバックス">スターバックス</option>
                    <option value="Bistro Incontro">Bistro Incontro</option>
                    <option value="フラッグスカフェ">フラッグスカフェ</option>
            </select>
            <p><textarea name="voice" placeholder="本文を入力してください"></textarea></p>
            <input class="sousin" type="button" name="save" value="送信" onclick="submit()"><!-- ボタンが押されたときsubmitする -->
    </div>
</body>
</html>