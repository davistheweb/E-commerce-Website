<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myeconm</title>
    <link rel="stylesheet" href="style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark text-light" >

    <di class="container-fluid p-0">
        <!--first Child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
               <a class="navbar-brand" href="../index.php"><img src="../images2/logo.png" class="w-50"  alt=""></a>
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--Third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <img class="admin_image rounded-5" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                    <p class="text-light text-center">ADMIN</p>
                </div>
                
                <div class="button text-center">
                    <button  class="bg-dark rounded-3">
                        <a href="#" class="nav-link bg-dark text-light rounded-3">Insert Products</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link  bg-dark rounded-3 text-light ">View Products</a>
                    </button>
                    <button  class="bg-dark rounded-3">
                        <a href="index.php?insert_categories" class="nav-link text-light bg-dark rounded-3">Insert Categories</a>
                    </button >
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link text-light bg-dark rounded-3">View Categories</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="index.php?insert_brands" class="nav-link bg-dark text-light rounded-3">Insert Brands</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link bg-dark text-light rounded-3">View Brands</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link bg-dark text-light rounded-3">All Orders</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link bg-dark text-light rounded-3">All Payments</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link bg-dark text-light rounded-3">List Users</a>
                    </button>
                    <button class="bg-dark rounded-3">
                        <a href="#" class="nav-link bg-dark text-light rounded-3">Logout</a>
                    </button>
                </div>
            </div>
        </div>
        <!--fourth child-->
        <div class="container my-3">
            <?php
                if(isset($_GET['insert_categories']))
                {
                    include('insert_categories.php');
                }
                    if(isset($_GET['insert_brands']))
                    { 
                        include('insert_brand.php');

                }
                
            

            ?>
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
                            <li class="mt-4"><span><form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Suscribe Now...">
                </form></span>
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



    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>