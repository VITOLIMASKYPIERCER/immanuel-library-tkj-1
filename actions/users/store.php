<?php
$name = $_POST['name'] ?? null;
header('Location: ../../pages/users/index.php');
exit;