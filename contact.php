<?php
include('include/config.php');
include('include/head.php');
?>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Midnight Vogue Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="dashboard.php">📊 Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="sales.php">💰 Sales</a></li>
        <li class="nav-item"><a class="nav-link" href="trending-products.php">🔥 Products</a></li>
        <li class="nav-item"><a class="nav-link" href="user-dash.php">👤 Users</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">📩 Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="dashboard-content">
  <div class="container-fluid mt-4">

    <!-- KPI Cards -->
    <div class="row">
      <div class="col-md-3 col-6 mb-4">
        <div class="card shadow-sm text-center p-3">
          <h6 class="text-muted">Total Sales</h6>
          <h4 class="fw-bold text-success">₹45,000</h4>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="card shadow-sm text-center p-3">
          <h6 class="text-muted">Products</h6>
          <h4 class="fw-bold text-primary">120</h4>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="card shadow-sm text-center p-3">
          <h6 class="text-muted">Users</h6>
          <h4 class="fw-bold text-info">85</h4>
        </div>
      </div>
      <div class="col-md-3 col-6 mb-4">
        <div class="card shadow-sm text-center p-3">
          <h6 class="text-muted">Messages</h6>
          <h4 class="fw-bold text-danger">12</h4>
        </div>
      </div>
    </div>

    <!-- Chart + Table -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <div class="card shadow-sm">
          <div class="card-header bg-dark text-white">Sales Overview</div>
          <div class="card-body">
            <canvas id="salesChart" height="100"></canvas>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card shadow-sm">
          <div class="card-header bg-dark text-white">Recent Sales</div>
          <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Product</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr><td>001</td><td>Denim Jacket</td><td>₹1500</td></tr>
                <tr><td>002</td><td>Leather Shoes</td><td>₹2200</td></tr>
                <tr><td>003</td><td>T-Shirt</td><td>₹800</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Bootstrap + Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart Script -->
<script>
const ctx = document.getElementById('salesChart').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'Sales (₹)',
      data: [1200, 1900, 3000, 2500, 3200, 4000],
      borderColor: '#7C3AED',
      backgroundColor: 'rgba(124, 58, 237, 0.2)',
      tension: 0.3,
      fill: true
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false
  }
});
</script>

<!-- Custom CSS -->
<style>
.dashboard-content {
  padding-top: 80px; /* offset navbar */
}
</style>
