<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('dashboard/global/meta'); ?>
    <title>SIM BPMPPT - Prototype</title>
    <?php $this->load->view('dashboard/global/assets_header'); ?>
</head>
<body>
    <!-- START KONTEN -->
    <?php $this->load->view('dashboard/global/top'); ?>
    <?php $this->load->view('dashboard/sidebar'); ?>


<div id="content">
    <div class="contentTop">
        <span class="pageTitle"><span class="icon-screen"></span>Dashboard</span>
        <?php $this->load->view('dashboard/global/total_count'); ?>
        <div class="clear"></div>
    </div>

    <!-- Breadcrumbs line -->
    <div class="breadLine">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Dashboard</a></li>
            </ul>
        </div>

        <div class="breadLinks">

             <div class="clear"></div>
        </div>
    </div>

    <!-- Main content -->
    <div class="wrapper">
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>
    <!-- Main content ends -->
</div>

</body>
</html>