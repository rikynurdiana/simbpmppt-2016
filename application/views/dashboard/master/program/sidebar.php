<div id="sidebar">
    <div class="mainNav">
        <?php $this->load->view('dashboard/global/user_nav'); ?>
        <?php $this->load->view('dashboard/master/partial/main_menu'); ?>
    </div>

    <div class="secNav">
        <div class="secWrapper">
            <div class="secTop">
                <?php $this->load->view('dashboard/global/total_balance'); ?>
            </div>

            <div id="tab-container" class="tab-container">
                <ul class="iconsLine ic3 etabs">
                    <li><a href="#general" title=""><span class="icos-list"></span></a></li>
                    <li><a href="#alt1" title=""><span class="icos-add"></span></a></li>
                    <li><a href="#alt2" title=""><span class="icos-archive"></span></a></li>
                </ul>

                <div id="general">

                    <div class="divider"><span></span></div>

                    <ul class="subNav">
                        <li><a href="<?php echo base_url('master/index'); ?>" title="" ><span class="icos-list"></span>Master DPA</a></li>
                        <li><a href="<?php echo base_url('master/program'); ?>" class="this" title=""><span class="icos-list"></span>Program</a></li>
                        <li><a href="<?php echo base_url('master/kegiatan'); ?>" title=""><span class="icos-list"></span>Kegiatan</a></li>
                        <li><a href="<?php echo base_url('master/subkegiatan'); ?>" title=""><span class="icos-list"></span>Sub Kegiatan</a></li>
                        <li><a href="<?php echo base_url('master/unit'); ?>" title=""><span class="icos-list"></span>Unit Sub Kegiatan</a></li>
                    </ul>

                    <div class="divider"><span></span></div>

                    <div class="sideWidget">
                        <div class="inlinedate"></div>
                    </div>
                </div>

                <div id="alt1">
                    <div class="divider"><span></span></div>
                    <div class="sideWidget">
                        <form id="input-program" method="post" >
                            <div class="formRow searchDrop">
                                <label>Tipe Belanja :</label>
                                <select id="tipe" data-placeholder="Pilih Tipe Belanja" name="tipe" class="select" tabindex="2" required>
                                    <option value=""></option>
                                    <option value="1">Belanja Langsung </option>
                                    <option value="2">Belanja Tidak Langsung </option>
                                </select>
                            </div>

                            <div class="formRow">
                                <label>Kode Rekening Program :</label>
                                <input id="kode_program" type="text" name="kode_program" placeholder="Contoh : 1.2.3.4.5" required/>
                            </div>

                            <div class="formRow">
                               <label>Nama Program :</label>
                                <input id="nama_program" type="text" name="nama_program" placeholder="Contoh : Program Belanja Barang" required/>
                            </div>

                            <div class="formRow">
                                <input id="save_program" type="submit" class="buttonS bLightBlue" value="Simpan" />
                            </div>
                        </form>
                    </div>
                </div>

                <div id="alt2">

                </div>
            </div>

            <div class="divider"><span></span></div>

        </div>
        <div class="clear"></div>
    </div>
</div>