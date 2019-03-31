<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CodeIgniter 3 Dashboard - Bootstrap Admin Theme</title>
    <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
</head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">CodeIgniter 3 Dashboard</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="/auth/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="/auth"><i class="fa fa-male fa-fw"></i> Authentication</a>
                            </li>
                            <li>
                                <a href="/gallery"><i class="fa fa-male fa-fw"></i> CRUD</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo lang('create_user_heading');?></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div id="infoMessage"><?php echo $message;?></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?php echo lang('create_user_subheading');?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <?php echo form_open("/auth/create_user");?>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="First Name" name="first_name" id="first_name" required>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" placeholder="Last Name" name="last_name" id="last_name" required>
                                            </div>

                                            <?php
                                              if($identity_column!=='email') {
                                                  echo '<p>';
                                                  echo lang('create_user_identity_label', 'identity');
                                                  echo '<br />';
                                                  echo form_error('identity');
                                                  echo form_input($identity);
                                                  echo '</p>';
                                              }
                                              ?>

                                            <div class="form-group">
                                                <input class="form-control" placeholder="Company" name="company" id="company" required>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" placeholder="phone" name="phone" id="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="email" name="email" id="email" required>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" placeholder="password" name="password" id="password" type="password" required>
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" placeholder="password confirm" name="password_confirm" id="password_confirm" type="password" required>
                                            </div>
                                            <button type="submit" class="btn btn-outline btn-primary col-lg-5 pull-left"><?php echo lang('create_user_submit_btn');?></button>
                                            <a href="/auth" type="button" class="btn btn-outline btn-warning col-lg-5 pull-right">Cancel</a>
                                            <?php echo form_close();?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js'); ?>"></script>
    </body>
</html>
