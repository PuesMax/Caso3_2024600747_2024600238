<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("Location: login.php?logout=1");  // ← Agrega el ?logout=1
?>