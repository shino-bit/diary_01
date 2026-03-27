<?php require_once __DIR__ . '/../header.php'; ?>

<div class="diary-container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1 style="margin: 0;">Мої записи</h1>
        <a href="/diary/create" class="btn btn-success" style="text-decoration: none;">+ Новий запис</a>
    </div>

    <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 30px;">

    <?php if (empty($entries)): ?>
        <div style="text-align: center; padding: 40px; color: #888;">
            <p style="font-size: 18px;">У вас ще немає жодного запису.</p>
            <a href="/diary/create" style="color: var(--primary);">Напишіть свою першу думку прямо зараз!</a>
        </div>
    <?php else: ?>
        <div class="entries-list">
            <?php foreach ($entries as $entry): ?>
                <div class="entry-card" style="border: 1px solid #eee; border-radius: 12px; padding: 20px; margin-bottom: 20px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <h3 style="margin-top: 0; color: #333;"><?php echo htmlspecialchars($entry['title']); ?></h3>
                        <small style="color: #999;"><?php echo date('d.m.Y H:i', strtotime($entry['created_at'])); ?></small>
                    </div>
                    
                    <div style="margin: 15px 0; line-height: 1.7; color: #555;">
                        <?php echo nl2br(htmlspecialchars($entry['content'])); ?>
                    </div>
                    
                    <div style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #f9f9f9; display: flex; gap: 15px;">
                        <a href="/diary/edit/<?php echo $entry['id']; ?>" style="color: var(--primary); text-decoration: none; font-weight: 500; font-size: 14px;">Редагувати</a>
                        <a href="/diary/destroy/<?php echo $entry['id']; ?>" 
                           style="color: var(--danger); text-decoration: none; font-weight: 500; font-size: 14px;" 
                           onclick="return confirm('Видалити цей запис назавжди?')">Видалити</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</div> </body>
</html>