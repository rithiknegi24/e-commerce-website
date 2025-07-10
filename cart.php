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
  <title>Ecommerce Website - Cart Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .cart_img { 
      width: 80px;
      height: 80px;
      object-fit: cover;
    }
  </style>
</head>
<body>
<div class="container-fluid p-0">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <img src="./images/logo.jpg" alt="" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="display.all.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <?php cart(); ?>

  <!-- Second child -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link" href="#">Welcome Guest</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
    </ul>
  </nav>

  <!-- Third child -->
  <div class="bg-light text-center py-3">
    <h3>Hidden Store</h3>
    <p>Communication is at the heart of e-commerce and community</p>
  </div>

  <!-- Fourth child -->
  <div class="container my-4">
    <div class="row">
      <form action="" method="post">
        <table class="table table-bordered text-center">
          <?php
          global $con;
          $get_ip_add = getIPAddress();
          $total_cart_price = 0;

          $cart_query = "SELECT * FROM cart_details WHERE ip_address = '$get_ip_add'";
          $result = mysqli_query($con, $cart_query); 
          $result_count = mysqli_num_rows($result);

          if ($result_count > 0) {
            echo "<thead>
              <tr>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
                <th>Remove</th>
                <th>Operations</th>
              </tr>
            </thead>
            <tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
              $product_id = $row['product_id'];
              $quantity = $row['quantity'];

              $select_products = "SELECT * FROM products WHERE product_id = '$product_id'";
              $result_products = mysqli_query($con, $select_products);
              $product_row = mysqli_fetch_assoc($result_products);

              $product_price = $product_row['product_price'];
              $product_title = $product_row['product_title'];
              $product_image1 = $product_row['product_image1'];

              $effective_qty = ($quantity > 0) ? $quantity : 1;
              $product_total_price = $product_price * $effective_qty;
              $total_cart_price += $product_total_price;
              ?>
              <tr>
                <td><?php echo htmlspecialchars($product_title); ?></td>
                <td><img src="./images/<?php echo htmlspecialchars($product_image1); ?>" class="cart_img"></td>
                <td><input type="number" name="quantity[<?php echo $product_id; ?>]" min="1" value="<?php echo $quantity; ?>" class="form-control w-75 mx-auto"></td>
                <td><?php echo htmlspecialchars($product_price); ?></td>
                <td><?php echo htmlspecialchars($product_total_price); ?></td>
                <td><input type="checkbox" name="remove[]" value="<?php echo $product_id; ?>"></td>
                <td>
                  <button class="btn btn-primary btn-sm" type="submit" name="update_cart">Update</button>
                  <button class="btn btn-danger btn-sm" type="submit" name="remove_cart" onclick="return confirm('Are you sure you want to remove selected items?')">Remove</button>
                </td>
              </tr>
            <?php }
            echo "<tr>
              <td colspan='4'><strong>Total Cart Price:</strong></td>
              <td colspan='3'><strong>" . htmlspecialchars($total_cart_price) . "</strong></td>
            </tr>
            </tbody>";
          } else {
            echo "<tr><td colspan='7'><h5 class='text-center text-danger'>Your cart is empty.</h5></td></tr>";
          }
          ?>
        </table>

        <div class="d-flex mb-5">
          <?php if ($result_count > 0): ?>
            <h4 class="px-3">Subtotal: <strong class="text-info"><?php echo $total_cart_price; ?>/–</strong></h4>
            <a href="index.php" class="btn btn-info px-3 py-2 mx-3">Continue Shopping</a>
            <a href="./users_area/checkout.php" class="btn btn-secondary px-3 py-2 text-light">Checkout</a>
          <?php else: ?>
            <a href="index.php" class="btn btn-info px-3 py-2 mx-3 ms-auto">Continue Shopping</a>
          <?php endif; ?>
        </div>
      </form>

      <?php
      if (isset($_POST['update_cart']) && isset($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $product_id => $qty) {
          $qty = (int)$qty;
          $update_cart = "UPDATE cart_details SET quantity = $qty WHERE product_id = '$product_id' AND ip_address = '$get_ip_add'";
          mysqli_query($con, $update_cart);
        }
        echo "<script>window.location.href='cart.php';</script>";
      }

      if (isset($_POST['remove_cart']) && isset($_POST['remove'])) {
        foreach ($_POST['remove'] as $remove_id) {
          $delete_query = "DELETE FROM cart_details WHERE product_id = '$remove_id' AND ip_address = '$get_ip_add'";
          mysqli_query($con, $delete_query);
        }
        echo "<script>window.location.href='cart.php';</script>";
      }
      ?>
    </div>
  </div>

  <!-- Footer -->
  <?php include("./includes/footer.php"); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
