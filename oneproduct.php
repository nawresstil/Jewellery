<?php
session_start();
function getProductDetails($productId) {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "prods";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = "SELECT * FROM prod1 WHERE id = :id";
    try {
        $stmt = $conn->prepare($req);
        $stmt->bindParam(':id', $productId);
        $stmt->execute();
        $prod = $stmt->fetch(PDO::FETCH_ASSOC);
        return $prod;
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SHINE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="lib/animate/animate.min.css">
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/produc.css" rel="stylesheet">
    <link href="css/shoppings.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

<!-- Navbar Start -->
<?php
@include 'home/navbar.php'
?>
    <!-- Navbar End -->

    <!-- Product section -->
    <section class="py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <?php
                    // Check if the 'id' parameter is set in the URL
                    if (isset($_GET['id'])) {
                        $productId = $_GET['id']; // Get the product ID from the URL parameter
                        $productDetails = getProductDetails($productId); // Function to fetch product details from database

                        if ($productDetails) {
                            // Display the product details
                            echo '<form method="post" action="oneproduct.php?id=' . $productDetails['id'] . '&name=' . urlencode($productDetails['name']) . '&old_price=' . urlencode($productDetails['old_price']) . '&new_price=' . urlencode($productDetails['new_price']) . '&image_url=' . urlencode($productDetails['image_url']) . '">
                            <div class="row gx-4 gx-lg-5 align-items-center">';
                            echo '<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src=" php admin crud/uploaded_img/'. $productDetails['image_url'].' " alt="' . $productDetails['name'] . '" /></div>';
                            echo '<div class="col-md-6">';
                            echo '<div class="small mb-1">SKU: ' . $productDetails['sku'] . '</div>';
                            echo '<h1 class="display-5 fw-bolder">' . $productDetails['name'] . '</h1>';
                            echo '<div class="fs-5 mb-5">';
                            if (isset($productDetails['new_price']) && $productDetails['new_price'] > 0) {
                                echo '<!-- Product price with discount -->
                                            <span class="text-muted text-decoration-line-through">$' . number_format($productDetails['old_price'], 2) . '</span>
                                            $' . number_format($productDetails['new_price'], 2) . '';
                            } else {
                                // Only display regular price if no sale price exists
                                echo '<!-- Product price without discount -->
                                            $' . number_format($productDetails['old_price'], 2) . '';
                            }
                            echo '</div>';
                            echo '<p class="lead">' . $productDetails['description'] . '</p>';
                            echo '<div class="d-flex">';
                            echo '<input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" style="max-width: 3rem" />'; // Corrected type from "num" to "number"
                            echo ' <div class="text-center">
                            <input type="submit" name="add_to_cart" class="btn btn-border add-to-cart"  value="Add To Cart">
                            </div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</form>';
                        } else {
                            // Handle case when product with given ID is not found
                            echo "<p>Product not found.</p>";
                        }
                    } else {
                        // Handle case when no 'id' parameter is provided in the URL
                        echo "<p>No product ID specified.</p>";
                    }
                    ?>
                </div>
         </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="position-relative d-block overflow-hidden" href="oneproduct.html">
                                <img class="img-fluid" src="img/brace0.jpg" alt="">
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a class="position-relative d-block overflow-hidden" href="oneproduct.html">
                                <img class="img-fluid" src="img/3.jpg" alt="">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a class="position-relative d-block overflow-hidden" href="oneproduct.html">
                                <img class="img-fluid" src="img/1.jpg" alt="">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a class="position-relative d-block overflow-hidden" href="oneproduct.html">
                                <img class="img-fluid" src="img/21.jpg" alt="">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   <!-- Footer Start -->
   <?php include_once 'home/footer.html'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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
</body>

</html>