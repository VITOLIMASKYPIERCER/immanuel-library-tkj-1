<?php
$id = $_POST['id'] ?? null;
$title = $_POST['title'] ?? null;

header('Location: ../../pages/books/index.php');
exit;