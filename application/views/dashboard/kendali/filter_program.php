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
            <span class="pageTitle"><span class="icon-link"></span>KENDALI</span>
            <?php $this->load->view('dashboard/global/total_count'); ?>
            <div class="clear"></div>
        </div>

        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="<?php echo base_url('/dashboard/index'); ?>">Dashboard</a></li>
                    <li><a href="<?php echo base_url('/kendali/index'); ?>">Kendali</a></li>
                    <li><a href="<?php echo base_url('/kendali/filter_kegiatan'); ?>">Filter Program</a></li>
                </ul>
            </div>

            <div class="breadLinks">

            </div>
        </div>

        <div class="wrapper">
            <fieldset>
                <div class="fluid">
                    <?php if ($programs == false): ?>
                    <?php else: ?>
                        <div class="widget grid4">
                            <div class="whead"><h6>Filter Program</h6><div class="clear"></div></div>
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
                            <div class="whead"><h6>Filter Kegiatan</h6><div class="clear"></div></div>
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
                            <div class="whead"><h6>INPUT TRIWULAN PERKEGIATAN</h6><div class="clear"></div></div>
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
                        <h6><?php echo strtoupper($filters[0]->nama_program); ?></h6>
                        <span class="whead-right">Total : Rp. <?php echo number_format($total_harga_program->harga * $total_volume_program->volume); ?></span>
                        <div class="clear"></div>
                    </div>

                    <div id="dyn" class="hiddenpars">
                        <a class="tOptions" title="Options"><img src="<?php echo base_url('assets/admin/images/icons/options'); ?>" alt="" /></a>
                        <table cellpadding="0" cellspacing="0" border="0" class="dTable" id="dynamic">
                            <thead>
                                <tr>
                                    <th width="250px">Kode Rekening<span class="sorting" style="display: block;"></span></th>
                                    <th>Kegiatan</th>
                                    <th>Total</th>
                                    <th width="100px"></th>
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
                                            <td>[ <?php echo $filter->kode_program; ?> ] [ <?php echo $filter->kode_kegiatan; ?> ]</td>
                                            <td><?php echo $filter->nama_kegiatan; ?></td>
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
                </div>
            <?php endif ?>
        </div>
    </div>
    <?php $this->load->view('dashboard/global/footer'); ?>
</body>
</html>