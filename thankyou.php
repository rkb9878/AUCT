<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thankyou | AUCT</title>
    <?php include 'headerfile.php' ?>
</head>
<body>
<?php include 'navbar.php' ?>
<br>
<div class="text-center">
    <h2 class="display-3">Thank you</h2>
    <?php
    if (isset($_GET['d'])) {
        ?>
        <h2><?php echo $_GET['d'] ?></h2>
        <?php
    }
    ?>
</div>
<br>
<?php include 'footer.php' ?>
</body>
</html>