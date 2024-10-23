<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

if(isset($_POST['add_product'])){
   // Check if the required fields are present in $_POST
   if(isset($_POST['product_name'], $_POST['product_OLDprice'], $_FILES['product_image'])){
      $product_name = $_POST['product_name'];
      $product_description = $_POST['product_description'] ?? ''; // Provide a default value if not set
      $product_OLDprice = $_POST['product_OLDprice'];
      $product_NEWprice = $_POST['product_NEWprice'] ?? ''; // Provide a default value if not set
      $product_type = $_POST['product_type'] ?? ''; // Provide a default value if not set
      $product_image = $_FILES['product_image']['name'];
      $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
      $product_image_folder = 'uploaded_img/'.$product_image;

      // Check if required fields are not empty
      if(empty($product_name) || empty($product_OLDprice) || empty($product_image)){
         $message[] = 'Please fill out all fields';
      }else{
         // Using prepared statements to prevent SQL injection
         $insert = "INSERT INTO prod1(name, description, old_price, new_price, type, image_url) VALUES(:product_name, :product_description, :product_OLDprice, :product_NEWprice,:product_type, :product_image)";
         $stmt = $conn->prepare($insert);
         $stmt->bindParam(':product_name', $product_name);
         $stmt->bindParam(':product_description', $product_description);
         $stmt->bindParam(':product_OLDprice', $product_OLDprice);
         $stmt->bindParam(':product_NEWprice', $product_NEWprice);
         $stmt->bindParam(':product_image', $product_image);
         $stmt->bindParam(':product_type', $product_type);

         if($stmt->execute()){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'New product added successfully';
         }else{
            $message[] = 'Could not add the product';
         }
      }
   }else{
      $message[] = 'Required fields are missing';
   }
}

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   // Using prepared statements to prevent SQL injection
   $stmt = $conn->prepare("DELETE FROM prod1 WHERE id = :id");
   $stmt->bindParam(':id', $id);
   $stmt->execute();
   header('location:admin_page.php');
   exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $msg){
      echo '<span class="message">'.$msg.'</span>';
   }
}

?>
   

   
<div class="navbar">
   <h1>SHINEINHERE</h1>
   <div>
      <a href="register_form.php" class=" nav-item nav-link">Register</a>
      <a href="logout.php" class=" nav-item nav-link active">Logout</a>
   </div>
</div>

<div class="container">
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <!-- <a href="login_form.php" class="btn">login</a> -->
   </div>
   <div class="admin-product-form-container">

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box">
         <input type="text" placeholder="enter product description" name="product_description" class="box">
         <input type="number" placeholder="enter product old price" name="product_OLDprice" class="box">
         <input type="number" placeholder="enter product new price" name="product_NEWprice" class="box">
         <input type="text" placeholder="enter product type" name="product_type" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <div class="product-display">
      <table class="product-display-table">
         <thead>
            <tr>
               <th>product image</th>
               <th>product name</th>
               <th>product price</th>
               <th>action</th>
            </tr>
         </thead>
         <?php
            $stmt = $conn->query("SELECT * FROM prod1");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
         ?>
         <?php foreach($rows as $row){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image_url']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['old_price']; ?>/-$<?php echo $row['new_price']; ?></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
         <?php } ?>
      </table>
   </div>

</div>


</body>
</html>
