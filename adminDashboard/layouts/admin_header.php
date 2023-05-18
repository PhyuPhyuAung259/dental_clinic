<?php include '../config/database.php'; ?>
<?php
session_start();
  if(isset($_SESSION['staff'])){
    $staffname= $_SESSION['staff']['name'];
  }
  else{
    header('Location: staff/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top border-bottom">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto  ms-3 text-uppercase fw-bold"
          href="#"
          >SmileCare</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown ">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-primary"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark ms-5">
          <ul class="navbar-nav">
            
            <li class="mb-3">
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Treatment</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Booking</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Doctors</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Blog</span>
              </a>
            </li>
            <li class="mb-3">
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Staff</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
