<?php
        $select_brand = "Select * from brand" ;
        $result_brands= mysqli_query( $conn, $select_brand ) ;
       // $row_data=mysqli_fetch_assoc( $result_brand );
        //echo $row_data["brand_title"];

        while($row_data=mysqli_fetch_assoc($result_brands))

      {
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='nav-item'><a href='index.php?brand=$brand_id' class='nav-link text-
        light'>$brand_title</a></li>";
      }

        ?>

<?php
        $select_category = "Select * from categories" ;
        $result_category= mysqli_query( $conn, $select_category ) ;
       // $row_data=mysqli_fetch_assoc( $result_category );
        //echo $row_data["category_title"];

        while($row_data=mysqli_fetch_assoc($result_category))

      {
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];
        echo "<li class='nav-item'><a href='index.php?category=$category_id' class='nav-link text-
        light'>$category_title</a></li>";
      }

        ?>