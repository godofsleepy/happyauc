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
    <link rel="shortcut icon" href="asset/img/H).png" />
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
                                                <th> NIK </th>
                                                <th> Name </th>
                                                <th> Email </th>
                                                <th> Phone </th>
                                                <th> Gender </th>
                                                <th> Date Birth </th>
                                                <th> Address </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (1 > 0) {
                                                foreach ($admins as $admin) {
                                            ?>
                                                    <tr>
                                                        <td> <?php echo $admin->nik ?> </td>
                                                        <td> <?php echo $admin->name ?></td>
                                                        <td> <?php echo $admin->email ?> </td>
                                                        <td> <?php echo $admin->phone ?></td>
                                                        <td> <?php echo $admin->gender ?> </td>
                                                        <td> <?php echo $admin->datebirth ?> </td>
                                                        <td> <?php echo $admin->address ?> </td>

                                                        <td>
                                                            <button type="button" class="btn btn-gradient-primary btn-rounded btn-icon" data-url="<?php echo  site_url('dashboard/editAdmin/') . $admin->id ?>" data-name="<?php echo $admin->name ?>" data-noktp="<?php echo $admin->nik ?>" data-phone="<?php echo $admin->phone ?>" data-email="<?php echo $admin->email ?>" data-address="<?php echo $admin->address ?>" data-gender="<?php echo $admin->gender ?>" data-toggle="modal" data-target="#exampleModal">
                                                                <i class="mdi mdi-home-outline"></i>
                                                            </button>

                                                            <?php echo anchor('dashboard/deleteAdmin/' . $admin->id, '<button type="button" class="btn btn-gradient-danger btn-rounded btn-icon">
                                                            <i class="mdi mdi-home-outline"></i>
                                                        </button>') ?>

                                                        </td>
                                                    </tr>
                                            <?php }
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

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Register Admin</h4>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">No KTP</label>
                                        <input type="text" name="nik" class="form-control" id="nik" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Datebirth</label>
                                        <input type="text" class="form-control" name="datebirth" id="datebirth" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Location">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Address</label>
                                        <textarea class="form-control" name="address" id="address" rows="4"></textarea>
                                    </div>
                                    <button type="button" id="insert-data" class="btn btn-gradient-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form id="editform" class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">No KTP</label>
                                        <input type="text" name="nik" class="form-control" id="editnik" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="editname" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" name="email" id="editemail" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" name="gender" id="editgender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Datebirth</label>
                                        <input type="text" class="form-control" name="datebirth" id="editbirthdate" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" id="editphone" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Address</label>
                                        <textarea class="form-control" name="address" id="editaddress" rows="4"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {

            var myVal = $(event.relatedTarget).data('url');
            var noKtp = $(event.relatedTarget).data('noktp');
            var name = $(event.relatedTarget).data('name');
            var email = $(event.relatedTarget).data('email');
            var gender = $(event.relatedTarget).data('gender');
            var phone = $(event.relatedTarget).data('phone');
            // var datebirth = $(event.relatedTarget).data('datebirth');
            var address = $(event.relatedTarget).data('address');
            $(this).find("#editform").attr("action", myVal)
            $(this).find("#editnik").val(noKtp)
            $(this).find("#editname").val(name)
            $(this).find("#editemail").val(email)
            $(this).find("#editgender").val(gender)
            // $(this).find("#editemail").val(datebirth)
            $(this).find("#editphone").val(phone)
            $(this).find("#editaddress").val(address)
        });

        $('#insert-data').on('click', function() {
            var form_data = new FormData(); // Create a FormData object
            form_data.append('nik', $('#nik').val());
            form_data.append('name', $('#name').val());
            form_data.append('email', $('#email').val());
            form_data.append('password', $('#password').val());
            form_data.append('gender', $('#gender').val());
            form_data.append('phone', $('#phone').val());
            form_data.append('address', $('#address').val());
            console.log(form_data)

            $.ajax({
                type: "POST",
                url: "http://[::1]/happyauc/dashboard/addAdmin",
                data: {
                    'nik': $('#nik').val(),
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                    'gender': $('#gender').val(),
                    'phone': $('#phone').val(),
                    'datebirth': $('#datebirth').val(),
                    'address': $('#address').val(),
                },

                success: function(data) {
                    alert("sucess");
                    window.location.reload();
                },

                error: function(msg) {
                    console.log(msg)
                }
            });
        })
    </script>
    <!-- End custom js for this page -->
</body>

</html>