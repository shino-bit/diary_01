<?php require_once __DIR__ . '/../header.php'; ?>

<div class="auth-container">
    <div class="auth-card">
        <h2 class="auth-title">Вхід у систему</h2>
        
        <?php if (isset($error)): ?>
            <div class="auth-error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="/auth/authenticate" method="POST" class="auth-form">
            <div class="form-group">
                <label for="email">Електронна пошта</label>
                <input type="email" id="email" name="email" placeholder="Введіть ваш email" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" placeholder="Введіть пароль" required>
            </div>

            <button type="submit" class="btn-login">Увійти</button>
        </form>

        <div class="auth-footer">
            <p>Відсутній акаунт <a href="/auth/register">Зареєструватися</a></p>
        </div>
    </div>
</div>

</div> </body>
</html>