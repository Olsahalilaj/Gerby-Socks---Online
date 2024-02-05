
<?php
@include 'config.php';

if(isset($_POST['add_product'])){
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
  $product_image_folder = 'uploaded_img/'.$product_image;

  if(empty($product_name) || empty($product_price) || empty($product_image)){
    $message[] = 'Ju lutem shkruani!';
  } else {
    $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
    $upload = mysqli_query($conn,$insert);

    if($upload){
      $message[] = 'Produkti i ri u shtua me sukses'; 
    } else {
      $message[] = 'Produkti i ri nuk u shtua!';
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
if(isset($message)){
  foreach($message as $message){
     echo '<span class="message">'.$message.'</span>';
  }
}


?>
<div class="container">

<div class="admin-product-form-container">

   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
      <h3>Shto nje produkt te ri</h3>
      <input type="text" placeholder="enter product name" name="product_name" class="box">
      <input type="number" placeholder="enter product price" name="product_price" class="box">
      <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
      <input type="submit" class="btn" name="add_product" value="add product">
   </form>

</div>
</body>
<style>
  *{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.btn{
   display: block;
   width: 100%;
   cursor: pointer;
   border-radius: .5rem;
   margin-top: 1rem;
   font-size: 1.7rem;
   padding:1rem 3rem;
   background: var(--green);
   color:var(--white);
   text-align: center;
}

.btn:hover{
   background: var(--black);
}

.message{
   display: block;
   background: var(--bg-color);
   padding:1.5rem 1rem;
   font-size: 2rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-align: center;
}

.container{
   max-width: 1200px;
   padding:2rem;
   margin:0 auto;
}


.admin-product-form-container form{
   max-width: 50rem;
   margin:0 auto;
   padding:2rem;
   border-radius: .5rem;
   background: var(--bg-color);
}

.admin-product-form-container form h3{
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 1rem;
   text-align: center;
   font-size: 2.5rem;
}

.admin-product-form-container form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.2rem 1.5rem;
   font-size: 1.7rem;
   margin:1rem 0;
   background: var(--white);
   text-transform: none;
}
@media (max-width:991px){

html{
   font-size: 55%;
}

}
@media (max-width:450px){

html{
   font-size: 50%;
}

}

</style>
</html>