<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('dashboard/global/meta'); ?>
    <title>SIM BPMPPT - Prototype</title>
    <?php $this->load->view('dashboard/global/assets_header'); ?>
</head>
<body>
	<?php $this->load->view('dashboard/global/top'); ?>
	<?php $this->load->view('dashboard/kendali/sidebar'); ?>

    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class="icon-screen"></span>KENDALI</span>
            <?php $this->load->view('dashboard/global/total_count'); ?>
            <div class="clear"></div>
        </div>

        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Kendali</a></li>
                </ul>
            </div>

            <div class="breadLinks">

                 <div class="clear"></div>
            </div>
        </div>

        <div class="wrapper">
            <fieldset>
                <div class="fluid">
                    <?php if ($programs == false): ?>
                    <?php else: ?>
                        <div class="widget grid4">
                            <div class="whead"><h6><?php echo strtoupper("Filter Per Program") ?></h6><div class="clear"></div></div>
                            <div class="body">
                                <div class="formRow ">
                                    <form action="<?php echo base_url('/kendali/filter_program');?>" method="post">
                                        <div class="grid9 searchDrop">
                                            <select id="id_program" name="id_program" class="select" data-placeholder="Pilih Program" tabindex="2" style="width:100%;">
                                                <option value=""></option>
                                                <?php foreach ($programs as $program): ?>
                                                    <option value="<?php echo $program->id_program ;?>">
                                                        <?php echo $program->nama_program ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <input id="filter_program" class="buttonS bLightBlue" type="submit" value="Filter" />
                                    </form>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>

                    <?php if ($kegiatans == false): ?>
                    <?php else: ?>
                        <div class="widget grid4">
                            <div class="whead"><h6><?php echo strtoupper("Filter Per Kegiatan") ?></h6><div class="clear"></div></div>
                            <div class="body">
                                <div class="formRow">
                                    <form action="<?php echo base_url('/kendali/filter_kegiatan');?>" method="post">
                                        <div class="grid9 searchDrop">
                                            <select id="id_kegiatan" name="id_kegiatan" class="select" data-placeholder="Pilih Kegiatan" tabindex="2" style="width:100%;">
                                                <option value=""></option>
                                                <?php foreach ($kegiatans as $kegiatan): ?>
                                                    <option value="<?php echo $kegiatan->id_kegiatan ;?>">
                                                        <?php echo $kegiatan->nama_kegiatan ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <input id="filter_kegiatan" class="buttonS bLightBlue" type="submit" value="Filter" />
                                    </form>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>

                    <?php if ($kegiatans == false): ?>
                    <?php else: ?>
                        <div class="widget grid4">
                            <div class="whead"><h6><?php echo strtoupper("Input Triwulan Per Kegiatan") ?></h6><div class="clear"></div></div>
                            <div class="body">
                                <div class="formRow">
                                    <form action="<?php echo base_url('/kendali/input_triwulan');?>" method="post">
                                        <div class="grid9 searchDrop">
                                            <select id="id_kegiatans" name="id_kegiatans" class="select" data-placeholder="Pilih Kegiatan" tabindex="2" style="width:100%;">
                                                <option value=""></option>
                                                <?php foreach ($kegiatans as $kegiatan): ?>
                                                    <option value="<?php echo $kegiatan->id_kegiatan ;?>">
                                                        <?php echo $kegiatan->nama_kegiatan ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <input id="filter_kegiatan" class="buttonS bLightBlue" type="submit" value="INPUT" />
                                    </form>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            <fieldset>

            <div class="divider"><span></span></div>

            <?php if ($all_unit == ''): ?>
                <div class="widget">
                    <div class="whead">
                        <h6>Data Belum Lengkap / Masih Kosong</h6>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php else: ?>
                <div class="widget">
                    <div class="whead"><h6><?php echo strtoupper("RINCIAN MASTER DPA"); ?></h6><div class="clear"></div></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
                        <thead>
                            <tr>
                                <td hidden>ID UNIT</td>
                                <td>Kegiatan</td>
                                <td>Sub Kegiatan</td>
                                <td>Unit</td>
                                <td>Volume</td>
                                <td>Satuan</td>
                                <td>Harga</td>
                                <td>Total</td>
                                <td>Triwulan 1</td>
                                <td>Triwulan 2</td>
                                <td>Triwulan 3</td>
                                <td>Triwulan 4</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all_unit as $unit): ?>
                                <tr>
                                    <td hidden><?php echo $unit->id_unit; ?></td>
                                    <td>
                                        <a class="tipW" original-title="<?php echo $unit->nama_program; ?>">
                                            <?php echo $unit->nama_kegiatan; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $unit->nama_subkegiatan; ?></td>
                                    <td><?php echo $unit->nama_unit; ?></td>
                                    <td width="30px"><?php echo $unit->volume; ?></td>
                                    <td width="60px"><?php echo strtoupper($unit->satuan); ?></td>
                                    <td width="100px"><span class="pull-right"><?php echo $unit->harga; ?></span></td>
                                    <td width="100px"><strong><span class="pull-right"><?php echo number_format($unit->volume * $unit->harga); ?></span></strong></td>
                                    <td width="80px"><span class="pull-right"><?php echo number_format($unit->triwulan1); ?></span></td>
                                    <td width="80px"><span class="pull-right"><?php echo number_format($unit->triwulan2); ?></span></td>
                                    <td width="80px"><span class="pull-right"><?php echo number_format($unit->triwulan3); ?></span></td>
                                    <td width="80px"><span class="pull-right"><?php echo number_format($unit->triwulan4); ?></span></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php endif ?>
        </div>
    </div>
    <?php $this->load->view('dashboard/global/footer'); ?>
</body>
</html>