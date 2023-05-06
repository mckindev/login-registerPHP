<?php include 'header.php';?>
<?php 
              session_start();
              if (!isset($_SESSION['username'])) {
                header('Location: ../temple/index.php');
                exit();
              }
?>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<?php { ?>
      <?php             
            include '../config/config.php';
            $sql = "SELECT * FROM content";
			      $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                ?>
       <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title'];?></h5>
                        <p class="card-text"><?php echo $row['description'];?></p>
                        <a href="#" class="btn btn-primary">Xem bài viết</a>
                    </div>
        </div>
              <?php 
            }
          } else {
            echo "không có event";
          }
      ?> 
<?php } ?>
<?php include 'footer.php';?>
