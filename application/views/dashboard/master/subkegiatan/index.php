<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('dashboard/global/meta'); ?>
    <title>SIM BPMPPT - Prototype</title>
    <?php $this->load->view('dashboard/global/assets_header'); ?>
</head>
<body>
    <?php $this->load->view('dashboard/global/top'); ?>
    <?php $this->load->view('dashboard/master/subkegiatan/sidebar'); ?>

    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class="icon-link"></span>INPUT SUB KEGIATAN</span>
            <?php $this->load->view('dashboard/global/total_count'); ?>
            <div class="clear"></div>
        </div>

        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="<?php echo base_url('dashboard/index'); ?>">Dashboard</a></li>
                    <li><a href="<?php echo base_url('master/index'); ?>">Master DPA</a></li>
                    <li><a href="<?php echo base_url('master/subkegiatan/index'); ?>">Sub Kegiatan</a></li>
                </ul>
            </div>

            <div class="breadLinks">
            </div>
        </div>

        <div class="wrapper">
            <div class="widget">
                <div class="whead"><h6>List Sub Kegiatan</h6><div class="clear"></div></div>
                <div id="dyn" class="hiddenpars">
                    <a class="tOptions" title="Options"><img src="<?php echo base_url('assets/admin/images/icons/options'); ?>" alt="" /></a>
                    <table id="table_subkegiatan" class="dTable" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                            <tr>
                                <th width="250px">Kode Rekening<span class="sorting" style="display: block;"></span></th>
                                <th hidden>Program</th>
                                <th hidden>Kegiatan</th>
                                <th>Subkegiatan</th>
                                <th width="100px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($subkegiatans == false): ?>
                                <tr>
                                    <td colspan="4">
                                        <center>
                                            <strong>- data masih kosong -</strong>
                                        </center>
                                    </td>
                                    <td hidden>-</td>
                                    <td hidden>-</td>
                                    <td hidden>-</td>
                                    <td hidden>-</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($subkegiatans as $subkegiatan): ?>
                                    <tr>
                                        <td>
                                            <a class="ml10 tipW" original-title="<?php echo $subkegiatan->nama_program; ?><hr><?php echo $subkegiatan->nama_kegiatan; ?>">
                                                [ <?php echo $subkegiatan->kode_program; ?> ]
                                                [ <?php echo $subkegiatan->kode_kegiatan; ?> ]
                                                <?php echo $subkegiatan->kode_subkegiatan; ?>
                                            </a>
                                        </td>
                                        <td hidden><?php echo $subkegiatan->nama_program; ?></td>
                                        <td hidden><?php echo $subkegiatan->nama_kegiatan; ?></td>
                                        <td><?php echo $subkegiatan->nama_subkegiatan; ?></td>
                                        <td class="tableActs" align="center">
                                            <a href="javascript:void(0)" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon="&#xe1db;"></span></a>
                                            <a href="javascript:void(0)" class="tablectrl_small bDefault tipS" title="Hapus"><span class="iconb" data-icon="&#xe136;"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('dashboard/global/footer'); ?>
</body>
</html>