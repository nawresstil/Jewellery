<?php
// Include necessary files
include_once 'getprods.php';
// @session_start();
// if(isset($_POST['add_to_cart'])) {
    
//     if(isset($_SESSION['cart'])){
//         $sessioo_array_id = array_column($_SESSION['cart'],"id");
//         $session_array= array(
//             'id' => $_GET['id'],
//             "name" => $_POST['name'],
//             "old_price" => $_POST['old_price']
//         );
//         $_SESSION['cart'][]=$session_array;
//     }else{
//     $session_array= array(
//         'id' => $_GET['id'],
//         "name" => $_POST['name'],
//         "old_price" => $_POST['old_price']
//     );
//     $_SESSION['cart'][]=$session_array;
//   }
//  }
// Get search query from the form submission
$searchQuery = isset($_GET['search']) ? $_GET['search'] : null;

// Get the product type from the URL if available
$type = isset($_GET['type']) ? $_GET['type'] : null;

// Fetch products based on search query and type
if ($type === 'watches') {
    // If the type is 'watches', fetch only products of type 'watches'
    $prod = getproductwatches();
} elseif ($type === 'rings') {
    // If the type is 'watches', fetch only products of type 'watches'
    $prod = getproductRings();
} elseif ($type === 'necklaces') {
    // If the type is 'watches', fetch only products of type 'watches'
    $prod = getproductNecklaces();
} elseif ($type === 'bracelets') {
    // If the type is 'watches', fetch only products of type 'watches'
    $prod = getproductBracelet();
} else {
    // Otherwise, fetch products based on the search query and type
    $prod = getprod($searchQuery, $type);
}
// Display products
if (isset($prod) && !empty($prod)) {
    foreach ($prod as $p) {
        // var_dump($_SESSION['cart']);
        // Display each product with the same style as regular products
        echo '<form method="post" action="prods.php?id=' . $p['id'] . '&name=' . urlencode($p['name']) . '&old_price=' . urlencode($p['old_price']) . '&new_price=' . urlencode($p['new_price']) . '&image_url=' . urlencode($p['image_url']) . '">
        <div class="col mb-5 wow zoomIn" data-wow-delay="0.1s">
            <div class="card-container">   
                <div class="card h-100">
                    <div class="px-4 px-lg-5 mt-5 category">';
        if (isset($p['new_price']) && $p['new_price'] > 0) {
            echo '<div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promo</div>';
        }
        echo '<a class="position-relative d-block overflow-hidden" href="oneproduct.php?id=' . $p['id'] . '">
                        <img class="img-fluid" src="php admin crud/uploaded_img/' . $p['image_url'] . '" alt="' . $p['name'] . '">
                    </a>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">' . $p['name'] . '</h5>';
        if (isset($p['new_price']) && $p['new_price'] > 0) {
            echo '<span class="text-muted text-decoration-line-through">$' . number_format($p['old_price'], 2) . '</span>
                                    $' . number_format($p['new_price'], 2) . '';
        } else {
            echo '$' . number_format($p['old_price'], 2) . '';
        }
        echo '</div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                        <input type="submit" name="add_to_cart" class="btn btn-border add-to-cart"  value="Add To Cart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>';
    }
} else {
    echo "No products found.";
}
?>
<!--  
Fly To 🛒 Shopping Cart Animation With Vanilla JavaScript
👨🏻‍⚕️ By: Coding Design

You can do whatever you want with the code. However if you love my content, you can subscribed my YouTube Channel
🌎link: www.youtube.com/codingdesign
 -->
<!-- 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add To Cart Animation | Fly To Shopping Cart Effect | Vanilla JavaScript</title>
    <link rel="stylesheet" href="css/styleee.css">
</head>

<body>
    <section class="slider">
        <div class="card">
            <div class="card-content">
                <img src="img/background.avif" alt="" class="card-img">
                <h1 class="card-title">HP Spectre x360 15</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.5</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$650.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/laptop 3.png" alt="" class="card-img">
                <h1 class="card-title">HP Spectre x360 15</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$550.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/ipad.png" alt="" class="card-img">
                <h1 class="card-title">Apple Ipad 15</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.6</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$750.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/Apple-iPhone-12-Pro.png" alt="" class="card-img">
                <h1 class="card-title">Apple iPhone 12 Pro</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.7</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$1000.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/g233 prodigy gaming headset.png" alt="" class="card-img">
                <h1 class="card-title">g233 prodigy gaming headset</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.5</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$450.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/ROG StrixmWireless gaming headset.png" alt="" class="card-img">
                <h1 class="card-title">ROG Strixm Wireless gaming</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.4</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$350.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/Nike Running Shoese.png" alt="" class="card-img">
                <h1 class="card-title">Nike Running Shoese</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.5</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$250.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="images/Running Shoes.png" alt="" class="card-img">
                <h1 class="card-title">Running Shoes</h1>
                <div class="card-body">
                    <div class="card-star">
                        <span class="rating-value">4.4</span>
                        <span class="star">&#9733;</span>
                    </div>
                    <p class="card-price">$150.99</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Buy Now</button>
                    <button class="btn btn-border add-to-cart">Add To Cart</button>
                </div>
            </div>
        </div>
        <span class="arrow left">&#129120;</span>
        <span class="arrow right">&#129122;</span>
    </section>
    <div class="shopping-cart" data-product-count="0">
        <span class="cart-icon">&#128722;</span>
    </div>
    <script src="js/script.js"></script>
</body>
</html> -->

