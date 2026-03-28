<?php require_once __DIR__ . '/../header.php'; ?>

<div class="admin-container">
    <div class="admin-header">
        <h1>Панель адміністратора</h1>
        <p class="admin-subtitle">Управління користувачами системи</p>
    </div>

    <div class="admin-card">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Логін</th>
                    <th>Роль</th>
                    <th>Дії</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td>#<?php echo $user['id']; ?></td>
                            <td class="user-name"><?php echo htmlspecialchars($user['username']); ?></td>
                            <td>
                                <span class="role-badge <?php echo ($user['role'] === 'admin') ? 'role-admin' : 'role-user'; ?>">
                                    <?php echo htmlspecialchars($user['role']); ?>
                                </span>
                            </td>
                            <td class="admin-actions">
                                <form action="/admin/delete/<?php echo $user['id']; ?>" method="POST" onsubmit="return confirm('Видалити цього користувача?')">
                                    <button type="submit" class="btn-delete-user">Видалити</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center; padding: 20px;">Користувачів не знайдено</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</div> </body>
</html>