<?php
include_once './config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
    <script>
        loadingText = 'Дипак Чопра Печатает'
    </script>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="content-wrapper">
                <?php include('./templates/celebrity-wrapper.php') ?>

                <?php include('./templates/content.php') ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>