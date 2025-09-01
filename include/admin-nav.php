<?php

$page = basename($_SERVER['PHP_SELF']);
include('include/config.php');
include('include/head.php');

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Midnight Vogue Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center gap-4">
        <li class="nav-item">
          <a class="nav-link 
          <?php if($page=='dashboard.php'){echo 'active';} ?>
          " aria-current="page" href="dashboard.php">Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link 
          <?php if($page=='trending-products.php'){echo 'active';} ?>
          " href="trending-products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link 
          <?php if($page=='users.php'){echo 'active';} ?>
          " href="users.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link 
          <?php if($page=='contact.php'){echo 'active';} ?>
          " href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-light" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>