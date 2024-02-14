<?php
include('includes/connect.php');
include('function/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piepeople</title>
  <link rel="icon" href="images2/logo.png" type="image/png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <img src="images2/logo.png" class="logo" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa-solid fa-cart-shopping "></i>
                <sup>1</sup>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total prize</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="d-flex justify-content-center flex-column p-1 flex-lg-row gap-4">
            <a href="#" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: red;">Login</a>
            <a href="#" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: blue;">Sign
              up</a>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Login</a>
        </li>
      </ul>
    </nav>


  </div>

  <div class="bg-light">
    <h3 class="text-center">Email Store</h3>
    <p class="text-center">We offer the best @ Affordable price</p>
  </div>

  <div class="row px-2">
    <div class="col-md-10">
      <div class="row">

        <?php

        getProducts();

        ?>




      </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light">
            <h4>Delivery brand</h4>
          </a>
        </li>
        <?php
        $select_brand = "Select * from brand";
        $result_brands = mysqli_query($conn, $select_brand);
        // $row_data=mysqli_fetch_assoc( $result_brand );
        //echo $row_data["brand_title"];

        while ($row_data = mysqli_fetch_assoc($result_brands)) {
          $brand_title = $row_data['brand_title'];
          $brand_id = $row_data['brand_id'];
          echo "<li class='nav-item'><a href='index.php?brand=$brand_id' class='nav-link text-
        light'>$brand_title</a></li>";
        }

        ?>


      </ul>

      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light">Categories</a>
        </li>
        <?php
        $select_category = "Select * from categories";
        $result_category = mysqli_query($conn, $select_category);
        // $row_data=mysqli_fetch_assoc( $result_category );
        //echo $row_data["category_title"];

        while ($row_data = mysqli_fetch_assoc($result_category)) {
          $category_title = $row_data['category_title'];
          $category_id = $row_data['category_id'];
          echo "<li class='nav-item'><a href='index.php?category=$category_id' class='nav-link text-
        light'>$category_title</a></li>";
        }

        ?>
      </ul>

    </div>
  </div>

  <div class="row">
    <div class="col-md-10 mb-2">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/c_tunic-shirt_girl.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Now</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping "></i></a>
              <a href="#" class="btn btn-secondary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/c_undershirt.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Now</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping "></i></a>
              <a href="#" class="btn btn-secondary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/c_western-shirt.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Now</h5>

              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping "></i></a>
              <a href="#" class="btn btn-secondary">Buy Now</a>
            </div>
          </div>

        </div>





      </div>
    </div>
    <di class="col-md-2 bg-secondary mt-2 p-0">
      <ul class="navbar-nav me-auto text-center ">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light">
            <h4>Delivery brand</h4>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 1</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 2</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 3</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 4</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 5</a>
        </li>

      </ul>

      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light">Categories</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 1</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 2</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 3</a>
        </li>
        <li class="nav-item">
          <h1 href="" class="nav-link text-light">Categories &nbsp; 4</h1>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 5</a>
        </li>
      </ul>


  </div>
  </div>
  <div class="row">
    <div class="col-md-10 mb-2">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/c_tunic-shirt_girl.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Now</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping "></i></a>
              <a href="#" class="btn btn-secondary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/c_undershirt.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Now</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping "></i></a>
              <a href="#" class="btn btn-secondary">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="images/c_western-shirt.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Buy Now</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-cart-shopping "></i></a>
              <a href="#" class="btn btn-secondary">Buy Now</a>
            </div>
          </div>

        </div>



      </div>
    </div>
    <div class="col-md-2 bg-secondary mt-2 p-0">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light">
            <h4>Delivery brand</h4>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 1</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 2</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 3</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 4</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand 5</a>
        </li>

      </ul>

      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light">Categories</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 1</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 2</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 3</a>
        </li>
        <li class="nav-item">
          <h1 href="" class="nav-link text-light">Categories &nbsp; 4</h1>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories 5</a>
        </li>
      </ul>

    </div>
  </div>

  <fotter>
    <div id="fotter" style="background-color: black"><!-- fotter begin -->
      <div class="container"><!-- container begin -->
        <div class="row"><!-- row begin -->
          <div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 begin -->
            <h4 style="color:  white" class="mt-5">Company</h4>
            <ul><!-- ul begin -->
              <li class="mt-4"> <span>Flat 20, Reynolds Neck, North
                  Helenaville, FV77</span></li>
              <li class=" fa fa-phone mt-4"><span> +2(305) 587-3407</span></li>
              <li class="fa fa-envelope mt-4"><span> info@example.com</span></li>
              <li><span class="me-4 fab fa-facebook"></span><span class=" me-4 fab fa-twitter"></span><span class="fab fa-linkedin"></span></li>
            </ul>
          </div><!-- col-md-6 col-md-3 end -->
          <div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 begin -->
            <h4 style="color: white" class="mt-5">Quick links</h4>
            <ul><!-- ul begin -->
              <li class="mt-4"> <span> About</span></li>
              <li class="mt-4"><span>Services</span></li>
              <li class="mt-4"><span>Team</span></li>
              <li class="mt-4"><span>Contact</span></li>
            </ul>
          </div><!-- col-md-6 col-md-3 end -->
          <div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 begin -->
            <h4 style="color: white" class="mt-5">Suscribe Us</h4>
            <ul><!-- ul begin -->
              <li class="mt-4"> <span> suscribe to get latest
                  news article and resources</span></li>
              <li class="mt-4"><span>
                  <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Suscribe Now...">
                  </form>
                </span>
              </li>
              <li class="mt-5"><span><button class="btn btn-warning  btn-lg" type="button">Suscribe</button></span></li>
            </ul>
          </div><!-- col-md-6 col-md-3 end -->
          <div class="col-md-6 col-md-3"><!-- col-md-6 col-md-3 begin -->
            <h4 style="color: white" class="mt-5">Gallery</h4>
          </div>
          <div class="col-md-6">
            <h4 class="ml-5">@Reserved to Wishfund by <a href="#" target="blank" style="color:darkorange">Themefisher</a></h4>
          </div>
        </div><!-- row end -->
      </div><!-- container end -->
    </div><!-- fotter end -->
  </fotter>

  <style>



  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>