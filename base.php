<?
include "conn.php";




if (isset($_POST['add_product'])) {
  $product_name = $_POST['product_name'];
  //echo $product_name;
  $product_price = $_POST['product_price'];
  $product_image = $_FILES['product_image']['name'];
  $product_image_temp_name = $_FILES['product_image']['tmp_name'];
  $product_image_folder = 'image/' . $product_image;

  $insert_query = mysqli_query($conn, "INSERT INTO `products`( `name`, `price`, `image`) 
    VALUES ('$product_name','$product_price','$product_image')")
    or die("Insert query failed");
  //$pdo->execute([$id, $name, $price, $image]);
  if ($insert_query) {

    move_uploaded_file($product_image_temp_name, $product_image_folder);
    $display_message = "Товар успешно добавлен";
  } else {
    $display_message = "Произошла ошибка при вставке продукта";
  }
}


include "header.php";
?>
<div class="cont text-center d-grid gap-2 col-6 mx-auto">
  <?
  if (isset($display_message)) {
    echo "
    <div class='display_message bg-info p-3 '>
         <span >$display_message</span>
         
         <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
    </div> ";
  }

  ?>





  <form action="" class="bg-secondary bg-gradient p-5 add_product" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>Добавить продукты</legend>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" name="product_name" id="exampleFormControlInput1" class="form-control  input_fields" placeholder="Введите название продукта" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="number" name="product_price" min="0" placeholder="Введите цену продукта" class="form-control input_fields" required>

      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class=" form-label"></label>

        <input type="file" name="product_image" class="form-control  input_fields" required accept="image/png, image.jpg, image.jpeg">

      </div>

      <input type="submit" name="add_product" class="btn btn-primary mb-3 submit_btn" value="Добавить продукт">
    </fieldset>
  </form>


</div>

<?
include 'footer.php';
?>