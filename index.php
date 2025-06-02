<?php
    include __DIR__ . "/database/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <script src="/scripts/bootstrap.js"></script>
    <title>Pizolizo</title>
</head>

<body>
    <?php
        include __DIR__ . "/templates/header.php";
    ?>

    <?php
        include __DIR__ . "/templates/main.php";
    ?>

    <?php
        include __DIR__ . "/templates/footer.php";
    ?>
</body>

</html>