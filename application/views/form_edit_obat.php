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
                    <h1 class="page-header">Data Obat</h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-fw fa-bar-chart-o"></i>  <a href="<?php echo base_url()."index.php/welcome"; ?>">Data Obat</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Update Data Obat
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
                           <form method="POST" action="<?php echo base_url()."index.php/crud_obat/do_update"; ?>">
                                <table>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label>Nama Obat</label>
                                                <input class="form-control" type="text" name="nama_obat" value="<?php echo $nama_obat ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group has-error">
                                                <label for="inputError">Kode Obat</label>
                                                <input class="form-control" id="inputError" type="text" name="kode_obat" value="<?php echo $kode_obat ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nama Pabrik</label>
                                        <input class="form-control" type="text" name="nama_pabrik" value="<?php echo $nama_pabrik ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Jumlah Barang Masuk</label>
                                        <input class="form-control" type="text" name="jumlah" value="<?php echo $jumlah ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="disabledSelect">Satuan</label>
                                        <select id="disabledSelect" class="form-control" type="text" name="satuan" value="<?php echo $satuan ?>">
                                            <option <?php if($satuan == "Buah") { echo 'selected="selected"'; }?>>Buah</option>
                                            <option <?php if($satuan == "Lusin") { echo 'selected="selected"'; }?>>Lusin</option>
                                            <option <?php if($satuan == "Box") { echo 'selected="selected"'; }?>>Box</option>
                                            <option <?php if($satuan == "Tube") { echo 'selected="selected"'; }?>>Tube</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label>Harga</label>
                                        <div class="form-group input-group">
                                        <span class="input-group-addon">Rp.</span>
                                        <input type="text" class="form-control" name="harga" value="<?php echo $harga ?>">
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