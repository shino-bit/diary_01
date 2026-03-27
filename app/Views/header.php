<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Щоденник'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <div>
        <strong>Diary</strong>
    </div>
    <nav>
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="/admin/index" style="color: #EE1515; margin-right: 10px;">Адмін</a>
            <?php endif; ?>
            
            <span>Вітаю, <?php echo $_SESSION['username']; ?></span>
            <a href="/diary/index">Мій Щоденник</a>
            <a href="/auth/logout" style="color: #ff7675;">Вийти</a>
        <?php else: ?>
            <a href="/auth/login">Вхід</a>
            <a href="/auth/register">Реєстрація</a>
        <?php endif; ?>
    </nav>
</header>
<div class="container">