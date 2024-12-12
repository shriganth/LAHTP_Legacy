<?php

include_once "./load.php";

$productName = "";
$productInfo = "";
$conn = Database::getConnection();
        
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $productName = $_POST['product_name'];

            $sql = "SELECT * FROM products WHERE name = '$productName'";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $productInfo .= "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Price: " . $row["price"] . "<br>";
                }
            } else {
                $productInfo = "No products found";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>SQL Injection</title>
</head>
<body>

    <h1>Search for a Product</h1>
    <div class="searchBar-outline">
        <div class="searchBar">
            <form action="" method="POST">
                <label for="product_name">Product name:</label>
                <input type="text" id="product_name" name="product_name">
                <input type="submit" value="Search" id="search-btn">
            </form>
        </div>
    </div>

    <h2>Product Information</h2>
    <p id="result"><?php echo $productInfo; ?></p>

</body>
</html>