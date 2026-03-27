<?php require_once __DIR__ . '/../header.php'; ?>

<div class="auth-card" style="max-width: 700px;">
    <a href="/diary/index" style="text-decoration: none; color: #888; font-size: 14px;">← Назад до списку</a>
    <h2 style="margin-top: 15px;">Новий запис</h2>
    
    <form action="/diary/store" method="POST">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Заголовок</label>
        <input type="text" name="title" placeholder="Впиши загаловок" required>
        
        <label style="display: block; margin-top: 15px; margin-bottom: 5px; font-weight: bold;">Зміст нотатки</label>
        <textarea name="content" placeholder="Настав час подумати" rows="10" required></textarea>
        
        <button type="submit" class="btn btn-success" style="width: 100%; margin-top: 20px; font-size: 16px;">
            Зберегти у щоденник
        </button>
    </form>
</div>

</div> </body>
</html>