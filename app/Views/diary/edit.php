<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Редагувати запис</h1>
    <form action="/diary/update/<?php echo $entry['id']; ?>" method="POST">
        <input type="text" name="title" value="<?php echo htmlspecialchars($entry['title']); ?>" required style="width: 100%; padding: 10px;"><br><br>
        <textarea name="content" rows="10" required style="width: 100%; padding: 10px;"><?php echo htmlspecialchars($entry['content']); ?></textarea><br><br>
        <button type="submit">Зберегти зміни</button>
        <a href="/diary/index">Скасувати</a>
    </form>
</body>
</html>