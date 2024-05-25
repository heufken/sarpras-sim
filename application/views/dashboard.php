<!-- views/dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
  <?php $this->load->view('partials/navbar'); ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <?php $this->load->view('partials/sidebar'); ?>
      </div>
      <div class="col-md-9">
        <h1>Welcome to the Dashboard</h1>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text">100</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Items</h5>
              <p class="card-text">50</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Orders</h5>
              <p class="card-text">75</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
