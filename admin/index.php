<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Crovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="dashboard/crm-index.html" class="logo">
                <span>
                    <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
               
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="../assets/images/users/user-1.png" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="logout.php"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->


    <?php
        // Include the database configuration file
        include '../config.php'; // Ensure this points to your correct config.php

        // Query to count the number of 'Interior' selectedProduct
        $countQueryInterior = "SELECT COUNT(*) AS interior_count FROM orders WHERE selectedProduct = 'Interior'";
        $countResultInterior = $conn->query($countQueryInterior);

        // Fetch the count
        $interiorCount = 0;
        if ($countResultInterior && $row = $countResultInterior->fetch_assoc()) {
            $interiorCount = $row['interior_count'];
        }

        // Query to count the number of 'Furniture' selectedProduct
        $countQueryFurniture = "SELECT COUNT(*) AS furniture_count FROM orders WHERE selectedProduct = 'Furniture'";
        $countResultFurniture = $conn->query($countQueryFurniture);

        // Fetch the count
        $furnitureCount = 0;
        if ($countResultFurniture && $row = $countResultFurniture->fetch_assoc()) {
            $furnitureCount = $row['furniture_count'];
        }

        // Query to count the number of 'eksterior' selectedProduct
        $countQueryEksterior = "SELECT COUNT(*) AS eksterior_count FROM orders WHERE selectedProduct = 'Eksterior'";
        $countResultEksterior = $conn->query($countQueryEksterior);

        // Fetch the count
        $EksteriorCount = 0;
        if ($countResultEksterior && $row = $countResultEksterior->fetch_assoc()) {
            $eksteriorCount = $row['eksterior_count'];
        }

    ?>

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Bucuworks</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Analytics</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-dark font-weight-semibold font-14">Interior</p>
                                        <h3 class="my-3"><?php echo $interiorCount; ?></h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="dripicons-user-group report-main-icon bg-soft-purple text-purple"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div> 
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-dark font-weight-semibold font-14">Eksterior</p>
                                        <h3 class="my-3"><?php echo $eksteriorCount; ?></h3>
                                    
                                    </div>
                                    <div class="align-self-center">
                                        <i class="dripicons-clock report-main-icon bg-soft-danger text-danger"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-dark font-weight-semibold font-14">Furniture</p>
                                        <h3 class="my-3"><?php echo $furnitureCount; ?></h3>
                                        
                                    </div>
                                    <div class="align-self-center">
                                        <i
                                            class="dripicons-meter report-main-icon bg-soft-secondary text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Data Penjualan</h4>
                                <p class="text-muted mb-3">
                                </p>

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Customer</th>
                                            <th>Produk Yang Dipilih</th>
                                            <th>Tipe Produk</th>
                                            <th>Warna</th>
                                            <th>Bahan</th>
                                            <th>Tema</th>
                                            <th>Budget</th>
                                            <th>Nomor Customer</th>
                                            <th>Tanggal Pesan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        // Query to fetch data from the "orders" table
                                        $sql = "SELECT * FROM orders";
                                        $result = $conn->query($sql); // Assuming $conn is the connection variable in config.php

                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                                        <td>{$row['id']}</td>
                                                        <td>{$row['customerName']}</td>
                                                        <td>{$row['selectedProduct']}</td>
                                                        <td>{$row['productType']}</td>
                                                        <td>{$row['color']}</td>
                                                        <td>{$row['material']}</td>
                                                        <td>{$row['theme']}</td>
                                                        <td>{$row['budget']}</td>
                                                        <td>{$row['customerNumber']}</td>
                                                        <td>{$row['created_at']}</td>
                                                    </tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='10' class='text-center'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metismenu.min.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>

    <!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/pages/jquery.datatable.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>


</body>

</html>
