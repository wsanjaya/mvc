<?php
// koneksi database
$conn = new PDO("mysql:host=localhost;dbname=mvc", "root", "");

// ambil data user dari database
$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// tampilkan HTML + data
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar User</title>
</head>

<body>
    <h1>Daftar User</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?> - <?= htmlspecialchars($user['email']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>