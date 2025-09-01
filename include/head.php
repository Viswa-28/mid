<?php
$page=basename($_SERVER['PHP_SELF']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midnight Vogue <?php
  if($page=='index.php')
  {
    echo 'Home';
  }
  else if($page=='about.php')
  {
    echo 'About';
  }
  else if($page=='contact.php')
  {
    echo 'Contact';
  }
  else if($page=='dashboard.php')
  {
    echo 'Dashboard';
  }
  ?>
  </title>
  <!-- <link rel="shortcut icon" href=
   "./images/favicon.png" type="image/x-icon"> -->
<link rel="shortcut icon" href="./images/favicon-suit.png" type="image/x-icon">
<?php
if ($page == 'index.php') {
    echo '<link rel="stylesheet" href="./css/style.css">';
   echo '<link rel="stylesheet" href="./css/common.css">';
} 
elseif($page=='noir.php'){
  echo '<link rel="stylesheet" href="./css/product.css">';
  echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=='cart.php'){
  echo '<link rel="stylesheet" href="./css/cart.css">';
  echo '<link rel="stylesheet" href="./css/common.css">';
}


elseif ($page == 'register.php') {
    echo '<link rel="stylesheet" href="./css/register.css">';
     echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=='admin-nav.php'){
  echo '<link rel="stylesheet" href="./css/adminnav.css">';
}
elseif ($page == 'login.php') {
    echo '<link rel="stylesheet" href="./css/login.css">';
}
elseif ($page == 'dashboard.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}
// elseif ($page == 'trending.php') {
//     echo '<link rel="stylesheet" href="./css/add.css">';
// }
elseif ($page == 'trending-products.php') {
    echo '<link rel="stylesheet" href="./css/trending.css">';
}
elseif ($page == 'add-product.php'|| $page == 'update-product.php'|| $page == 'delete-product.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}

elseif ($page == 'contact.php') {
    echo '<link rel="stylesheet" href="./css/dashboard.css">';
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
<!-- Move Bootstrap JS to end of body in your main layout file for best practice -->
