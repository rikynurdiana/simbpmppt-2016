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
	<?php $this->load->view('dashboard/master/sidebar'); ?>

    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class="icon-link"></span>MASTER DPA</span>
            <?php $this->load->view('dashboard/global/total_count'); ?>
            <div class="clear"></div>
        </div>

        <!-- Breadcrumbs line -->
        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="<?php echo base_url('/dashboard/index'); ?>">Dashboard</a></li>
                    <li><a href="<?php echo base_url('/master/index'); ?>">Master DPA</a></li>
                    <li><a href="<?php echo base_url('/master/filter_subkegiatan'); ?>">Filter Kegiatan</a></li>
                </ul>
            </div>

            <div class="breadLinks">

            </div>
        </div>

        <!-- Main content -->
        <div class="wrapper">
            <fieldset>
                <div class="fluid">
                    <?php if ($programs == false): ?>
                    <?php else: ?>
                        <div class="widget grid6">
                            <div class="whead"><h6>Filter Program</h6><div class="clear"></div></div>
                            <div class="body">
                                <div class="formRow ">
                                    <form action="<?php echo base_url('/master/filter_program');?>" method="post">
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
                        <div class="widget grid6">
                            <div class="whead"><h6>Filter Kegiatan</h6><div class="clear"></div></div>
                            <div class="body">
                                <div class="formRow">
                                    <form action="<?php echo base_url('/master/filter_kegiatan');?>" method="post">
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
                </div>
            <fieldset>

            <div class="divider"><span></span></div>

            <?php if ($filters == ''): ?>
                <div class="widget">
                    <div class="whead">
                        <h6>Data Belum Lengkap / Masih Kosong</h6>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php else: ?>
                <div class="widget">
                    <div class="whead">
                        <h6> KEGIATAN <?php echo strtoupper($filters[0]->nama_kegiatan); ?></h6>
                        <span class="whead-right">Total : Rp. <?php echo number_format($total_harga_kegiatan->harga * $total_volume_kegiatan->volume); ?></span>
                        <div class="clear"></div>
                    </div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
                        <thead>
                            <tr>
                                <td width="250px">Kode Rekening<span class="sorting" style="display: block;"></span></td>
                                <td>Sub Kegiatan</td>
                                <td>Total</td>
                                <td width="100px"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($filters == ''): ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($filters as $filter): ?>
                                    <tr>
                                        <td>[ <?php echo $filter->kode_program; ?> ] [ <?php echo $filter->kode_kegiatan; ?> ] [ <?php echo $filter->kode_subkegiatan; ?> ]</td>
                                        <td><?php echo $filter->nama_subkegiatan; ?></td>
                                        <td>Rp.<span class="pull-right"><?php echo number_format($filter->total); ?></span></td>
                                        <td class="tableActs" align="center">
                                            <a href="javascript:void(0)" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon="&#xe1db;"></span></a>
                                            <a href="javascript:void(0)" class="tablectrl_small bDefault tipS" title="Remove"><span class="iconb" data-icon="&#xe136;"></span></a>
                                        </td>
                                  </tr>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            <?php endif ?>

            <div class="divider"><span></span></div>

            <?php if ($filter_unit == ''): ?>
                <div class="widget">
                    <div class="whead">
                        <h6>Data Belum Lengkap / Masih Kosong</h6>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php else: ?>
                <div class="widget">
                    <div class="whead"><h6> RINCIAN UNIT KEGIATAN <?php echo strtoupper($filters[0]->nama_kegiatan); ?></h6><div class="clear"></div></div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
                        <thead>
                            <tr>
                                <td hidden>ID UNIT</td>
                                <td>Sub Kegiatan</td>
                                <td>Unit</td>
                                <td>Volume</td>
                                <td>Satuan</td>
                                <td>Harga</td>
                                <td>Total</td>
                                <td hidden>Triwulan 1</td>
                                <td hidden>Triwulan 2</td>
                                <td hidden>Triwulan 3</td>
                                <td hidden>Triwulan 4</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filter_unit as $unit): ?>
                                <tr>
                                    <td hidden><?php echo $unit->id_unit; ?></td>
                                    <td><?php echo $unit->nama_subkegiatan; ?></td>
                                    <td><?php echo $unit->nama_unit; ?></td>
                                    <td width="30px"><?php echo $unit->volume; ?></td>
                                    <td width="60px"><?php echo strtoupper($unit->satuan); ?></td>
                                    <td width="100px"><span class="pull-right"><?php echo $unit->harga; ?></span></td>
                                    <td width="100px"><strong><span class="pull-right"><?php echo number_format($unit->volume * $unit->harga); ?></span></strong></td>
                                    <td width="80px" hidden><span class="pull-right"><?php echo number_format($unit->triwulan1); ?></span></td>
                                    <td width="80px" hidden><span class="pull-right"><?php echo number_format($unit->triwulan2); ?></span></td>
                                    <td width="80px" hidden><span class="pull-right"><?php echo number_format($unit->triwulan3); ?></span></td>
                                    <td width="80px" hidden><span class="pull-right"><?php echo number_format($unit->triwulan4); ?></span></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php endif ?>

        </div>
    </div>
	<!-- END KONTEN -->
    <?php $this->load->view('dashboard/global/footer'); ?>
</body>
</html>