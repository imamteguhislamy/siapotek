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
        <title>Faktur | Semoga Jaya</title>
        <link href="<?php echo base_url();?>/assets/images/favicon.ico" rel="shortcut icon">
    </head>
    <body>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Faktur
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-fw fa-bar-chart-o"></i> Lihat Faktur
                            </li>
                            <li>
                                <i class="fa fa-fw fa-bar-chart-o"></i> Detail Faktur
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: center;"><strong>Data Faktur</strong></h3>
                            </div>
                            <div class="panel-body">
                                <h5><strong>Kode Faktur     : </strong><?php echo $id_faktur ?></h5>
                                <h5><strong>Nama Pabrik     : </strong><?php echo $nama_pabrik ?></h5>
                                <h5><strong>Keterangan      : </strong><?php echo $keterangan ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: center;"><strong>Faktur</strong></h3>
                            </div>
                            <div class="panel-body">
                                <img src="<?php echo base_url('uploads/'). $file_faktur; ?>" height="100%" weight="100%" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </body>
</html>
