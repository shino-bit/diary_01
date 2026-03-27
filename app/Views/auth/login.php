<?php require_once '../app/Views/header.php'; ?>

<div class="auth-card">
    <h2>Вхід у щоденник</h2>
    <form action="/auth/auth" method="POST">
        <label>Електронна пошта</label>
        <input type="email" name="email" placeholder="Введіть ваш email" required>
        
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль" required>
        
        <button type="submit" class="btn btn-primary">Увійти в систему</button>
    </form>
    
    <div class="auth-footer">
        Ще не зареєстровані? <a href="/auth/register">Створити акаунт</a>
    </div>
</div>