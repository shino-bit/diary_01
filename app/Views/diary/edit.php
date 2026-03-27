<?php require_once __DIR__ . '/../header.php'; ?>

<div class="auth-card" style="max-width: 700px;">
    <h2>Редагувати запис</h2>
    
    <form action="/diary/update/<?php echo $entry['id']; ?>" method="POST">
        <label style="display: block; margin-bottom: 5px; font-weight: bold;">Заголовок</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($entry['title']); ?>" required>
        
        <label style="display: block; margin-top: 15px; margin-bottom: 5px; font-weight: bold;">Зміст</label>
        <textarea name="content" rows="10" required><?php echo htmlspecialchars($entry['content']); ?></textarea>
        
        <div style="display: flex; gap: 10px; margin-top: 20px;">
            <button type="submit" class="btn btn-primary" style="flex: 2; font-size: 16px;">
                Оновити запис
            </button>
            <a href="/diary/index" class="btn" style="flex: 1; text-align: center; background: #eee; color: #333; text-decoration: none; padding-top: 12px;">
                Скасувати
            </a>
        </div>
    </form>
</div>

</div> </body>
</html>