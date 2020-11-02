<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Miracle Salon </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="staff.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="staff.php"><i class="fa fa-dashboard"></i> staff</a>
                    </li>
                    <li>
                        <a href="costumer.php"><i class="fa fa-qrcode"></i> costumer</a>
                    </li>
                        <li>
                            <a href="lanjut.php"><i class="fa fa-desktop"></i> Lanjutkan</a>
                        </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            daftar karyawan<small> </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->


                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nama</th>
                                                <th>jenis kelamin</th>
                                                <th>nomer telepon</th>
                                                <th>alamat</th>
                                                <th>gaji</th>
                                                <th>jabatan</th>
                                                <th>status</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            include('db.php');
                                            $sql = "select * from staff";
                                            $re = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_array($re)) {

                                                $id = $row['id_staff'];

                                                if ($id % 2 == 1) {
                                                    echo "<tr class='gradeC'>
													<td>" . $row['id_staff'] . "</td>
													<td>" . $row['nama_staff'] . "</td>
													<td>" . $row['jk_staff'] . "</td>
													<td>" . $row['nohp_staff'] . "</td>
													<td>" . $row['alamat_staff'] . "</td>
													<td>" . $row['gaji_staff'] . "</td>
													<td>" . $row['jabatan_staff'] . "</td>
													<td>" . $row['status'] . "</td>
													</tr>";
                                                } else {
                                                    echo "<tr class='gradeU'>
                                                <td>" . $row['id_staff'] . "</td>
                                                <td>" . $row['nama_staff'] . "</td>
                                                <td>" . $row['jk_staff'] . "</td>
                                                <td>" . $row['nohp_staff'] . "</td>
                                                <td>" . $row['alamat_staff'] . "</td>
                                                <td>" . $row['gaji_staff'] . "</td>
                                                <td>" . $row['jabatan_staff'] . "</td>
                                                <td>" . $row['status'] . "</td>
                                                </tr>";
                                                }
                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
                <!-- /. ROW  -->

            </div>

        </div>
    </div>
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>