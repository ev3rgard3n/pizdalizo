<header>
    <nav class="nav justify-content-between bg-sky">
        <div class="img-logo w-25">
            <img src="" alt="Едем, но это не точно">
        </div>
        <div class="d-flex justify-content-evenly w-25 navigate">
            <a href="#">
                <p>О нас</p>
            </a>
            <a href="#">
                <p>Авто</p>
            </a>

            <?php if (isset($_SESSION['user'])): ?>
                <a href="#">
                    <p>Профиль </p>
                </a>
            <?php else: ?>
                <a href="login.php">
                    <p class="login-btn">Войти</p>
                </a>
            <?php endif; ?>
        </div>
    </nav>
</header>
