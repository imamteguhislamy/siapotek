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
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" >
                    <li>
                        <a href="<?php echo base_url()."index.php/crud_obat/cari"; ?>"><i class="fa fa-search"></i>  Pencarian</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#obat"><i class="fa fa-fw fa-bar-chart-o"></i> Data Obat <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="obat" class="collapse">
                            <li>
                                <a href="<?php echo base_url()."index.php/crud_obat/index"; ?>">Data Obat</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."index.php/crud_obat/add_data"; ?>">Tambah Obat</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#pelanggan"><i class="fa fa-fw fa-table"></i> Data Pelanggan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="pelanggan" class="collapse">
                            <li>
                                <a href="<?php echo base_url()."index.php/crud_user/index"; ?>">Data Pelanggan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."index.php/crud_user/add_data"; ?>">Tambah Pelangggan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#faktur"><i class="fa fa-fw fa-edit"></i> Faktur <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="faktur" class="collapse">
                            <li>
                                <a href="<?php echo base_url()."index.php/crud_faktur/index"; ?>">Lihat Faktur</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()."index.php/upload"; ?>"></i> Upload Faktur</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/plugins/morris/morris-data.js"></script>
    </body>
</html>