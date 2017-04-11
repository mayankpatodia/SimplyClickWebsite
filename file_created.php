<?php 
    session_start();
    $file_name = $_SESSION['file_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Download Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="myApp" ng-controller="myCtrl" class="back-4">

<div id="wrapper">
    <div class="overlay"></div>


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 about-head">
                    <h1 class="download-text-head">WooHoo! Your website has been generated in few simple clicks. Click below to download.</h1>
                </div>
                <div class="col-md-12 final-download-outer">
                    <button onclick="download_website('<?php echo $file_name; ?>')" class="btn btn-lg final-download"><span class="glyphicon glyphicon-save"></span> Download</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/nav.js"></script>
<script src="js/angular.min.js"></script>
<!-- <script src="js/view_picture.js"></script> -->
<script src="js/file_created.js"></script>
</body>
</html>
