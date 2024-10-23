<?php
@session_start();

// Calculate the total price of all products in the cart
$totalPrice = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $totalPrice += $product['new_price'] * $product['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .checkout-table {
            flex: 1;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .checkout-table th, .checkout-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .checkout-table th {
            background-color: #f2f2f2;
        }
        .product-image {
            max-width: 80px;
            border-radius: 5px;
        }
        .total-price {
            font-size: 1.2em;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }
        .empty-cart {
            text-align: center;
            font-size: 1.2em;
            color: #888;
        }
        .customer-info {
            flex: 0 0 300px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .customer-info h2 {
            margin-top: 0;
        }
        .customer-info label {
            display: block;
            margin: 10px 0 5px;
        }
        .customer-info input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .customer-info button {
            width: 100%;
            padding: 10px;
            background-color: #E8BC0E;
            color: white;
            border: none;
            cursor: pointer;
        }
        .customer-info button:hover {
            background-color: #0056b3;
        }
        .total-price{
            text-align:center;
        }
    </style>
    <meta charset="utf-8">
    <title>SHINE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/produc.css" rel="stylesheet">
    <link href="css/shoppings.css" rel="stylesheet">
</head>
<body>
     <!-- Navbar Start -->
     <?php include_once 'home/navbar.php';?>
    <!-- Navbar End -->
<div class="container">
    
    <div>
        <h1>Checkout</h1>
    <?php
            if (!empty($_SESSION['cart'])) {
                $totalPrice = 0;
            ?>

            <table class="checkout-table">
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Old Price</th>
                        <th>New Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $product) {
                        $subtotal = $product['new_price'] * $product['quantity'];
                        $totalPrice += $subtotal;
                    ?>
                    <tr class="cart-item">
                        <td><img src="php admin crud/uploaded_img/<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>" class="product-image"></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['old_price']; ?></td>
                        <td>$<?php echo $product['new_price']; ?></td>
                        <td><?php echo $product['quantity']; ?></td>
                        <td>$<?php echo number_format($subtotal, 2); ?></td>
                    </tr>
                    <?php }?>
                    <tr>
                        <td><p class="total-price">Total Price: $<?php echo number_format($totalPrice, 2); ?></p></td>
                    </tr>
                </tbody>
            </table>
            <?php } else { ?>
                <p class="empty-cart">Your shopping cart is empty.</p>
            <?php } ?>
        </div>
        
        <div class="customer-info">
            <h2>Enter Your Information</h2>
            <form action="confirm_purchase.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
                
                <button type="submit">Confirm Purchase</button>
            </form>
        </div>
    </div>
    <!-- Footer Start -->
    <?php include_once 'home/footer.html'; ?>
    <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btns btn-lg btn-primary rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/nav.js"></script>

        <!-- Search bar start-->
    <script>
    document.getElementById("searchButton").addEventListener("click", function() {
        document.getElementById("searchBox").classList.remove("d-none");
        document.getElementById("searchButton").classList.add("d-none");
    });

    document.getElementById("closeSearchButton").addEventListener("click", function() {
        document.getElementById("searchBox").classList.add("d-none");
        document.getElementById("searchButton").classList.remove("d-none");
    });
    </script>
    <!-- Search bar end-->
    <!-- Include this script in your HTML file -->
<!-- Include this script in your HTML file -->
<script>
// Function to handle adding a product to the cart
function addToCart(productId) {
// Send an AJAX request to the server to add the product to the cart
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // If the request is successful, you can handle the response here
        console.log("Product added to cart successfully");
    }
};
// Replace 'add_to_cart.php' with the actual endpoint for adding a product to the cart
xhttp.open("GET", "add_to_cart.php?id=" + productId, true);
xhttp.send();
}

// Attach event listener to handle click on 'Add to Cart' buttons
document.addEventListener('click', function(event) {
if (event.target.classList.contains('add-to-cart')) {
    var productId = event.target.getAttribute('data-product-id');
    addToCart(productId);
}
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
const removeProductButtons = $('.remove-product-btn');

removeProductButtons.click(function() {
  const productId = $(this).data('product-id');
  $.ajax({
    url: 'prods.php',  // Replace with your server-side script URL
    type: 'POST',
    data: { productId: productId },
    success: function(response) {
      if (response === 'success') {
        // Product removed successfully
        $(`.cart-item[data-product-id="${productId}"]`).remove(); // Remove item from DOM
        // Update cart total or other elements if needed
      } else {
        alert('Error removing product. Please try again.');
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error('Error:', textStatus, errorThrown);
      alert('An error occurred. Please try again later.');
    }
  });
});
});
</script>
</body>
</html>
