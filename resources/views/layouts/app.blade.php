<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <!-- App css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/core.css" rel="stylesheet" type="text/css" />
    <link href="css/components.css" rel="stylesheet" type="text/css" />
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <link href="css/pages.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="js/modernizr.min.js"></script>

</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">


    @include('partials.toolbar')

    @include('partials.nav')



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        @yield('main')

        <footer class="footer text-right">
            2016 © Zircos.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="mdi mdi-close-circle-outline"></i>
        </a>
        <h4 class="">Settings</h4>
        <div class="setting-list nicescroll">
            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Notifications</h5>
                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">API Access</h5>
                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Auto Updates</h5>
                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Online Status</h5>
                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/detect.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/waves.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="../plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="../plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="js/jquery.core.js"></script>
<script src="js/jquery.app.js"></script>

</body>
</html>