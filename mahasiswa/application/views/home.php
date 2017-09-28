<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIAKAD</title>
    <link href="http://localhost/siakad/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/siakad/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/siakad/vendors/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="http://localhost/siakad/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="http://localhost/siakad/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!--thema-->
    <link href="http://localhost/siakad/vendors/thema/css/custom.min.css" rel="stylesheet">
    <script src="http://localhost/siakad/vendors/jquery/dist/jquery.min.js"></script>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost/siakad/" class="site_title"><i class="fa fa-graduation-cap"></i> <span>SIAKAD</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo link_file; ?>img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
                <p>Mahasiswa</p>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

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
                    <img src="<?php echo link_file; ?>img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo link_file; ?>img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo link_file; ?>img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo link_file; ?>img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo link_file; ?>img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php echo $content_kanan; ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistem ini hanya untuk Demonstrasi
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="http://localhost/siakad/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/siakad/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/siakad/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="http://localhost/siakad/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="http://localhost/siakad/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="http://localhost/siakad/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="http://localhost/siakad/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="http://localhost/siakad/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="http://localhost/siakad/vendors/Flot/jquery.flot.js"></script>
    <script src="http://localhost/siakad/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="http://localhost/siakad/vendors/Flot/jquery.flot.time.js"></script>
    <script src="http://localhost/siakad/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="http://localhost/siakad/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="http://localhost/siakad/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="http://localhost/siakad/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="http://localhost/siakad/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="http://localhost/siakad/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/siakad/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="http://localhost/siakad/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="http://localhost/siakad/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="http://localhost/siakad/vendors/moment/min/moment.min.js"></script>
    <script src="http://localhost/siakad/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="http://localhost/siakad/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://localhost/siakad/vendors/sweetalert/sweetalert.min.js"></script>
    <!-- FullCalendar -->
    <script src="http://localhost/siakad/vendors/moment/min/moment.min.js"></script>
    <script src="http://localhost/siakad/vendors/fullcalendar/dist/fullcalendar.min.js"></script>

    <script src="http://localhost/siakad/vendors/thema/js/custom.min.js"></script>        
    <script type="text/javascript">
      $(document).ready(function(e) {
        init_sidebar();
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url("menu"); ?>",
        }).done(function(response) {
            $("#sidebar-menu").html(response);
            init_sidebar();
        }).fail(function() {
        })
      })
    </script>
  </body>
</html>