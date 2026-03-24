<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Створити акаунт</h1>
    <form action="/auth/store" method="POST">
        <input type="text" name="username" placeholder="Нікнейм" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Пароль" required><br><br>
        <button type="submit">Зареєструватися</button>
    </form>
</body>
</html>