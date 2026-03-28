<?php require_once __DIR__ . '/../header.php'; ?>

<div class="auth-container">
    <div class="auth-card register-card">
        <h2 class="auth-title">Створити акаунт</h2>
        
        <?php if (isset($error)): ?>
            <div class="auth-error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="/auth/store" method="POST" class="auth-form">
        <div class="form-group">
            <label for="username">Логін</label>
            <input type="text" id="username" name="username" placeholder="Придумайте логін" required>
        </div>

        <div class="form-group">
            <label for="email">Електронна пошта</label>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="Мінімум 6 символів" required>
        </div>
        
        </form>
        <div class="auth-footer">
            <p>Аккаунт присутній <a href="/auth/login">Увійти</a></p>
        </div>
    </div>
</div>

</div> </body>
</html>