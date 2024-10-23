<?php
include 'config.php'; // Assuming config.php contains the PDO connection code
session_start();
if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($select);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
            exit(); // Terminate script after redirect
        } elseif($row['user_type'] == 'user'){
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
            exit(); // Terminate script after redirect
        }
    } else {
        $error[] = 'Incorrect email or password!';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleLogin.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <!-- <p>don't have an account? <a href="register_form.php">register now</a></p> -->
   </form>

</div>

</body>
</html>