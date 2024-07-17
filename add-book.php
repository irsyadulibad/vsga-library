<?php
require_once __DIR__ . '/system/app.php';

if (!user()?->is_admin) header("Location: books.php");

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/navbar.php';
?>

<?php require_once __DIR__ . '/components/footer.php' ?>
