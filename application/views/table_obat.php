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
        <title>Obat | Semoga Jaya</title>
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
                            Data Obat
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-bar-chart-o"></i> Data Obat
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
                                    $data = $this->model->GetObat();
                                    ?>
                                    <table class="table table-bordered table-hover table-striped" border = "1" style="width :100%">
                                    <tr>
                                        <th style="text-align: center;">Nama Obat</th>
                                        <th style="text-align: center;">Nama Pabrik</th>
                                        <th style="text-align: center;">Jumlah Barang</th>
                                        <th style="text-align: center;">Satuan</th>
                                        <th style="text-align: center;">Harga</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                    <?php foreach($data as $a){ ?>
                                    <tr>
                                        <td align=center><?php echo $a['nama_obat']; ?></td>
                                        <td align=center><?php echo $a['nama_pabrik']; ?></td>
                                        <td align=center><?php echo $a['jumlah']; ?></td>
                                        <td align=center><?php echo $a['satuan']; ?></td>
                                        <td align=center>Rp. <?php echo $a['harga']; ?></td>       
                                        <td align="center">
                                            <a href="<?php echo base_url()."index.php/crud_obat/edit_data/".$a['kode_obat']; ?>"><button class="btn btn-sm btn-success">Update</button></a>
                                            <a href="<?php echo base_url()."index.php/crud_obat/do_delete/".$a['kode_obat']; ?>"><button class="btn btn-sm btn-danger">Delete</button></a>
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
        </div>
    </body>
</html>