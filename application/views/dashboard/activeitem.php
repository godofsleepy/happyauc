<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HappyAuc:)</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../asset/assets_dashboard/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../asset/assets_dashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../asset/assets_dashboard/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../asset/img/H).png" />
</head>

<body>
    <div class="container-scroller">
        <?php $this->load->view("dashboard/component/nav.php") ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view("dashboard/component/sidenav.php") ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Admin</h4>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Image </th>
                                                <th> Name </th>
                                                <th> Seller </th>
                                                <th> Open Date </th>
                                                <th> Close Date </th>
                                                <th> Open Price </th>
                                                <th> Close Price </th>
                                                <th> Description </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (1 > 0) {
                                                $i = 1;
                                                foreach ($items as $item) {
                                            ?>
                                                    <tr>
                                                        <td> <?php echo $i; ?> </td>
                                                        <td> <img src="../../uploads/<?php echo $item->image ?>" alt="..."> </td>
                                                        <td> <?php echo $item->name ?> </td>
                                                        <td> <?php echo $item->seller ?></td>
                                                        <td> <?php echo $item->start_date ?> </td>
                                                        <td> <?php echo $item->close_date ?></td>
                                                        <td> <?php echo $item->start_bid ?> </td>
                                                        <td> <?php echo $item->close_bid ?> </td>
                                                        <td> <?php echo $item->description ?> </td>

                                                        <td>

                                                            <?php echo anchor('dashboard/deleteAdmin/' . $item->id, '<button type="button" class="btn btn-gradient-danger btn-rounded btn-icon">
                                                            <i class="mdi mdi-home-outline"></i>
                                                        </button>') ?>

                                                        </td>
                                                    </tr>
                                            <?php
                                                    $i++;
                                                }
                                            } else {
                                                echo "Data Tidak Ditemukan";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <a href="<?php echo site_url('dashboard/exportpdf/admin') ?>" type="button" class="btn btn-gradient-primary mr-2">Export to PDF</a>
                                <a href="<?php echo site_url('dashboard/exportexcel/admin') ?>" type="button" class="btn btn-gradient-primary mr-2">Export to Excel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../asset/assets_dashboard/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../asset/assets_dashboard/js/off-canvas.js"></script>
    <script src="../../asset/assets_dashboard/js/hoverable-collapse.js"></script>
    <script src="../../asset/assets_dashboard/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->

    <!-- End custom js for this page -->
</body>

</html>