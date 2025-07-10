<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-registration</title>
     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

 
</head>
</head>
<body>
<div class="container-fluid my-3">
    <h2 class="text-center">New User Registration</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
    <!-- username feield -->
    <div class="form-outline mb-4">
         <label for="user_username" class="form-label">Username</label>
         <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
    </div>
    <!-- email field -->
    <div class="form-outline  mb-4">
         <label for="user_email" class="form-label">Email</label>
         <input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="user_email"/>
    </div>

      <!-- image field -->
      <div class="form-outline  mb-4">
         <label for="user_image" class="form-label">User Image</label>
         <input type="file" id="user_image" class="form-control" required="required" name="user_image"/>
    </div>

      <!-- password field -->
      <div class="form-outline  mb-4">
         <label for="user_password" class="form-label">Password</label>
         <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
    </div>

     <!--confirm password field -->
      <div class="form-outline  mb-4">
         <label for="conf_user_password" class="form-label">Confirm Password</label>
         <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" autocomplete="off" required="required" name="conf_user_password"/>
    </div>
       <!-- Address feield -->
       <div class="form-outline mb-4">
         <label for="user_address" class="form-label">Address</label>
         <input type="text" id="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required="required" name="user_address"/>
    </div>
     <!-- Contact feield -->
       <div class="form-outline mb-4">
         <label for="user_contact" class="form-label">Contact</label>
         <input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile number" autocomplete="off" required="required" name="user_contact"/>
    </div>
    <div class="mt-4 pt-2">
        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ? <a href="user_login.php" class="text-danger"> Login</a> </p>
    </div>
</form>
        </div>
    </div>
</div>
</body>
