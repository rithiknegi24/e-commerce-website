 <!--connect file--> 
 <?php 
  include('includes/connect.php'); 
  include('functions/common_function.php');
 ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website using PHP and MySQL</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
         
      <!-- css file --> 
      <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
  <div class="container-fluid p-0"> 
      <!--first child-->
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <img src="./images/logo.jpg" alt="" class="logo">
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="display.all.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item()?></sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Total Price:<?php total_cart_price();?>/-</a>
            </li>
          </ul>
          <form class="d-flex" action="search_product.php" method="get">
            <input class="form-control me-2" type="search"  
            placeholder="Search" aria-label="Search" name="search_data">
           <input type="submit" value="Search"  
           class= "btn btn-outline-light" name="search_data_product">
           
           </form>
        </div>
      </div>
    </nav>  

  <!---calling cart function --->  
  <?php  
   cart()
   ?>  
   
  
  <!--second child --> 
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
   <ul class="navbar-nav me-auto">  
   <li class="nav-item">
       <a class="nav-link" href="#">Welcome Guest </a> 
</li> 
<li class="nav-item">
       <a class="nav-link" href="./users_area/user_login.php">Login</a> 
</li>
</u1>

 </nav>
  
<!-- third child -->
<div class="bg-light"> 
      <h3 class="text-center">Hidden Store</h3> 
      <p>Communication is at the heart of e-commerce and community</p>
</div>
 
<!-- forth child--> 
  <div class="row px-3">
       <div class="col-md 10">
         <!--Products -->  
       <div class="row">  
<!--fectching Products -->
      <?php 
      //calling function
    getproducts();
    get_unique_categories();
    get_unique_brands(); 
  // $ip = getIPAddress();
  // echo 'User Real IP Address-' .$ip;
  ?>
 
 <!--row end -->
 </div>
      
  </div>
       <div class="col-md-2 bg-secondary p-0">  

     <!-- Brands Section -->
<h4 class="bg-info text-light text-center py-2">Delivery Brands</h4>
<ul class="navbar-nav me-auto text-center">
  <?php
    getbrands();
    ?>
</ul>

<!-- Categories Section -->
<h4 class="bg-info text-light text-center py-2">Categories</h4>
<ul class="navbar-nav me-auto text-center">
  <?php  
  getcategories()
  ?>
</ul>



 </div> 
</div>
     
     
    <!--last Child-->
    <?php include("./includes/footer.php") ?>
 
  </div>

  <!-- Bootstrap 5 JS Bundle (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-kF1cQJZk9lm49BfC0Hf+Y3ZWo1yZshnsyxgAjXbNmXekD7WDDfpaCFPRwW6t8Qbs"
          crossorigin="anonymous"></script>
</body>
</html>
