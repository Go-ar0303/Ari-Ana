<?
require "conn.php";



if (isset($_GET['logout'])) {
  session_start();
  unset($user_id);
  session_destroy();
  header('location:login.php');
  $user_id = $_SESSION['user_id'];
  

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <!-- custom css file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css" integrity="sha512-ZuRTqfQ3jNAKvJskDAU/hxbX1w25g41bANOVd1Co6GahIe2XjM6uVZ9dh0Nt3KFCOA061amfF2VeL60aJXdwwQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <header>
    <div class="header_body">
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-info-subtle">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="image/logo.jpg" alt="" class="logo">
          </a>
          <a class="navbar-brand" href="home.php" class="logo_name">Ari-Ana</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


              <li class="nav-item">
                <a class="nav-link" href="register.php"><img src="image/icons8-female-user.gif" alt=""></a>

              </li>
              <li class="nav-item avatar" >
                <a class="nav-link" href="" >
                  <? 
                   session_start();
                   
                  
                  $user_id = $_SESSION['user_id'];
                  $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                  $fetch = mysqli_fetch_assoc($select);
                 // if (mysqli_num_rows($select) > 0) {
                   
                    //$fetch = mysqli_fetch_assoc($select);
                  //}
                  if ($fetch['image'] == '') {
                    //echo '<img class="avatar" src="image/default-avatar.png">';
                  
                   
                  } else {
                    echo '<img class="img" src="uploads/avatar/' . $fetch['image'] . '">';
                    ?><a href="logout.php">x</a><?
                  }
                  ?>
                    
                  <h3><?php echo $fetch['name']; ?></h3>
                
                  
                </a>

              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="base.php">ДОБАВИТЬ ПРОДУКТЫ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_products.php">ПРОСМОТРЕТЬ ПРОДУКТЫ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop_product.php">КАТАЛОГ</a>
              </li>



              <li class="nav-item">
                <?
                $select_products = mysqli_query($conn, "SELECT * FROM `cart`") or die ('query failed');
                $row_count = mysqli_num_rows($select_products);
                //echo $row_count;

                ?>


                <a href="cart.php" class="nav-link cart"><i class="bi bi-cart3"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                  </svg><span><sup><? echo $row_count?></sup></span></a>

              </li>


            </ul>

          </div>
        </div>
      </nav>



    </div>
  </header>