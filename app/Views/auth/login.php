<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Вхід до щоденника</h1>
    <form action="/auth/auth" method="POST">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Пароль" required><br><br>
        <button type="submit">Увійти</button>
    </form>
</body>
</html>