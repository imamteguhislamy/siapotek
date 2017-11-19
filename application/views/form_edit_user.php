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
                    <h1 class="page-header">Data Pelanggan</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-fw fa-bar-chart-o"></i>  <a href="<?php echo base_url()."index.php/welcome"; ?>">Data Pelanggan</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Update Data Pelanggan
                        </li>
                    </ol>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-center" style="color: red"><?php echo validation_errors() . "</br>";?></h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                           <form method="POST" action="<?php echo base_url()."index.php/crud_user/do_update"; ?>">
                                <table>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label>Nama Pelanggan</label>
                                                <input class="form-control" type="text" name="nama_user" value="<?php echo $nama_user ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group has-error">
                                                <label for="inputError">ID User</label>
                                                <input class="form-control" id="inputError" type="text" name="id_user" value="<?php echo $id_user ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" type="text" name="alamat" value="<?php echo $alamat ?>"> </textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nama Instansi</label>
                                        <input class="form-control" type="text" name="nama_instansi" value="<?php echo $nama_instansi ?>">
                                    </div> 
                                </table>
                                <input type="submit" name="btnSubmit" class="btn btn-default" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>