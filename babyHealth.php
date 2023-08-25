<?php
    include('layouts/header.php');
?>



<select name="babyHealth">
    <?php
    $sql_categories = "SELECT * FROM categories";
    $result_categories = $conn->query($sql_categories);

    if ($result_categories->num_rows > 0) {
        while ($row_category = $result_categories->fetch_assoc()) {
            echo "<option value='" . $row_category['category_id'] . "'>" . $row_category['category_name'] . "</option>";
        }
    } else {
        echo "<option value=''>No categories found</option>";
    }
    ?>
</select>







<?php
    include('layouts/footer.php');
?>