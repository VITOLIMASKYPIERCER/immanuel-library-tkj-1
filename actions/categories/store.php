<?php
  $name = $_POST['name'] ?? null;
  header('Location: ../../pages/categories/index.php');
  exit;