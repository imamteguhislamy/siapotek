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
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> Update Data Obat
                            </li>
                        </ol>
                    </div>
                </div>
                <?php
                    if(count($cari)>0) {
                ?>
                <table class="table table-bordered table-hover table-striped" border = "1" style="width :100%">
                    <tr>
                        <!--<th style="text-align: center;">Kode Obat</th>-->
                        <th style="text-align: center;">Nama Obat</th>
                        <th style="text-align: center;">Nama Pabrik</th>
                        <th style="text-align: center;">Detail</th>
                    </tr>
                <?php
                        foreach ($cari as $data) { ?>
                    <tr>
                        <!--<td align=center><?php echo $a['kode_obat']; ?></td>-->
                        <td align=center><?php echo $data->nama_obat; ?></td>
                        <td align=center><?php echo $data->nama_pabrik; ?></td> 
                        <td align="center">
                        <a href="<?php echo base_url()."index.php/crud_obat/view_data/". $data->kode_obat; ?>"><button>View</button></a>
                        </td>
                    </tr>
                        <?php }
                    } else {
                        echo "Data tidak ditemukan";
                    }
                ?>
                </table>
            </div>    
        </div>
        </div>
    </body>
</html>
