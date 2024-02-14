<?php
    include('../includes/connect.php');

    if ( isset ($_POST['insert_cat']))
    {
        $category_title = $_POST['cat_titles'];
        $Select_query = "SELECT * FROM categories WHERE category_title ='$category_title'";

        $result_select = mysqli_query($conn, $Select_query);
        $number=mysqli_num_rows($result_select);

        if ($number> 0) {
            echo"<script>alert('This Category is present in database');</script>";
        }
        else {
            

        $insert_query ="INSERT INTO categories (category_title)
        values('$category_title')";
        $result = mysqli_query($conn, $insert_query);
        if($result){
            echo"<script>alert('category added successfully');</script>";
        }
        else{
            
            echo "<script>alert('category not added');</script>";
        }
    }
    }


?>
<body class="bg-secondary">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<h2 class="text-center text-warning">Insert Categories</h2>
<form action="" method="POST" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_titles" placeholder="Insert Categories" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="insert categories" aria-describedby="basic-addon1" >
        
    </div>
</form>
</body>