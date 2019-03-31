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
                        <li><a href="<?php echo base_url('master/kegiatan'); ?>" title=""><span class="icos-list"></span>Kegiatan</a></li>
                        <li><a href="<?php echo base_url('master/subkegiatan'); ?>" class="this" title=""><span class="icos-list"></span>Sub Kegiatan</a></li>
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
                        <form id="input-subkegiatan" method="post" >
                            <div id="formRow" class="formRow" disabled style="display: none;">
                                <label>Program : :</label>
                                <textarea id="nama_program" name="nama_program" style="display: none;" rows="3" disabled ></textarea>

                                <div class="divider"><span></span></div>
                            </div>

                            <div class="formRow searchDrop">
                                <label>Kegiatan :</label>
                                <?php if ($kegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <select id="id_kegiatan" name="id_kegiatan" class="select" data-placeholder="Pilih Kegiatan" tabindex="2" required>
                                        <option value=""></option>
                                        <?php foreach ($kegiatans as $kegiatan): ?>
                                            <option nama-program="<?php echo $kegiatan->nama_program ?>"
                                                    kode-program="<?php echo $kegiatan->kode_program ?>"
                                                    kode-kegiatan="<?php echo $kegiatan->kode_kegiatan ?>"
                                                    id-program="<?php echo $kegiatan->id_program ;?>"
                                                    value="<?php echo $kegiatan->id_kegiatan ;?>">
                                                    <?php echo $kegiatan->nama_kegiatan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <label>Kode Rekening Sub Kegiatan :</label>
                                <?php if ($kegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="kode_subkegiatan" name="kode_subkegiatan" type="text" placeholder="Contoh : 1.2.3.4.5" required/>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                               <label>Nama Sub Kegiatan :</label>
                               <?php if ($kegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                               <?php else: ?>
                                    <input id="nama_subkegiatan" name="nama_subkegiatan" type="text" placeholder="Contoh : Belanja Barang" required/>
                               <?php endif ?>
                            </div>

                            <div class="formRow">
                                <?php if ($kegiatans == false): ?>
                                    <input type="submit" class="buttonS bBlack  mb10" value="-" disabled />
                                <?php else: ?>
                                    <input id="save_subkegiatan" class="buttonS bLightBlue" type="submit" value="Simpan" />
                                <?php endif ?>
                            </div>

                            <input type="text" id="kode_program" name="kode_program" hidden>
                            <input type="text" id="kode_kegiatan" name="kode_kegiatan" hidden>
                            <input type="text" id="id_program" name="id_program" hidden>
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