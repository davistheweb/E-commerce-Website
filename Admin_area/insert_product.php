 <?php
   include("../includes/connect.php");
if(isset($_POST['insert_product']))
{ $product_title=$_POST['product_title'];
   $product_descriptions=$_POST['product_description'];
   $product_keywords=$_POST['product_keyword'];
   $product_category=$_POST['product_category'];
   $product_brand=$_POST['product_brand'];
   $product_price=$_POST['product_price'];
   $product_status=true;
   //ACCESSING IMAGE
   $product_image1=$_FILES['product_image1']['name'];
   $product_image2=$_FILES['product_image2']['name'];
   $product_image3=$_FILES['product_image3']['name'];
  //accessing image temporary files
    $tmp_images1=$_FILES['product_image1']['tmp_name'];
    $tmp_images2=$_FILES['product_image2']['tmp_name'];
    $tmp_images3=$_FILES['product_image3']['tmp_name'];
  //checking for empty fields
    if($product_title =='' or $product_descriptions ==''or $product_keywords =='' or $product_category=='' or $product_brand =='' or $product_price =='' or $product_image1 =='' or $product_image2 =='' or $product_image3 =='')
        
  {   
    echo "<script>alert('please all the available field)</script>";
    exit();
  }
else {
    move_uploaded_file($tmp_images1, "./product_images/$product_image1");
    move_uploaded_file($tmp_images2, "./product_images/$product_image2");
    move_uploaded_file($tmp_images3, "./product_images/$product_image3");
    
    //insert query
    $insert_product="INSERT INTO product(product_title, product_description, product_keyword, category_id, brand_id, product_image1, product_image2, product_image3, product_price, date, status) values('$product_title', '$product_descriptions', '$product_keywords', '$product_category', '$product_brand', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
    
    $result_query=mysqli_query($conn, $insert_product);
    if($result_query)
    {
      echo"<script>alert('product inserted successfully')</script>";
    }
    
}
    
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body class="bg-light mt-3">
<div class="container-fluid">
    <h1 class="text-center">INSERT PRODUCT</h1>
</div>
<form action=""method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form_label">product Title</label>
        <input type="text" name="product_title" class="form-control" placeholder="Enter a product title" autocomplete="off" required="required">
    </div>
    
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form_label">product Description</label>
        <input type="text" name="product_description" class="form-control" id="description" placeholder="Enter a product description" autocomplete="off" required="required">
    </div>
    
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product keyword" class="form_label">Product Keyword</label>
        <input type="text" name="product_keyword" class="form-control" placeholder="Enter a product keyword" autocomplete="off" required="required">
    </div>
    
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="" class="form-select">
        <option value="">select a Category</option>
        <?php
         $select_query = "select * from categories";
         $result_query =mysqli_query($conn, $select_query);
         while($row_data = mysqli_fetch_assoc($result_query))
         {    
         $category_id=$row_data['category_id'];
         $category_title=$row_data['category_title'];
             
             echo"<option value='$category_id'>$category_title</option>"; 
             }
        
        ?>    
       <!-- 
        <option value="">Category1</option>
        <option value="">Category2</option>
        <option value="">Category3</option>
        <option value="">Category4</option>
        -->
        </select>
    </div>
     <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_brand" id="" class="form-select">
        <option value="">select a Brand</option>
           <?php
         $select_query = "select * from brand";
         $result_query =mysqli_query($conn, $select_query);
         while($row_data = mysqli_fetch_assoc($result_query))
         {    
         $brand_id=$row_data['brand_id'];
         $brand_title=$row_data['brand_title'];
             
             echo"<option value='$brand_id'>$brand_title</option>"; 
             }
        
        ?> 
       <!-- <option value="">Brand1</option>
        <option value="">Brand2</option>
        <option value="">Brand3</option>
        <option value="">Brand4</option>
        -->
        </select>
    </div>
    
    <div class="form-outline mb-4 m-auto w-50">
        <label for="product_image1" class="form-label">Product Image1</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
    </div>
    
     <div class="form-outline mb-4 m-auto w-50">
        <label for="product_image2" class="form-label">Product Image2</label>
        <input type="file" name="product_image2" id="product_image1" class="form-control" required="required">
    </div>
    
     <div class="form-outline mb-4 m-auto w-50">
        <label for="product_image3" class="form-label">Product Image3</label>
        <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
    </div>
    
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product price" class="form-label">Product Price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
      <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
    </div>
</form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    relintegrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>