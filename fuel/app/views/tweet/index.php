<!DOCTYPE html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php foreach ($tweets as $result): ?>
    <table class="table  table-hover table-condensed" border="1">
        <td><?= $result->text ?>
            <?= $result->user->name ?>
            <?= $result->user->screen_name ?>
            <img src="<?= $result->user->profile_image_url ?>">
            <?= date("Y/m/d H:i:s",strtotime($result->created_at)) ?></td>
    </table>
<?php endforeach; ?>
</body>

