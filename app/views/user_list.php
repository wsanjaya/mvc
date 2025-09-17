<!DOCTYPE html>
<html>

<head>
    <title>Daftar User</title>
</head>

<body>
    <h1>Daftar User</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <a href="?action=show&id=<?= $user['id'] ?>">
                    <?= htmlspecialchars($user['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>