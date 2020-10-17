<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Costumer Miracle Salon</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="staff.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="staff.php"><i class="fa fa-dashboard"></i> staff</a>
                    </li>
                    <li>
                        <a href="costumer.php" href="costumer.php"><i class="fa fa-qrcode"></i> costumer</a>
                    </li>

                    <li>
                        <a class="active-menu"><i class="fa fa-desktop"></i> Lanjutkan</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>



            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            lanjutkan<small> </small>
                        </h1>
                    </div>
                </div>

                <h2>isi disini gais</h2>
                
            </div>

        </div>


    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->

    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        function proses() {
            var n1 = (document.form.n.value);
            document.form.n1.value = n1;

            var nip1 = (document.form.nip.value);
            document.form.nip1.value = nip1;

            var jb1 = (document.form.jb.value);
            document.form.jb1.value = jb1;

            var jb = document.form.jb.value;
            if (jb == "Direktur") var gaji = 12000000;
            if (jb == "Manager") var gaji = 10000000;
            if (jb == "Sekretaris") var gaji = 9000000;
            document.form.gaji.value = gaji;

            var t1 = (document.form.t.value);
            document.form.t1.value = t1;

            var t1 = (document.form.t1.value);
            var t = document.form.t.value;
            if (t == "Anak") var p = 0.2;
            if (t == "Istri") var p = 0.1;
            if (t == "Anak&Istri") var p = 0.3;

            var tj = gaji * p;
            document.form.tj.value = tj;
            var pajak = 0.1 * gaji;
            document.form.pajak.value = pajak;
            var tg = gaji + tj - pajak;
            document.form.tg.value = tg;
        }
    </script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>