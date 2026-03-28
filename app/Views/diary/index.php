<?php require_once __DIR__ . '/../header.php'; ?>

<div class="diary-header">
    <h1>Мої записи</h1>
    <a href="/diary/create" class="btn btn-create">+ Новий запис</a>
</div>

<?php if (empty($entries)): ?>
    <div class="empty-state">
        <p>У вас ще немає жодного запису. Настав час щось написати!</p>
    </div>
<?php else: ?>
    <div class="diary-grid">
        <?php foreach ($entries as $entry): ?>
            <div class="diary-card">
                <div class="card-content">
                    <h3><?php echo htmlspecialchars($entry['title']); ?></h3>
                    <p><?php echo mb_strimwidth(htmlspecialchars($entry['content']), 0, 150, "..."); ?></p>
                    <small>Створено: <?php echo $entry['created_at']; ?></small>
                </div>
                
                <div class="card-actions">
                    <a href="/diary/edit/<?php echo $entry['id']; ?>" class="btn-edit">Редагувати</a>
                    <form action="/diary/delete/<?php echo $entry['id']; ?>" method="POST" onsubmit="return confirm('Видалити цей запис?')">
                        <button type="submit" class="btn-delete">Видалити</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</div> </body>
</html>