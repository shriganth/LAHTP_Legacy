<?php

include_once "./load.php";

class Product {

    public $conn;
    public $sql;
    public $productName = "";
    private static $productInfo = "";

    public static function getProducts() {

        $conn = Database::getConnection();
        
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $productName = $_POST['product_name'];

            $sql = "SELECT * FROM `products` WHERE name = '$productName'";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    return self::$productInfo .= "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Price: " . $row["price"] . "<br>";
                }
            } else {
                return 
                self::$productInfo = "No products found";
            }
        }

    }
    
}

?>