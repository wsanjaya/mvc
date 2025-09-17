<!DOCTYPE html>
<html>

<head>
    <title>Detail User</title>
</head>

<body>
    <h1>Detail User</h1>
    <?php if ($user): ?>
        <p>Nama: <?= htmlspecialchars($user['name']) ?></p>
        <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <?php else: ?>
        <p>User tidak ditemukan.</p>
    <?php endif; ?>
    <p><a href="?action=index">Kembali ke daftar</a></p>
</body>

</html>