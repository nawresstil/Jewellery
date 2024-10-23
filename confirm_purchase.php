<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Validate the form data
    if (!empty($name) && !empty($phone) && !empty($address)) {
        // Create email content
        $to = "nawresstilouch1@gmail.com"; // Replace with your email address
        $subject = "New Purchase Confirmation";
        $message = "Name: $name\nPhone: $phone\nAddress: $address\n\n";

        if (!empty($_SESSION['cart'])) {
            $message .= "Order Details:\n";
            foreach ($_SESSION['cart'] as $product) {
                $message .= "Product: " . $product['name'] . "\n";
                $message .= "Old Price: $" . $product['old_price'] . "\n";
                $message .= "New Price: $" . $product['new_price'] . "\n";
                $message .= "Quantity: " . $product['quantity'] . "\n";
                $message .= "Subtotal: $" . ($product['new_price'] * $product['quantity']) . "\n\n";
            }
            $totalPrice = array_reduce($_SESSION['cart'], function($carry, $item) {
                return $carry + ($item['new_price'] * $item['quantity']);
            }, 0);
            $message .= "Total Price: $" . number_format($totalPrice, 2) . "\n";
        } else {
            $message .= "Your cart is empty.\n";
        }

        // Email headers
        $headers = "From: nawresstilouch1@gmail.com"; // Replace with your email address

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
<?php
if (mail("nawresstilouch1@gmail.com", "Test Email", "This is a test email.", "From: nawresstilouch1@gmail.com")) {
    echo "Test email sent successfully.";
} else {
    echo "Failed to send test email.";
}
?>

