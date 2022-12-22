<?php
    include_once('koneksi.php');

    //inisialisasi session
    session_start();
    
    $nama = $_SESSION["email"];
    
    //mengecek username pada session
    if( !isset($_SESSION['email']) ){
    header('Location: login.php');
    exit;
    }
    
    $hari = mysqli_query($koneksi, 'SELECT * FROM highchart_hari');
    while ($item = mysqli_fetch_array($hari)) {
        $data[] = array(
            $item['hari'],
            floatval($item['jumlah'])
        );
    }
    $json = json_encode($data);
  
    $hari1 = mysqli_query($koneksi, 'SELECT * FROM highchart_jam');
    while ($item1 = mysqli_fetch_array($hari1)) {
        $data1[] = array(
            $item1['jam'],
            floatval($item1['jumlah'])
        );
    }
    $json1 = json_encode($data1);
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT Spek Kuli Railway</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/logoskr.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #2d2a70;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon">
                    <img src="img/logoskr1.png" style="max-width: 90px;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Change Schedules Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="cancel.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Cancellation</span>
                </a>
            </li>

            <!-- Nav Item - Members Data Table -->
            <li class="nav-item">
                <a class="nav-link" href="members.php">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Members Data Table</span></a>
            </li>

            <!-- Nav Item - Reservationss Data Table -->
            <li class="nav-item">
                <a class="nav-link" href="reservation.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Reservations Data Table</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color:#ed6b23;">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Reservations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                    $data_reservasi = mysqli_query($koneksi, "SELECT * from reservasi");
                                                    $total_reservasi = mysqli_num_rows($data_reservasi);
                                                    echo $total_reservasi;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Members</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $data_member = mysqli_query($koneksi, "SELECT * from member");
                                                    $total_member = mysqli_num_rows($data_member);
                                                    echo $total_member;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-id-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Number of Stations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-train fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Number of Departures</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Crowded Chart this Month -->
                <section id="features" class="bg-cover">
                    <div class="container-fluid mt-3">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="card-title">SKR Passenger Crowded Chart this Month</h5></center>
                                        <hr>
                                        <div id="grafik"></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </section>

                <!-- Pie Chart -->
                <section id="features" class="bg-cover">
                    <div class="container-fluid mt-3">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="card-body">
                                        <center><h5 class="card-title">SKR Passenger Crowded Chart Today</h5></center>
                                        <hr>
                                        <div id="grafik2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </section>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer" style="background-color: #ed6b23;">
                <div class="container my-auto">
                    <div class="copyright text-center text-white my-auto">
                        <span>Copyright &copy; 2022 PT SPEK KULI RAILWAY, All Rights Reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- HIGHCHARTS  -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script type="text/javascript">
        Highcharts.chart('grafik', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'per Weeks'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            yAxis: {
                title: {
                    text: 'Average Passengers',
                }
            },
            xAxis: {
                type: 'category',
                accessibility: {
                    rangeDescription: 'Days on Weeks'
                }
            },
            tooltip: {
                pointFormat: '{point.y} people',
                shared: true
            },
            series: [{
                type: 'column',
                name: 'Unemployed',
                color : '#ed6b23',
                data: <?= $json ?>,
                showInLegend: false
            }],
            chart: {
                inverted: false,
                polar: false
            },
            responsive: {
            rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
                }
            }
            }]
            },
        });
    </script>

    <script type="text/javascript">
        Highcharts.chart('grafik2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'per Days'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            yAxis: {
                title: {
                    text: 'Average Passenger',
                }
            },
            xAxis: {
                type: 'category',
                accessibility: {
                    rangeDescription: 'Departure'
                }
            },
            tooltip: {
                pointFormat: '{point.y} people',
                shared: true
            },
            series: [{
                type: 'column',
                name: 'Unemployed',
                color : '#2d2a70',
                data: <?= $json1 ?>,
                showInLegend: false
            }],
            chart: {
                inverted: false,
                polar: false
            },
            responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                    }
                }
            }]
            },   
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>