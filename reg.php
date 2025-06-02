<?php
    include __DIR__ . "/service/reg.php";
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
                    <h4 >Регистарция</h2>

                    <div class="reg-form">
                        <form action="reg.php" method="post" class="d-grid gap-2 col">
                            <div>
                                <input type="text" placeholder='ФИО' class='rounded ' name="fio" required>
                            </div>
                            <div>
                                <input type="email" placeholder='Почта' class='rounded ' name="email" required>
                            </div>
                            <div>
                                <input type="text" placeholder='Логин' class='rounded ' name="login" required>
                            </div>
                            <div>
                                <input type="password" placeholder='Пароль' class='rounded '  name="password" required>
                            </div>
                            <div>
                                <input type="number" placeholder='Номер телефона' class='rounded '  name="phone" required>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <input id="rule" type="checkbox" class='rounded ' name="rule" required>
                                <label for="rule">Пользовательское соглашение</label>
                            </div>

                            <?php if (isset($_SESSION['exp'])): ?>
                                <p class="text-danger"><?php echo $_SESSION['exp']; ?></p>
                            <?php endif; ?>

                            <div class="w-100">
                                <button name="btn-reg" class="btn btn-primary text-wrap w-75" type="submit">Регистарция</button>
                            </div>
                            <a href="login.php" class="fs-6">Есть аккаунт?</a>
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