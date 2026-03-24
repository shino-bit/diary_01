<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <a href="/diary/index">← Назад до списку</a>
    <h1>Новий запис у щоденник</h1>
    <form action="/diary/store" method="POST">
        <input type="text" name="title" placeholder="Заголовок" required style="width: 100%; padding: 10px;"><br><br>
        <textarea name="content" placeholder="Що у вас на думці?" rows="10" required style="width: 100%; padding: 10px;"></textarea><br><br>
        <button type="submit" style="padding: 10px 20px; cursor: pointer;">Зберегти запис</button>
    </form>
</body>
</html>