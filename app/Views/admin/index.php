<?php require_once __DIR__ . '/../header.php'; ?>

<div class="admin-panel">
    <h1>Панель адміністратора</h1>
    <p>Керування користувачами системи</p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <thead>
            <tr style="background: #333; color: #fff; text-align: left;">
                <th style="padding: 15px;">ID</th>
                <th style="padding: 15px;">Нікнейм</th>
                <th style="padding: 15px;">Email</th>
                <th style="padding: 15px;">Роль</th>
                <th style="padding: 15px;">Дата реєстрації</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 15px;"><?php echo $user['id']; ?></td>
                    <td style="padding: 15px;"><strong><?php echo htmlspecialchars($user['username']); ?></strong></td>
                    <td style="padding: 15px;"><?php echo htmlspecialchars($user['email']); ?></td>
                    <td style="padding: 15px;">
                        <span style="padding: 5px 10px; border-radius: 4px; font-size: 12px; background: <?php echo $user['role'] === 'admin' ? '#ffeaa7' : '#dfe6e9'; ?>;">
                            <?php echo $user['role']; ?>
                        </span>
                    </td>
                    <td style="padding: 15px;"><?php echo $user['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div> </body>
</html>