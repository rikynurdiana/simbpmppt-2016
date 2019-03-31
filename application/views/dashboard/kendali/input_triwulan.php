<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('dashboard/global/meta'); ?>
    <title>SIM BPMPPT - Prototype</title>
    <?php $this->load->view('dashboard/global/assets_header'); ?>
</head>
<body>
	<?php $this->load->view('dashboard/global/top'); ?>
	<?php $this->load->view('dashboard/kendali/sidebar_triwulan'); ?>

    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class="icon-link"></span>INPUT TRIWULAN</span>
            <?php $this->load->view('dashboard/global/total_count'); ?>
            <div class="clear"></div>
        </div>

        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="<?php echo base_url('/dashboard/index'); ?>">Dashboard</a></li>
                    <li><a href="<?php echo base_url('/kendali/index'); ?>">Kendali</a></li>
                    <li><a href="<?php echo base_url('/kendali/filter_subkegiatan'); ?>">Filter Sub Kegiatan</a></li>
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

            <?php if ($filter_unit == ''): ?>
                <div class="widget">
                    <div class="whead">
                        <h6>Data Belum Lengkap / Masih Kosong</h6>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php else: ?>
                <div class="widget">
                    <div class="whead">
                        <h6>RINCIAN UNIT KEGIATAN <?php echo strtoupper($filter_unit[0]->nama_kegiatan); ?></h6>
                        <span class="check-right">
                            <div class="formRow">
                                <div class="grid9 on_off">
                                    <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" /></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </span>
                        <div class="clear"></div>
                    </div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="tDefault">
                        <thead>
                            <tr>
                                <td hidden>ID UNIT</td>
                                <td>subkegiatan</td>
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
                            <?php foreach ($filter_unit as $unit): ?>
                                <tr id="<?php echo $unit->id_unit; ?>" class="edit_tr">
                                    <td hidden><?php echo $unit->id_unit; ?></td>
                                    <td><?php echo $unit->nama_subkegiatan; ?></td>
                                    <td><?php echo $unit->nama_unit; ?></td>
                                    <td width="30px"><?php echo $unit->volume; ?></td>
                                    <td width="60px"><?php echo strtoupper($unit->satuan); ?></td>
                                    <td width="100px"><span class="pull-right"><?php echo $unit->harga; ?></span></td>
                                    <td width="100px"><strong><span class="pull-right"><?php echo number_format($unit->volume * $unit->harga); ?></span></strong></td>
                                    <td class="edit_td" width="80px">
                                        <div class="formRow">
                                            <input id="tw1_input_<?php echo $unit->id_unit; ?>" name="triwulan1" type="text" class="editbox disabled" value="<?php echo $unit->triwulan1; ?>" disabled/>
                                        </div>
                                    </td>
                                    <td class="edit_td" width="80px">
                                        <div class="formRow">
                                            <input id="tw2_input_<?php echo $unit->id_unit; ?>" name="triwulan2" type="text" class="editbox disabled" value="<?php echo $unit->triwulan2; ?>" disabled/>
                                        </div>
                                    </td>
                                    <td class="edit_td" width="80px">
                                        <div class="formRow">
                                            <input id="tw3_input_<?php echo $unit->id_unit; ?>" name="triwulan3" type="text" class="editbox disabled" value="<?php echo $unit->triwulan3; ?>" disabled/>
                                        </div>
                                    </td>
                                    <td class="edit_td" width="80px">
                                        <div class="formRow">
                                            <input id="tw4_input_<?php echo $unit->id_unit; ?>" name="triwulan4" type="text" class="editbox disabled" value="<?php echo $unit->triwulan4; ?>" disabled/>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            <?php endif ?>

            <script type="text/javascript">
                $('#check21').change(function(){
                    if ($('#check21').is(':checked') == true){
                        $('.editbox').prop('disabled', false);
                        $(".editbox").removeClass("disabled");
                        console.log('checked');
                   } else {
                        $('.editbox').prop('disabled', true);
                        $(".editbox").addClass("disabled");
                        console.log('unchecked');
                   }
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $(".edit_tr").click(function() {
                        var ID=$(this).attr('id');
                        $("#tw1_input_"+ID).show();
                        $("#tw2_input_"+ID).show();
                        $("#tw3_input_"+ID).show();
                        $("#tw4_input_"+ID).show();
                    }).change(function() {
                        var ID=$(this).attr('id');
                        var tw1=$("#tw1_input_"+ID).val();
                        var tw2=$("#tw2_input_"+ID).val();
                        var tw3=$("#tw3_input_"+ID).val();
                        var tw4=$("#tw4_input_"+ID).val();
                        var dataString = 'id=' + ID + '&triwulan1=' + tw1 + '&triwulan2=' + tw2 + '&triwulan3=' + tw3 + '&triwulan4=' + tw4;

                        $.ajax({
                            type: "POST",
                            url: "/kendali/update",
                            data: dataString,
                            cache: true,
                            success: function(html) {
                                $("#tw1_"+ID).html(tw1);
                                $("#tw2_"+ID).html(tw2);
                                $("#tw3_"+ID).html(tw3);
                                $("#tw4_"+ID).html(tw4);
                            }
                        });
                    });

                    <?php /*
                    Edit input box click action
                    */ ?>
                    $(".editbox").mouseup(function() {
                        return false
                    });

                    <?php /*
                    Outside click action
                    */ ?>
                    $(document).mouseup(function() {
                        $(".editbox").show();
                        $(".text").show();
                    });
                });
            </script>

        </div>
    </div>
    <?php $this->load->view('dashboard/global/footer'); ?>
</body>
</html>