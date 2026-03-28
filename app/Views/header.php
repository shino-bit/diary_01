<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Щоденник'; ?></title>
    
    <link rel="stylesheet" href="/css/header.css">
    
    <?php 
        $url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : ['home'];
        
        // Визначаємо пріоритет: 
        // 1. Якщо є друга частина URL (наприклад, 'create'), шукаємо 'create.css'
        // 2. Якщо немає, беремо першу частину (наприклад, 'diary') і шукаємо 'diary.css'
        $styleName = (isset($url[1]) && !empty($url[1])) ? $url[1] : $url[0];

        // Перевіряємо наявність файлу в папці public/css/
        if (file_exists("css/{$styleName}.css")): ?>
            <link rel="stylesheet" href="/css/<?php echo $styleName; ?>.css">
    <?php endif; ?>
</head>
<body>

<header>
    <div class="header-logo">
        <strong>Diary</strong>
    </div>
    <nav>
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="/admin/index" class="nav-link-admin">Адмін</a>
            <?php endif; ?>
            
            <span class="user-welcome">Вітаю, <?php echo $_SESSION['username']; ?></span>
            <a href="/diary/index" class="nav-link">Мій Щоденник</a>
            <a href="/auth/logout" class="nav-link-logout">Вийти</a>
        <?php else: ?>
            <a href="/auth/login" class="nav-link">Вхід</a>
            <a href="/auth/register" class="nav-link">Реєстрація</a>
        <?php endif; ?>
    </nav>
</header>

<div class="container">