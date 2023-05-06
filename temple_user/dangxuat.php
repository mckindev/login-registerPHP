<?php
session_start();
session_destroy();
header('Location: ../temple/index.php');
exit();
?>
