<?php
@session_start();

// Function to calculate the total price of the cart
function calculateTotalPrice() {
    $totalPrice = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $totalPrice += $product['new_price'] * $product['quantity'];
        }
    }
    return $totalPrice;
}

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['productId'])) {
        $productId = $_POST['productId'];

        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $index => $product) {
                if ($product['id'] == $productId) {
                    if (isset($_POST['action']) && $_POST['action'] === 'remove') {
                        // Remove product from cart
                        unset($_SESSION['cart'][$index]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                    } elseif (isset($_POST['quantity'])) {
                        // Update product quantity
                        $quantity = intval($_POST['quantity']);
                        if ($quantity > 0) {
                            $_SESSION['cart'][$index]['quantity'] = $quantity;
                        } else {
                            // If quantity is zero or less, remove the product
                            unset($_SESSION['cart'][$index]);
                            $_SESSION['cart'] = array_values($_SESSION['cart']);
                        }
                    }
                    // Calculate new total price
                    $totalPrice = calculateTotalPrice();
                    echo json_encode(['status' => 'success', 'totalPrice' => $totalPrice]);
                    exit();
                }
            }
        }
        echo json_encode(['status' => 'product_not_found']);
        exit();
    }
}

// Function to check if a product already exists in the cart
function productExistsInCart($productId) {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            if ($product['id'] == $productId) {
                return true;
            }
        }
    }
    return false;
}

// Check if the product ID is provided in the request
if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['old_price']) && isset($_GET['new_price']) && isset($_GET['image_url'])) {
    // Get the product information from the request
    $productId = $_GET['id'];
    $productName = $_GET['name'];
    $productOldPrice = $_GET['old_price'];
    $productNewPrice = $_GET['new_price'];
    $productImage = $_GET['image_url'];

    // Check if the product already exists in the cart
    if (productExistsInCart($productId)) {
        // Product already exists, display an alert to the user
        echo "<script> alert('This product is already in your cart.');
        window.location.href='prods.php';
        </script>";
    } else {
        // Add the product to the cart array
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        $product = array(
            'id' => $productId,
            'name' => $productName,
            'old_price' => $productOldPrice,
            'new_price' => $productNewPrice,
            'image_url' => $productImage,
            'quantity' => 1 // Initialize quantity to 1
        );
        $_SESSION['cart'][] = $product;
    }
}


$totalPrice = calculateTotalPrice();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <style>
        .cart-item { margin-bottom: 10px; }
        .product-image { width: 100px; height: 100px; }
        .product-details { display: inline-block; vertical-align: top; margin-left: 10px; }
        .remove-product-btn { background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer; }
        .quantity-input { width: 50px; text-align: center; }
        .empty-cart { font-style: italic; }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.remove-product-btn').click(function() {
                var productId = $(this).data('product-id');
                $.post('shopping_cart.php', { productId: productId, action: 'remove' }, function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        location.reload();
                    } else {
                        alert('Product not found in cart.');
                    }
                });
            });

            $('.quantity-input').change(function() {
                var productId = $(this).data('product-id');
                var quantity = $(this).val();
                $.post('shopping_cart.php', { productId: productId, quantity: quantity }, function(response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        location.reload();
                    } else {
                        alert('Product not found in cart.');
                    }
                });
            });
        });
    </script>
</head>
<body>
    <?php
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) { ?>
            <div class="cart-item">
                <img src="php admin crud/uploaded_img/<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                <div class="product-details">
                    <p class="product-name">Name: <?php echo $product['name']; ?></p>
                    <p class="old-price">Old Price: $<?php echo $product['old_price']; ?></p>
                    <p class="new-price">New Price: $<?php echo $product['new_price']; ?></p>
                    <p class="quantity">Quantity: <input type="number" class="quantity-input" data-product-id="<?php echo $product['id']; ?>" value="<?php echo $product['quantity']; ?>" min="1"></p>
                    <button data-product-id="<?php echo $product['id']; ?>" class="remove-product-btn">Remove</button>
                </div>
            </div>
        <?php }
        echo '<p class="total-price">Total Price: $' . number_format($totalPrice, 2) . '</p>';
    } else {
        echo '<p class="empty-cart">Your shopping cart is empty.</p>';
    }
    ?>
</body>
</html>
