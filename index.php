<?php
    $main = "";

    $rooms = array([
            'color' => 'aqua',
            'title' => 'MPS',
            'desc' => 'Medical Professional Services',
            'icon' => 'user-md',
            'link' => '#'
        ],[
            'color' => 'red',
            'title' => 'NSD',
            'desc' => 'Nursing Service Division',
            'icon' => 'stethoscope',
            'link' => '#'
        ],[
            'color' => 'green',
            'title' => 'HOPSS',
            'desc' => 'Hospital Operations and Patient Support Services',
            'icon' => 'gears',
            'link' => '#'
        ],[
            'color' => 'yellow',
            'title' => 'FMD',
            'desc' => 'Finance Management Division',
            'icon' => 'money',
            'link' => '#'
        ]
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jimmy Parker">
    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
    <title>RBM WORKSHOP FOR HOSPITAL</title>
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">RBM WORKSHOP FOR HOSPITAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            
            </ul>
        </div>
    </div>
</nav>
<!-- Header -->
<header class="bg-success py-3 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <div class="banner mt-5">
                    <img src="images/banner.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Content -->
<div class="wrapper">
    <div class="container">
        <h2 class="text-success title-header">LIST OF ROOMS <small class="text-muted"></small></h2>
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>Main Room</h3>
                        <p>January 15, 2021<br>9am to 4pm</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-wechat"></i>
                    </div>
                    <a href="<?php echo $main; ?>" target="_blank" class="small-box-footer">
                        Click here to enter room <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>

    <div class="container">
        <h2 class="text-success title-header">BREAKOUT ROOMS <small class="text-muted"></small></h2>
        <div class="row">
            <?php foreach($rooms as $r): ?>
            <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-<?php echo $r['color']; ?>">
                    <div class="inner">
                        <h3><?php echo $r['title']; ?></h3>
                        <p><?php echo $r['desc']; ?></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-<?php echo $r['icon']; ?>"></i>
                    </div>
                    <a href="<?php echo $r['link']; ?>" target="_blank" class="small-box-footer">
                        Click here to enter room <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /.container -->
<!-- Footer -->
<footer class="py-md-3 bg-dark footer">
    <div class="container">
        <font class="text-white">Copyright &copy; TDH iHOMP 2019</font>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>