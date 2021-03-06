<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SMShetty | Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'connection.php'; 
        if(!isValiduser())  
        { 
            redirect("login.php");
        }
    ?>
    <div id="wrapper">

        <!-- menubar -->
        <?php include 'includes/navbar.php'; ?>
        <!-- /menubar -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <!-- topbar -->
            <?php include 'includes/topbar.php'; ?>
            <!-- /topbar -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Dropzone.js</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="#" class="dropzone" id="dropzoneForm">
                                <div class="fallback">
                                    <input name="file" type="file" data-max-file-size="1M" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php include 'includes/footer.php'; ?>
            <!-- /footer -->
        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- DROPZONE -->
    <script src="js/plugins/dropzone/dropzone.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

</body>
</html>
