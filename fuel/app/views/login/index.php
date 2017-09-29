<!DOCTYPE html>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
</head>
<body>

<?php if (isset($error)): ?>
    <?php echo $error ?>
<?php endif ?>

<?php echo $form ?>

</body>
</html>
