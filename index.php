<?php
require_once __DIR__ . '/app/models/UserModel.php';
require_once __DIR__ . '/app/controllers/UserController.php';

// koneksi database
$conn = new PDO("mysql:host=localhost;dbname=mvc", "root", "");

// inisialisasi model & controller
$userModel = new UserModel($conn);
$controller = new UserController($userModel);

// tentukan aksi dari URL (?action=...)
$action = $_GET['action'] ?? 'index';

if ($action === 'index') {
    $controller->index();
} elseif ($action === 'show' && isset($_GET['id'])) {
    $controller->show($_GET['id']);
} else {
    http_response_code(404);
    echo "Halaman tidak ditemukan";
}
