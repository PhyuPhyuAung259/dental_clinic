<?php include 'layouts/admin_header.php'; ?>
<?php
session_start();
//checking session
  if(isset($_SESSION['staff'])){
    $staffname= $_SESSION['staff'][0]['name'];
  }
  else{
    header('Location: staff/login.php');
  }
?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4>
          Dashboard - Hello
          <?php echo $staffname; ?>
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Appointment Booking
            Table
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="example"
                class="table table-striped data-table"
                style="width: 100%"
              >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Paitent Name</th>
                    <th>Treatment</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="SELECT * FROM appointment WHERE status=?";
                    $stmt=$pdo->prepare($sql); $stmt->execute(["pending"]);
                  $booking = $stmt->fetchAll(); ?>
                  <?php foreach ($booking as $data):?>
                  <tr>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->username; ?></td>
                    <td><?php echo $data->treatment; ?></td>
                    <td><?php echo $data->appointment_date; ?></td>
                    <td><?php echo $data->appointment_time; ?></td>
                    <td>
                      <a
                        href="../config/adminbookingconfirm.php?bookingid=<?php echo $data->id; ?>"
                        class="btn btn-primary"
                        name="btn_confirm"
                        >Confirm</a
                      >
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Booking Confirm list-->
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Booking Confirm List
            Table
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="example"
                class="table table-striped data-table"
                style="width: 100%"
              >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Paitent Name</th>
                    <th>Treatment</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="SELECT * FROM appointment WHERE status=?";
                    $stmt=$pdo->prepare($sql); $stmt->execute(["booking"]);
                  $booking = $stmt->fetchAll(); ?>
                  <?php foreach ($booking as $data):?>
                  <tr>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->username; ?></td>
                    <td><?php echo $data->treatment; ?></td>
                    <td><?php echo $data->appointment_date; ?></td>
                    <td><?php echo $data->appointment_time; ?></td>
                    <td>
                      <a
                        href="../config/adminbookingconfirm.php?patientid=<?php echo $data->id; ?>"
                        class="btn btn-primary"
                        name="btn_confirm"
                        >Confirm</a
                      >
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'layouts/adminheader.php'; ?>
<?php
session_start();
//checking session
  if(isset($_SESSION['staff'])){
    $staffname= $_SESSION['staff'][0]['name'];
  }
  else{
    header('Location: staff/login.php');
  }
?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4>
          Dashboard - Hello
          <?php echo $staffname; ?>
        </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Appointment Booking
            Table
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="example"
                class="table table-striped data-table"
                style="width: 100%"
              >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Paitent Name</th>
                    <th>Treatment</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="SELECT * FROM appointment WHERE status=?";
                    $stmt=$pdo->prepare($sql); $stmt->execute(["pending"]);
                  $booking = $stmt->fetchAll(); ?>
                  <?php foreach ($booking as $data):?>
                  <tr>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->username; ?></td>
                    <td><?php echo $data->treatment; ?></td>
                    <td><?php echo $data->appointment_date; ?></td>
                    <td><?php echo $data->appointment_time; ?></td>
                    <td>
                      <a
                        href="../config/adminbookingconfirm.php?bookingid=<?php echo $data->id; ?>"
                        class="btn btn-primary"
                        name="btn_confirm"
                        >Confirm</a
                      >
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Booking Confirm list-->
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Booking Confirm List
            Table
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="example"
                class="table table-striped data-table"
                style="width: 100%"
              >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Paitent Name</th>
                    <th>Treatment</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="SELECT * FROM appointment WHERE status=?";
                    $stmt=$pdo->prepare($sql); $stmt->execute(["booking"]);
                  $booking = $stmt->fetchAll(); ?>
                  <?php foreach ($booking as $data):?>
                  <tr>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->username; ?></td>
                    <td><?php echo $data->treatment; ?></td>
                    <td><?php echo $data->appointment_date; ?></td>
                    <td><?php echo $data->appointment_time; ?></td>
                    <td>
                      <a
                        href="../config/adminbookingconfirm.php?patientid=<?php echo $data->id; ?>"
                        class="btn btn-primary"
                        name="btn_confirm"
                        >Confirm</a
                      >
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
