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
                        <li><a href="<?php echo base_url('master/program'); ?>" title=""><span class="icos-list"></span>Program</a></li>
                        <li><a href="<?php echo base_url('master/kegiatan'); ?>" class="this" title=""><span class="icos-list"></span>Kegiatan</a></li>
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
                        <form method="post" name="input-kegiatan" id="input-kegiatan">
                            <div class="formRow searchDrop">
                                <label>Nama Bidang :</label>
                                <?php if ($programs == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <select id="id_bidang" name="id_bidang" class="select" tabindex="2" data-placeholder="-Pilih Bidang-" required>
                                        <option value=""></option>
                                        <option value="1">Sekretariat </option>
                                        <option value="2">Penanaman Modal </option>
                                        <option value="3">Pelayanan Perizinan </option>
                                        <option value="4">Sistem Informasi & Pengaduan </option>
                                    </select>
                                <?php endif ?>

                                <label>Program :</label>
                                <?php if ($programs == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <select id="id_program" name="id_program" class="select" tabindex="2" data-placeholder="Pilih Program" required>
                                        <option value=""></option>
                                        <?php foreach ($programs as $program): ?>
                                            <option
                                                kode-program="<?php echo $program->kode_program ;?>"
                                                value="<?php echo $program->id_program ;?>">
                                                <?php echo $program->nama_program ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <label>Kode Rekening Kegiatan :</label>
                                <?php if ($programs == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="kode_kegiatan" type="text" name="kode_kegiatan" placeholder="Contoh : 1.2.3.4.5" required/>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <label>Nama Kegiatan :</label>
                                <?php if ($programs == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="nama_kegiatan" name="nama_kegiatan" type="text" placeholder="Contoh : Kegiatan Belanja Barang" required />
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <?php if ($programs == false): ?>
                                    <input type="submit" class="buttonS bBlack  mb10" value="-" disabled />
                                <?php else: ?>
                                    <input id="save_kegiatan" type="submit" class="buttonS bLightBlue" value="Simpan" />
                                <?php endif ?>
                            </div>

                            <input type="text" id="kode_program" name="kode_program" hidden>
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