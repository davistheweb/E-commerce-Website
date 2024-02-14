
<?php
function getProducts()
{
    global $conn;
    $select_query = "select * from product order by rand() limit 0,2";
    $result_query = mysqli_query($conn, $select_query);
    //$row = mysqli_fetch_assoc($result_query);
    //echo $row["product_image1"];
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row["product_id"];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
          <div class='card' style='width: 18rem;'>
            <img src='./Admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='#' class='btn btn-primary'>Add to Cart <i class='fa-solid fa-cart-shopping '></i></a>
              <a href='#' class='btn btn-secondary'>Buy Now</a>
            </div>
          </div>
        </div>";
    }
}
?>