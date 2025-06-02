<?php
    include __DIR__ . "/service/login.php";
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

    <main>
        <div class="container">
            <div class="d-flex align-content-center justify-content-center text-center">
                <div class="card mt-5  p-4  w-25">
                    <h4 >Авторизация</h2>

                    <div class="log-form">
                        <form action="login.php" method="post" class="d-grid gap-2 col">

                            <div>
                                <input type="text" placeholder='Логин' class='rounded ' name="login" required>
                            </div>

                            <div>
                                <input type="password" placeholder='Пароль' class='rounded '  name="password" required>
                            </div>
                            <?php if (isset($_SESSION['exp'])): ?>
                                <p class="text-danger"><?php echo $_SESSION['exp']; ?></p>
                            <?php endif; ?>

                            <div class="w-100">
                                <button name="btn-log" class="btn btn-primary text-wrap w-75" type="submit">Войти</button>
                            </div>
                            <a href="reg.php" class="fs-6">Нет аккаунта?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include __DIR__ . "/templates/footer.php";
    ?>
</body>

</html>