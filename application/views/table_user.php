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
        <title>Pelanggan | Semoga Jaya</title>
        <link href="<?php echo base_url();?>/assets/images/favicon.ico" rel="shortcut icon">
    </head>    
    <body>
        <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                   <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Pelanggan
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-bar-chart-o"></i> Data Pelanggan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php
                                    $data = $this->model->GetUser();
                                    ?>
                                    <table class="table table-bordered table-hover table-striped" border = "1" style="width :100%">
                                    <tr>
                                        <th style="text-align: center;">Nama Pelanggan</th>
                                        <th style="text-align: center;">Alamat</th>
                                        <th style="text-align: center;">Nama Instansi</th>
                                        <th style="text-align: center;">Foto User</th>
                                        <th style="text-align: center;">Foto Toko</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                    <?php foreach($data as $a){ ?>
                                    <tr>
                                        <td align=center><?php echo $a['nama_user']; ?></td>
                                        <td align=center><?php echo $a['alamat']; ?></td>
                                        <td align=center><?php echo $a['nama_instansi']; ?></td>
                                        <td align=center><img src="<?php echo base_url('uploads/'). $a['foto_user']; ?>" height="10px" weight="10px" class="img-responsive"></td>
                                        <td align=center><img src="<?php echo base_url('uploads/'). $a['foto_toko']; ?>" height="10px" weight="10px" class="img-responsive"></td>
                                        <td align="center">
                                            <a href="<?php echo base_url()."index.php/crud_user/edit_data/".$a['id_user']; ?>"><button class="btn btn-sm btn-success">Update</button></a>
                                            <a href="<?php echo base_url()."index.php/crud_user/do_delete/".$a['id_user']; ?>"><button class="btn btn-sm btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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