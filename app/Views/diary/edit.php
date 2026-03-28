<?php require_once __DIR__ . '/../header.php'; ?>

<div class="diary-container">
    <div class="diary-card">
        <a href="/diary/index" class="back-link">← Скасувати та повернутися</a>
        <h2 class="diary-title"> Редагувати запис</h2>
        
        <form action="/diary/update/<?php echo $entry['id']; ?>" method="POST" class="diary-form">
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" name="title" value="<?php echo htmlspecialchars($entry['title']); ?>" required>
            </div>
            
            <div class="form-group">
                <label>Зміст нотатки</label>
                <textarea name="content" rows="10" required><?php echo htmlspecialchars($entry['content']); ?></textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-update">Зберегти зміни</button>
                <a href="/diary/index" class="btn-cancel">Назад</a>
            </div>
        </form>
    </div>
</div>

</div> </body>
</html>