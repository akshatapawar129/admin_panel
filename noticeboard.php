<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SMShetty | Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
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
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Noticeboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php"> Home </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <strong> Noticeboard </strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
                <div class="wrapper wrapper-content animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-content">
                                    <form role="form">
                                        <div class="form-group">
                                            <label> Notice Title * </label> 
                                            <input type="text" placeholder="Enter Title ..." class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label> File Attchment ( or Notice url )  </label>
                                                <div class="custom-file">
                                                    <input id="notice" type="file" class="custom-file-input" accept="application/pdf">
                                                    <label for="notice" class="custom-file-label">Choose file ...</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label> Notice Url ( or File Attchment ) </label> 
                                                <input type="url" placeholder="Url ..." class="form-control">
                                            </div>
                                        </div>
                                        
                                        <button class="btn btn-primary " type="button"><i class="fa fa-check"></i>&nbsp;Submit</button>
                                    </form> 
                                </div>
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

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $('.custom-file-input').on('change', function() {
   let fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
}); 
    </script>
</body>
</html>
