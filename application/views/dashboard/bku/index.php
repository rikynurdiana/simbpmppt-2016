<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('dashboard/global/meta'); ?>
    <title>SIM BPMPPT - Prototype</title>
    <?php $this->load->view('dashboard/global/assets_header'); ?>
</head>
<body>
    <?php $this->load->view('dashboard/global/top'); ?>
    <?php $this->load->view('dashboard/bku/sidebar'); ?>

    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class="icon-screen"></span>BKU</span>
            <?php $this->load->view('dashboard/global/total_count'); ?>
            <div class="clear"></div>
        </div>

        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Bku</a></li>
                </ul>
            </div>

            <div class="breadLinks">

                 <div class="clear"></div>
            </div>
        </div>

        <!-- Main content -->
        <div class="wrapper">

        </div>
        <!-- Main content ends -->
    </div>
    <?php $this->load->view('dashboard/global/footer'); ?>
</body>
</html>