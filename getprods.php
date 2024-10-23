<?php
function getprod($searchQuery = null){
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

    // Base SQL query
    $req = "SELECT * FROM prod1";

    // If search query is provided, add WHERE clause to filter products by name
    if ($searchQuery !== null) {
        $req .= " WHERE name LIKE :searchQuery OR sku LIKE :searchQuery OR type LIKE :searchQuery";
    }    

    try {
        $stmt = $conn->prepare($req);
        
        // Bind search query parameter if provided
        if ($searchQuery !== null) {
            $stmt->bindValue(':searchQuery', '%' . $searchQuery . '%', PDO::PARAM_STR);
        }
        
        $stmt->execute();
        $prod = $stmt->fetchAll();
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $prod;
}

// Get search query from form submission
$searchQuery = isset($_GET['search']) ? $_GET['search'] : null;

?>

<?php
function getproductwatches(){
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

    try {
        $stmt = $conn->prepare("SELECT * FROM prod1 WHERE type = 'watches'");
        $stmt->execute();
        $prod = $stmt->fetchAll();
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $prod;
}
?>

<?php
function getproductRings(){
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

    try {
        $stmt = $conn->prepare("SELECT * FROM prod1 WHERE type = 'rings'");
        $stmt->execute();
        $prod = $stmt->fetchAll();
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $prod;
}
?>

<?php
function getproductNecklaces(){
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

    try {
        $stmt = $conn->prepare("SELECT * FROM prod1 WHERE type = 'necklaces'");
        $stmt->execute();
        $prod = $stmt->fetchAll();
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $prod;
}
?>



<?php
function getproductBracelet(){
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

    try {
        $stmt = $conn->prepare("SELECT * FROM prod1 WHERE type = 'bracelets'");
        $stmt->execute();
        $prod = $stmt->fetchAll();
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $prod;
}
?>
