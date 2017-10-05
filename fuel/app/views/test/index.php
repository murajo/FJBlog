<!DOCTYPE html>
<head>
    <title>掲示板</title>
</head>
<body>
<h1>FJBlog 掲示板</h1>

            <?php foreach ($dbObj as $result): ?>
                            <?= $result->id?><br>
                        ユーザ名 <?= $result->username ?><br>
                        テキスト<?= $result->text ?><br>
                        投稿日時<?= $result->created_at ?><br><br>
            <?php endforeach ?>

        <p>投稿欄</p>
        <form action="test" method="post">
            <input type="text" name="user" size="8"><br>
            <input type="text" name="tx" size="10">
            <button name='action' value="save">投稿</button>
        </form>
</body>
</html>