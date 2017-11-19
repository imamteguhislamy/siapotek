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
                   <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Pencarian </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-search"></i> Pencarian
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <form action="<?php echo base_url('index.php/crud_obat/aksi')?>" method="post">
                                <div class="form-group">
                                    <label for="cari" style="font-size: 15px">Masukkan Nama Obat</label>
                                    <?php echo validation_errors() . "</br>";?>
                                    <input type="text" class="form-control" id="cari" name="cari" placeholder="search">
                                </div>
                                <input class="btn btn-default" type="submit" value="Cari">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>