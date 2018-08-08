<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edumu MasterCMS </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/backend/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/backend/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/backend/css/custom.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/backend/css/mycustom.css') ?>" rel="stylesheet">
     <!-- Datatables -->
    <link href="<?= base_url('assets/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
     <!-- iCheck -->
    <link href="<?= base_url('assets/backend/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
    <script src="<?= base_url('assets/backend/vendors/ckeditor/ckeditor.js') ?>"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?= $sidebar; ?>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url('assets/backend/images/user.png') ?>" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <?= $content; ?>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; 2018 | Edumu by <a href="https://colorlib.com">PT OTRET COM</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/backend/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/backend/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/backend/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/backend/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <!-- <script src="<?= base_url('assets/backend/vendors/Chart.js/dist/Chart.min.js') ?>"></script> -->
    <!-- jQuery Sparklines -->
    <!-- <script src="<?= base_url('assets/backend/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script> -->
    <!-- Flot -->
    <script src="<?= base_url('assets/backend/vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('assets/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('assets/backend/vendors/DateJS/build/date.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('assets/backend/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
        <!-- Datatables -->
    <script src="<?= base_url('assets/backend/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/backend/js/custom.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/backend/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- CKeditor -->
    <script src="<?= base_url('assets/backend/vendors/ckeditor/ckeditor.js') ?>"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
  </body>
</html>