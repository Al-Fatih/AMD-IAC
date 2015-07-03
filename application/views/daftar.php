<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>favicon.ico">

    <title>Official Seminar Website Aplication for Beginner</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url() ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">Website Aplication for Beginner</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() ?>">Home</a></li>
                <li><a href="<?php echo base_url() ?>index.php/seminar/testimoni">Testimoni</a></li>
                <li><a href="<?php echo base_url() ?>index.php/seminar/about">About</a></li>
                <li class="active"><a href="<?php echo base_url() ?>index.php/seminar/daftar">Daftar</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <?php if(!isset($notif)){
        $notif = "alert alert-info";
    }
    ?>
    <div class='<?php echo $notif ?>' role="alert">
        <?php if(isset($info)){
            echo $info;
        } else {
            echo "Silakan mengisi form dibawah jika anda belum mendaftar";
        }?>
    </div>
    <div class="jumbotron">
        <!-- Main component for a primary marketing message or call to action -->

        <div class="col-sm-5">
            <div class="form-signin">
            <?php
            echo form_open('seminar/register');
            ?>
                <h2>DAFTAR PESERTA</h2>

                <p><input type="text" class="form-control" placeholder="Nama Lengkap" name="namalengkap" required></p>

                <p><input type="email" class="form-control" placeholder="Email" name="email" required/></p>

                <p><input type="text" class="form-control" placeholder="No. HP" name="nomor" required></p>

                <p><input type="text" class="form-control" placeholder="Jurusan" name="jurusan" required></p>

                <p><input type="text" class="form-control" placeholder="Perguruan Tinggi" name="ptn" required></p>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Daftar</button>
            <?php
            echo form_close();
            ?></div>
        </div>
        <br><br><br>

        <div class="col-md-3">
            <img src="<?php echo base_url() ?>/images/logo.png" width="600">
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
