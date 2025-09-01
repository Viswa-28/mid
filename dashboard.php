
<?php
session_start();
include('include/config.php');
include('include/head.php');
include('include/admin-nav.php');


if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Admin Name from session
$adminName = $_SESSION['username'] ?? 'Admin';

// Total sales revenue
$salesQuery = "SELECT SUM(price * quantity) AS total_revenue FROM sales";
$salesResult = $conn->query($salesQuery);
$salesData = $salesResult->fetch_assoc();
$totalRevenue = $salesData['total_revenue'] ?? 0;

// Total orders
$ordersQuery = "SELECT COUNT(DISTINCT id) AS total_orders FROM sales";
$ordersResult = $conn->query($ordersQuery);
$ordersData = $ordersResult->fetch_assoc();
$totalOrders = $ordersData['total_orders'] ?? 0;

// Total quantity sold
$quantityQuery = "SELECT SUM(quantity) AS total_quantity FROM sales";
$quantityResult = $conn->query($quantityQuery);
$quantityData = $quantityResult->fetch_assoc();
$totalQuantity = $quantityData['total_quantity'] ?? 0;
?>
<div class="dashboard ">
 

  <!-- Stats Grid -->
  <div class="stats-grid" style="margin-bottom: 40px;">
    <div class="stat-box">
      <h3>Total Revenue</h3>
      <p>₹<?php echo isset($totalRevenue) ? number_format($totalRevenue, 2) : '0.00'; ?></p>
    </div>

    <div class="stat-box">
      <h3>Total Orders</h3>
      <p><?php echo isset($totalOrders) ? $totalOrders : '0'; ?></p>
    </div>

    <div class="stat-box">
      <h3>Products Sold</h3>
      <p><?php echo isset($totalQuantity) ? $totalQuantity : '0'; ?></p>
    </div>
  </div>

  <!-- Recent Sales -->
  <h3>Recent Sales</h3>
  <div class="dashboard-table-responsive" style="width:100%; overflow-x:auto; margin: 32px 0;">
    <table class="dashboard-table" style="min-width:600px; width:100%;">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>Price (Each)</th>
        <th>Total</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $recentSalesQuery = "SELECT * FROM sales ORDER BY sale_date DESC";

      $result = $conn->query($recentSalesQuery);
      if (!$result) {
        die("Query failed: " . $conn->error);
      }

      if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $orderId = $row['id'];
          $productId = $row['product_id'];
          $quantity = $row['quantity'];
          $price = $row['price'];
          $total = $quantity * $price;
          $date = date("Y-m-d", strtotime($row['sale_date']));

          echo "<tr>
                                    <td>$orderId</td>
                                    <td>$productId</td>
                                    <td>$quantity</td>
                                    <td>₹$price</td>
                                    <td>₹$total</td>
                                    <td>$date</td>
                                </tr>";
        }
      } else {
        echo "<tr><td colspan='6'>No recent sales found.</td></tr>";
      }
      ?>
    </tbody>
    </table>
  </div>
</div>
</div>

</body>

</html>