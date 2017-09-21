<!DOCTYPE html>
<head>
    <?= Asset::add_path('assets/FlatUI/dist/css/', 'css'); ?>
    <?= Asset::add_path('assets/FlatUI/dist/css/vendor/bootstrap/css/bootstrap.min.css', 'css'); ?>
    <?= Asset::add_path('assets/FlatUI/dist/js/vendor', 'js'); ?>
    <?= Asset::add_path('assets/FlatUI/js/', 'js'); ?>
    <?= Asset::add_path('assets/FlatUI/docs/assets/js/', 'js'); ?>
    <?= Asset::css('bootstrap.min.css'); ?>
    <?= Asset::css('flat-ui.css'); ?>
    <?= Asset::css('flat-ui.min.css'); ?>
    <?= Asset::js('html5shiv.js'); ?>
    <?= Asset::js('respond.min.js'); ?>
</head>
<body>
<?php foreach ($tweets as $result): ?>
    <table class="table  table-hover table-condensed" border="1">
        <td><?= $result->text ?>
            <?= $result->user->name ?>
            <?= $result->user->screen_name ?>
            <img src="<?= $result->user->profile_image_url ?>">
            <?= strtotime($result->created_at) ?></td>
    </table>
<?php endforeach; ?>
<?= Asset::js('jquery.min.js'); ?>
<?= Asset::js('video.js'); ?>
<?= Asset::js('radiocheck.js'); ?>
<?= Asset::js('application.js'); ?>
</body>

