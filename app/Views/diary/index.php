<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <span>Ви увійшли як: <b><?php echo $_SESSION['username']; ?></b></span> | 
        <a href="/auth/logout">Вийти</a>
    </header>

    <h1>Мій Щоденник</h1>
    <a href="/diary/create" style="background: green; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">+ Додати запис</a>

    <hr>

    <?php if (empty($entries)): ?>
        <p>У вас ще немає жодного запису.</p>
    <?php else: ?>
        <?php foreach ($entries as $entry): ?>
            <div style="border: 1px solid #ccc; margin-bottom: 20px; padding: 15px;">
                <h3><?php echo htmlspecialchars($entry['title']); ?></h3>
                <small>Дата: <?php echo $entry['created_at']; ?></small>
                <p><?php echo nl2br(htmlspecialchars($entry['content'])); ?></p>
                
                <div style="margin-top: 10px; padding-top: 10px; border-top: 1px dashed #eee;">
                    <a href="/diary/edit/<?php echo $entry['id']; ?>" style="color: blue; text-decoration: none;">✏️ Редагувати</a> | 
                    <a href="/diary/destroy/<?php echo $entry['id']; ?>" 
                       style="color: red; text-decoration: none;" 
                       onclick="return confirm('Ви впевнені, що хочете видалити цей запис?')">🗑️ Видалити</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>