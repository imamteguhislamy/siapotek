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
        <div id="wrapper">
        <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Faktur</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Upload Faktur
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <!--<form method="POST" action="<?php //echo base_url()."index.php/crud_faktur/do_insert"; ?>">-->
                                
                                <?php echo form_open_multipart('upload/do_upload');?>
                                <table>
                                    <!--<label>Kode Barang</label>
                                        <input class="form-control" type="text" name="kode_obat" />-->
                                    <div class="form-group">
                                        <label>Nama Pabrik</label>
                                        <input class="form-control" type="text" name="nama_pabrik">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input class="form-control" type="text" name="keterangan">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>File Faktur</label>
                                        <input type="file" name="file_faktur" size="20" />
                                    </div> 
                                </table>
                                <?php echo validation_errors()?>
                                <input type="hidden" name="is_submit" value="1">
                                <input type="submit" name="submit" class="btn btn-default" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>