<?php
include_once 'getprods.php';
session_start();
// Check if the type parameter is set in the URL
if (isset($_GET['type']) && $_GET['type'] === 'watches') {
    // Fetch only watch products
    $prod = getproductwatches();
} elseif (isset($_GET['type']) && $_GET['type'] === 'rings') {
    // Fetch only watch products
    $prod = getproductRings();
}elseif (isset($_GET['type']) && $_GET['type'] === 'necklaces') {
    // Fetch only watch products
    $prod = getproductNecklaces();
}elseif (isset($_GET['type']) && $_GET['type'] === 'bracelets') {
    // Fetch only watch products
    $prod = getproductBracelet();
}else{
    $prod = getprod();
}

?>
<!DOCTYPE html>
<html lang="en" style="padding-bottom: 0px; height: auto; min-height: auto;">

<head>
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

<body >

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
       <?php include_once 'home/navbar.php';?>
    <!-- Navbar End -->

 <!-- Header-->
 <div class="owl-carousel header-carousel position-relative">
            
            <div class="owl-carousel-item position-relative w-100 h-100 ">
                <img src="img/home1.jpg" class="imageback" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="">Unlock the Elegance Within</h1>
                                <h3 class="swa-teaser-carousel__content__description swa-subheadline-sans">Discover the Beauty of ShineInHere</h3>
                                <a href="prods.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- bella -->

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                 <?php
                   include_once 'search-prods.php';
                 ?>
                </div>
            </div>
            <span class="arrow left"></span>
        <span class="arrow right"></span>
    </section>
  
        <!-- Section end-->


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
            alert('Product removed successfully');
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