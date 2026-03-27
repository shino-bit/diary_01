<?php require_once '../app/Views/header.php'; ?>

<div class="auth-card">
    <h2>Створити акаунт</h2>
    <form action="/auth/store" method="POST">
        <label>Ваш нікнейм</label>
        <input type="text" name="username" placeholder="Наприклад: shino-bit" required>
        
        <label>Email адреса</label>
        <input type="email" name="email" placeholder="example@mail.com" required>
        
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Мінімум 6 символів" required>
        
        <button type="submit" class="btn btn-success">Зареєструватися</button>
    </form>
    
    <div class="auth-footer">
        Вже маєте акаунт? <a href="/auth/login">Увійти</a>
    </div>
</div>
