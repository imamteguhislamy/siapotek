<!DOCTYPE html>
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
        <title>Login | Semoga Jaya</title>
        <link href="<?php echo base_url();?>/assets/images/favicon.ico" rel="shortcut icon">
    </head>
    <body background="<?php echo base_url();?>/assets/images/bg.jpg" height="100px" weight="100px">    
        <div class="col-lg-12">
            <div class="col-lg-4">
            </div> 
            <div class="col-lg-4">
                
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-4">
            </div> 
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center;"><strong>Admin Login</strong></h3>
                    </div>
                    <div class="panel-body">
                    <div class="alert alert-danger"> 
                        <div class="text-center">
                            <?php echo $err_message;?>
                        </div>
                    </div>
                        <form method="POST" action="<?php echo base_url().'index.php/crud_obat/login_check'?>">
                            <table>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                            </table>
                            <input type="submit" name="btnSubmit" class="btn btn-default" value="Login">
                            
                        </form>      
                    </div>
                </div>
            </div>            
            
        </div>
    </div>
    </body>
</html>