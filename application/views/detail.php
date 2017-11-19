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
        <title>Pencarian | Semoga Jaya</title>
        <link href="<?php echo base_url();?>/assets/images/favicon.ico" rel="shortcut icon">
    </head>
    <body>
        <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pencarian</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-search"></i><a href="<?php echo base_url()."index.php/crud_obat/cari"; ?>"> Pencarian</a>
                            </li>
                            <li>
                                <i class="fa fa-fw fa-table"></i><a href="<?php echo base_url()."index.php/crud_obat/aksi"; ?>"> Update Data Obat</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Detail Obat
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: center;"><strong>Data Obat</strong></h3>
                            </div>
                            <div class="panel-body">
                                <h5><strong>Kode Obat     : </strong><?php echo $kode_obat ?></h5>
                                <h5><strong>Nama Obat     : </strong><?php echo $nama_obat ?></h5>
                                <h5><strong>Nama Pabrik   : </strong><?php echo $nama_pabrik ?></h5>
                                <h5><strong>Stok Tersedia : </strong><?php echo $jumlah ?> <?php echo $satuan ?> </h5>
                                <h5><strong>Harga         : </strong>Rp. <?php echo $harga ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: center;"><strong>Deskripsi Obat</strong></h3>
                            </div>
                            <div class="panel-body">
                                <p><?php echo $deskripsi ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        </div>
    </body>
</html>
