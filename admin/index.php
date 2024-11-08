<?php

// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/AdminDanhMucController.php';

// Require toàn bộ file Models
require_once './models/AdminDanhMuc.php';

// Route
$act = $_GET['act'] ?? '/';

match ($act) {
    'danh-muc' => (new AdminDanhMucController())->danhSachDanhMuc(),
};