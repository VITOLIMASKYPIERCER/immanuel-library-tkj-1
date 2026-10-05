<?php
$name = $_POST['name'] ?? null;
header('Location: ../../pages/profile/edit.php');
exit;