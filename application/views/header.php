<html>  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo base_url();?>/assets/css/sb-admin.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo base_url();?>/assets/css/plugins/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <title>Semoga Jaya</title>
    </head>    
    <body>
        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <img src="<?php echo base_url();?>/assets/images/logo-white.png" height="45px" align="center"><a class="navbar-brand" href="index.html"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">   
                <li>
                    <a href="#"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username')?></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/crud_obat/logout'?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
    </body>
</html>