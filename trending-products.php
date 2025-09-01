<?php 
include('include/config.php');
include('include/head.php'); 
include("include/admin-nav.php");
?>
<body>


<!-- Main Content -->
<div class="container mt-5 pt-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Trending Products</h2>
    <a href="add-product.php" class="btn btn-primary">Create Product</a>
  </div>

  <div class="row">
    <?php
    $quary = "SELECT * FROM tproduct ORDER BY id DESC";
    $result = $conn->query($quary);

    while ($row = $result->fetch_assoc()) {
      $name = $row['name'];
      $image = $row['image'];
      $price = $row['price'];
      $description = $row['description'];
      $imagePath = 'http://localhost/project/images/' . $image;

      echo '<div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="' . $image . '" class="card-img-top" alt="' . $name . '">
                <div class="card-body">
                  <h5 class="card-title">' . $name . '</h5>
                  <p class="card-text">₹' . $price . '</p>
                  <div class="d-flex justify-content-between">
                    <a href="ubdate-product.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete-product.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div>
            </div>';
    }
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
