<?php
$name = $_POST['name'] ?? null;
header('Location: ../../pages/authors/index.php');
exit;