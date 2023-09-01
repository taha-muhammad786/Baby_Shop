<?php

 $conn = new mysqli("localhost","root","","baby_shop");
?>


<?php
    include('layouts/header.php');
?>

<!-- <select name="category" id=""> -->
<?php

// Get selected category ID from URL


// Fetch products from the database for the selected category
// $sql = "SELECT * FROM products";

$stmt = $conn->prepare("SELECT * FROM products  where product_category = 'babyClothing'");

$stmt->execute();

$featured_products = $stmt->get_result(); 
// var_dump($featured_products);



?>
    <div class="row mx-auto container">
<?php while($row= $featured_products->fetch_assoc()){  ?>

<div class="product text-center col-lg-3 col-md-4 col-sm-12" style="margin-top: 10%;">
    <img style="height: 50vh;" class="img-fluid mb-3" src="assets/images/<?php echo $row['product_image']; ?> " alt="">
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
    <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
    <a href="<?php echo"single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a> 
</div>

<?php } 
$conn->close();
?>
</div>


</select>

<?php
    include('layouts/footer.php');
?>