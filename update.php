<?
include "conn.php";
session_start();
$product_id = $_SESSION['product_id'];
?>


    <?
    include 'header.php';

    if(isset($display_message))
    {
      echo "
      <div class='display_message'>
           <span>$display_message</span>
           
           <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
      </div> ";
    }

    if(isset($_POST['update_product']))
    {
      $update_product_id = $_POST['update_product_id'];
      echo $update_product_id;
      $update_product_name = $_POST['update_product_name'];
      echo $update_product_name;
      $update_product_price = $_POST['update_product_price'];
      $update_product_image = $_FILES['update_product_image']['name'];
      $update_product_image_tmp_name= $_FILES['update_product_image']['tmp_name'];
      $update_product_image_folder = 'image/ ' .$update_product_image;

      //update query

      $update_product = mysqli_query($conn, "UPDATE `products` SET `name`='$update_product_name',`price`='$update_product_price',`image`='$update_product_image' WHERE  id = $update_product_id");
      if($update_product)
      {
        move_uploaded_file($update_product_image_tmp_name, $update_product_image_folder);
       // echo " product updated";
       header('location:view_products.php');
      }else{
       $display_message = "произошла ошибка при вставке продукта";
      
      }
    }

    

    ?>
 
 <section class="edit_container">

 <?
    if(isset($_GET['edit']))
    {
       
        $edit_id = $_GET['edit'];
        //echo $edit_id;
        $edit_query =mysqli_query($conn, "SELECT * FROM `products`  WHERE id=$edit_id");
       if(mysqli_num_rows($edit_query)>0)
       {
        $fetch_data = mysqli_fetch_assoc($edit_query);
        // $row = $fetch_data['price'];
        
      //echo $row;

      
           
 ?>




 <form action="" method="post" enctype="multipart/form-data" class="bg-secondary bg-gradient p-5  update_product product_container-box w-80">
 <img src="image/<? echo $fetch_data['image'];?>" alt="<? echo $fetch_data['name'];  ?>" > 
 <div class="mb-3">
    <label for="exampleInput1" class="form-label"></label>
    <input type="hidden" class="form-control  input_fields fields" 
    id="id" value="<? echo $fetch_data['id'];?>" name="update_product_id">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label"></label>
    <input type="text" class="form-control input_fields fields" 
         required value="<? echo $fetch_data['name'];?>"  name="update_product_name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label"></label>
    <input type="number" class="form-control input_fields fields" 
        id="price" required value="<? echo $fetch_data['price'];?>"  name="update_product_price">
  </div>
  <div class="mb-3">
    
    <label for="file " class="form-label" ></label>
    <input type="file" class="form-control input_fields fields" 
       id="file" required accept="image/png, image.jpg, image.jpeg"  name="update_product_image">
  </div>
  <div class="btns">
  <button type="submit" class="btn btn-primary edit_btn" 
     value="update product" placeholder="update product" name="update_product"></button>
  <button type="reset" placeholder="cancel"  id="close-edit" name="edit" class="btn btn-danger close-edit" 
      value="cancel"></button>

  </div>
  
</form>

<?
       }
    }
?>
 </section>

