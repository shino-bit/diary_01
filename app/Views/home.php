<?php require_once __DIR__ . '/header.php'; ?>

<div style="text-align: center; padding: 50px 0;">
    <?php if (isset($_SESSION['user_id'])): ?>
        <h1>Вітаємо, <?php echo $_SESSION['username']; ?>! 👋</h1>
        <p class="status-badge">Твій статус: <strong><?php echo $_SESSION['role']; ?></strong></p>
        <div style="margin-top: 20px;">
            <a href="/diary/index" class="btn btn-primary">Перейти до щоденника</a>
        </div>
    <?php else: ?>
        <h1>Вітаємо у Вашому Онлайн-щоденнику!</h1>
        <p>Будь ласка, увійдіть або зареєструйтеся, щоб почати писати.</p>
        <div style="margin-top: 20px;">
            <a href="/auth/login" class="btn btn-primary">Увійти</a>
            <a href="/auth/register" class="btn btn-success">Реєстрація</a>
        </div>
    <?php endif; ?>
</div>
