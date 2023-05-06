<?php include 'header.php';?>

<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: ../temple/index.php');
  exit();
}
?>


<?php include 'footer.php';?>