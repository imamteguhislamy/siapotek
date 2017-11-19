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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambahkan Data Pelanggan</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-fw fa-bar-chart-o"></i>  <a href="<?php echo base_url()."index.php/crud_user/index"; ?>">Data Pelanggan</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Tambahkan Data Pelanggan
                        </li>
                    </ol>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-6">
                    <h4 class="text-center" style="color: red"><strong><?php echo validation_errors()?></strong></h4>
                        <div class="form-group">
                            <!--<form method="POST" action="<?php //echo base_url()."index.php/crud_user/do_insert"; ?>">-->
                            <?php echo form_open_multipart('upload/new_user');?>
                            <table>
                                <div class="form-group">
                                    <label>Nama Pelanggan <strong style="color: red">*</strong></label>
                                    <input class="form-control" type="text" name="nama_user" >
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" type="text" name="alamat" > </textarea>
                                </div>

                                <div class="form-group">
                                    <label>Nama Instansi <strong style="color: red">*</strong></label>
                                    <input class="form-control" type="text" name="nama_instansi" >
                                </div>   

                                <div class="form-group">
                                    <label>Foto Pelanggan</label>
                                    <input type="file" name="foto_user" size="20" />
                                </div>  

                                <div class="form-group">
                                    <label>Foto Toko</label>
                                    <input type="file" name="foto_toko" size="20" />
                                </div>  
                            </table>
                                <input type="hidden" name="is_submit" value="1">
                            <input type="submit" name="btnSubmit" class="btn btn-default" value="Simpan" >
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>