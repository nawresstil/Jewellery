<?php

@include 'config.php';

$id = $_GET['edit'] ?? null; // Check if edit parameter is set

if(isset($_POST['update_product'])){
   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'] ?? ''; // Provide a default value if not set
   $product_OLDprice = $_POST['product_OLDprice'];
   $product_NEWprice = $_POST['product_NEWprice'] ?? ''; // Provide a default value if not set
   $product_type = $_POST['product_type'] ?? ''; // Provide a default value if not set
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

    // Check if all fields are filled
    if(empty($product_name) || empty($product_OLDprice) || empty($product_image)){
        $message[] = 'Please fill out all fields!';
    }else{
        // Update the product
        $update_data = "UPDATE prod1 SET name=?, description=?, old_price=?, new_price=?, type=?,image_url=? WHERE id=?";
        $stmt = $conn->prepare($update_data);
        $stmt->execute([$product_name,$product_description,$product_OLDprice,$product_NEWprice,$product_type,$product_image, $id]);

        if($stmt->rowCount() > 0){
            // If update successful, move uploaded image to folder
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            header('location:admin_page.php');
            exit();
        }else{
            $message[] = 'Failed to update product!';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div class="container">

<div class="admin-product-form-container centered">

   <?php
      if($id !== null) {
         $select = "SELECT * FROM prod1 WHERE id = ?";
         $stmt = $conn->prepare($select);
         $stmt->execute([$id]);

         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Enter the product name">
      <input type="text" class="box" name="product_description" value="<?php echo htmlspecialchars($row['description']); ?>" placeholder="enter product description"  >
      <input type="number" min="0" class="box" name="product_OLDprice" value="<?php echo htmlspecialchars($row['old_price']); ?>" placeholder="Enter the product old price">
      <input type="number" min="0" class="box" name="product_NEWprice" value="<?php echo htmlspecialchars($row['new_price']); ?>" placeholder="Enter the product new price">
      <input type="text" placeholder="enter product type" value="<?php echo htmlspecialchars($row['type']); ?>" name="product_type" class="box">
      <input type="file" class="box" name="product_image" accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="Update product" name="update_product" class="btn">
      <a href="admin_page.php" class="btn">Go back!</a>

      
      </form>

   </form>

   <?php }; 
      } else {
         echo "No product ID provided for editing.";
      }
   ?>

</div>

</div>

</body>
</html>
