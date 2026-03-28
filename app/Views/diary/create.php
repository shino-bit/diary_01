<?php require_once __DIR__ . '/../header.php'; ?>

<div class="diary-container">
    <div class="diary-card">
        <a href="/diary/index" class="back-link">← Назад до списку</a>
        <h2 class="diary-title">Новий запис</h2>
        
        <form action="/diary/store" method="POST" class="diary-form">
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" name="title" placeholder="Впиши заголовок" required>
            </div>
            
            <div class="form-group">
                <label>Зміст нотатки</label>
                <textarea name="content" placeholder="Настав час подумати..." rows="10" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-save">
                Зберегти у щоденник
            </button>
        </form>
    </div>
</div>

</div> 
</body>
</html>