<?php

 $conn = new mysqli("localhost","root","","baby_shop");
?>


<?php
    include('layouts/header.php');
?>

<select name="category" id="">
<?php

// Get selected category ID from URL
$category_id = $_GET['product_id'];

// Fetch products from the database for the selected category
$sql = "SELECT * FROM products ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row['product_id'] . "<br>";
        echo "Product Name: " . $row['product_name'] . "<br>";
        echo "Product Category" . $row['product_category'] . "<br>";
        echo "Description: " . $row['product_description'] . "<br>";
        echo "Product_image" . $row['product_image'] . "<br>";
        echo "Product_image2" . $row['product_image2'] . "<br>";
        echo "Product_image3" . $row['product_image3'] . "<br>";
        echo "Product_image4" . $row['product_image4'] . "<br>";
        echo "Price: " . $row['price'] . "<br>";
        echo "Product_special_offer" . $row['product_special_offer'] . "<br>";
        echo "Product_color" . $row['product_color'] . "<br>";
    }
} else {
    echo "No products found.";
}

$conn->close();
?>

</select>

<?php
    include('layouts/footer.php');
?>