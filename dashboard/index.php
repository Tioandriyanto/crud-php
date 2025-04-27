<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$dosen = mysqli_query($connection, "SELECT COUNT(*) FROM dosen");
$user = mysqli_query($connection, "SELECT COUNT(*) FROM login");
$matakuliah = mysqli_query($connection, "SELECT COUNT(*) FROM matakuliah");



$total_dosen = mysqli_fetch_array($dosen)[0];
$total_user = mysqli_fetch_array($user)[0];
$total_matakuliah = mysqli_fetch_array($matakuliah)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="bi bi-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Dosen</h4>
            </div>
            <div class="card-body">
              <?= $total_dosen ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="bi bi-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total User</h4>
            </div>
            <div class="card-body">
              <?= $total_user ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="bi bi-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Mata kuliah</h4>
            </div>
            <div class="card-body">
              <?= $total_matakuliah ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>