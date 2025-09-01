<?php
include('include/config.php');
include('include/head.php');
include('include/admin-nav.php');

?>
<div class="dashboard">
  <h2>Dashboard</h2>

  <!-- Stats Grid -->
  <div class="stats-grid">
    <div class="stat-box">
      <h3>Total Revenue</h3>
      <p>₹<?= number_format($totalRevenue, 2) ?></p>
    </div>

    <div class="stat-box">
      <h3>Total Orders</h3>
      <p><?= $totalOrders ?></p>
    </div>

    <div class="stat-box">
      <h3>Products Sold</h3>
      <p><?= $totalQuantity ?></p>
    </div>
  </div>

  <!-- Recent Sales -->
  <h3>Recent Sales</h3>
  <table border="1" cellpadding="10" cellspacing="0">
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

</body>

</html>