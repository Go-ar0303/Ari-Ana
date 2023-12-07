<?php

include 'conn.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}


include "header.php";

?>


<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploads/avatar/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">обновить профиль</a>
      <a href="index.php?logout=<?php echo $user_id; ?>" class="delete-btn">выйти</a>
      <p>new <a href="login.php">авторизоваться</a> or <a href="register.php">регистр</a></p>
   </div>

</div>

<?
include 'footer.php';
?>