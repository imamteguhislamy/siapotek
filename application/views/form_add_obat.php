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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambahkan Obat</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-fw fa-bar-chart-o"></i>  <a href="<?php echo base_url()."index.php/crud_obat/index"; ?>">Data Obat</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Tambahkan Obat
                        </li>
                    </ol>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                    <h4 class="text-center" style="color: red"><strong><?php echo validation_errors()?></strong></h4>
                        <div class="form-group">
                            <form method="POST" action="<?php echo base_url()."index.php/crud_obat/do_insert"; ?>">
                                <table>
                                    <!--<label>Kode Barang</label>
                                        <input class="form-control" type="text" name="kode_obat" />-->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Barang <strong style="color: red">*</strong></label>
                                                <input class="form-control" type="text" name="nama_obat">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Nama Pabrik <strong style="color: red">*</strong></label>
                                                <input class="form-control" type="text" name="nama_pabrik">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Jumlah Barang <strong style="color: red">*</strong></label>
                                                <input class="form-control" type="text" name="jumlah">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Satuan</label>
                                                <select class="form-control" type="text" name="satuan">
                                                    <option>Buah</option>
                                                    <option>Lusin</option>
                                                    <option>Box</option>
                                                    <option>Tube</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label>Harga <strong style="color: red">*</strong></label>
                                                <div class="form-group input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <input type="text" class="form-control" name="harga">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Deskripsi Obat</label>
                                                <textarea type="text" class="form-control" rows="3" name="deskripsi"></textarea>
                                            </div>
                                        </div>  
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