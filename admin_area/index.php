<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  /> 
   
  <!--font awsome link-->  
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../style.css" />
  <style>
    .admin_image {
      width: 100px;
      object-fit: contain;
    } 
    .footer{ 
        position:absolute;
        bottom:0;
    }
  </style>
</head>
<body>
  <div class="container-fluid p-0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <img src="../images/logo.jpg" alt="Logo" class="logo me-3" />
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link text-dark">Welcome Guest</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <div class="bg-light">
      <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- Admin panel row -->
    <div class="row">
      <div class="col-12 bg-secondary p-3">
        <div class="d-flex align-items-center">
          <!-- Admin image + name -->
          <div class="text-center me-4">
            <a href="#">
              <img
                src="../images/e11.jpg"
                alt="Admin"
                class="admin_image rounded"
              />
            </a>
            <p class="text-light mt-2 mb-0">Admin Name</p>
          </div>

          <!-- Buttons -->
          <div class="d-flex flex-wrap gap-2">
            <a href="insert_product.php" class="btn btn-info btn-sm text-light">Insert Products</a>
            <a href="#" class="btn btn-info btn-sm text-light">View Products</a>
            <a href="index.php? insert_category" class="btn btn-info btn-sm text-light">Insert Categories</a>
            <a href="#" class="btn btn-info btn-sm text-light">View Categories</a>
            <a href="index.php? insert_brands" class="btn btn-info btn-sm text-light">Insert Brands</a>
            <a href="#" class="btn btn-info btn-sm text-light">View Brands</a>
            <a href="#" class="btn btn-info btn-sm text-light">All Orders</a>
            <a href="#" class="btn btn-info btn-sm text-light">All Payments</a>
            <a href="#" class="btn btn-info btn-sm text-light">List Users</a>
            <a href="#" class="btn btn-danger btn-sm text-light">Logout</a>
          </div>
        </div>
      </div>
    </div>  
     <!--fouth child -->  
     <div class="container my-5">
         <?php
          if(isset($_GET['insert_category'])){
             include('insert_categories.php');
          }
          if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
          }
        ?>
</div>

     <!--last Child-->
     <div class="bg-info p-3 text-center footer">
      <p>Website made by Rithik Negi</p>
</div> 

  </div>

  <!-- Bootstrap JS Bundle -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kF1cQJZk9lm49BfC0Hf+Y3ZWo1yZshnsyxgAjXbNmXekD7WDDfpaCFPRwW6t8Qbs"
    crossorigin="anonymous"
  ></script>
</body>
</html>
