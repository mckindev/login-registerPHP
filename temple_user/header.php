<!DOCTYPE html>
<html lang="en">
<head>
<title>temple</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>
<?php 
if (!isset($_SESSION['username'])) {
  header('Location: ../temple/index.php');
  exit();
}
?>



<?php if (isset($_SESSION['username']) && $_SESSION['role'] == 1 && $_SESSION['cash']) { ?>
        <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Trang chủ</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Diễn đàn</a>
    <a href="sukien.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sự kiện</a>
    <a href="cpanel.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Quản lý bài viết</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Thông tin tài khoản<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <!-- <a href="thongtin.php" class="w3-bar-item w3-button">Thông tin</a> -->
        <span><p>Tài khoản: <?php echo $_SESSION['username'];?></p></span>
        <span>Số dư khả dụng: <?php echo $_SESSION['cash'];?> VNĐ</span><br>
        <label for="quyen0">Bạn đang đăng nhập với tư cách</label><br>
        <span style="color:<?php echo ($_SESSION['role'] == 1) ? 'red' : 'blue'; ?>"><?php echo ($_SESSION['role'] == 1) ? 'Quản trị viên' : 'Thành viên'; ?></span>
       <a href="dangxuat.php" class="w3-bar-item w3-button">Đăng xuất</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
    <?php } else { ?>
        <!-- Navbar -->
        <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Trang chủ</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Diễn đàn</a>
    <a href="sukien.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sự kiện</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Thông tin tài khoản<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <span><p>Tài khoản: <?php echo $_SESSION['username'];?></p></span>
        <span>Số dư khả dụng: <?php echo $_SESSION['cash'];?> VNĐ</span><br>
        <label for="quyen0">Bạn đang đăng nhập với tư cách</label><br>
        <span style="color:<?php echo ($_SESSION['role'] == 1) ? 'red' : 'blue'; ?>"><?php echo ($_SESSION['role'] == 1) ? 'Quản trị viên' : 'Thành viên'; ?></span>
        <a href="dangxuat.php" class="w3-bar-item w3-button">Đăng xuất</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
    <?php } ?>
