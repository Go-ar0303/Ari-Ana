<?
include "conn.php";
?>


<?
include 'header.php';
?>
<!--container-->
<div class="container">
    <section class="display_product">
 
    <?
    
    
     $display_product = mysqli_query($conn,  "SELECT * FROM `products`" );
     $num = 1;
     
     if(mysqli_num_rows($display_product)>0){
      //echo "yess";
      //$row = mysql_fetch_assoc($display_product);
      
     


    echo '
    <table class="table table-success table-bordered border-light table-sm table-hover">
  <thead>
    <tr>
      <th scope="col ">#</th>
      <th scope="col">	Изображение продукта</th>
      <th scope="col">наименование товара</th>
      <th scope="col">Цена продукта</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>';
    
   while($row=mysqli_fetch_assoc($display_product)){
    //echo $row['name'];
    ?>

   <tr>
      <th scope="row"><? echo $num; ?></th>
      <td><img class="img-thumbnail" class="img" src="image/<? echo $row['image'];?>" alt="<? echo $row['name']; ?>"></td>
      <td><? echo $row['name']; ?></td>
      <td>цена  <? echo $row['price']; ?></td>
      <td>
        <a href="delete.php?delete=<? echo $row ['id'];?>" 
        class="delete_product_btn" 
        onclick="return confirm('Вы уверены, что хотите удалить этот товар?');">
        <i class="fas fa-trash"></i></a>

        <a href="update.php?edit=<? echo $row['id']; ?>" class="update_product_btn">
            <i class="fas fa-edit"></i></a>
      </td>
      
    </tr>

    <?
    $num++;
    //echo $row['name'];
    $message = array('status' => 'ok');
   }
   

   } else {
    $message = array('status' => 'error');
    echo "div class='empty_text'>Нет доступных продуктов</div>";
   }
  
       
    
           ?>
    
    
   
    
         </tbody>
     </table>
  </section>
</div>
  
<?
include 'footer.php';
?>