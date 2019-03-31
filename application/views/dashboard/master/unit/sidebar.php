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
                        <li><a href="<?php echo base_url('master/subkegiatan'); ?>" title=""><span class="icos-list"></span>Sub Kegiatan</a></li>
                        <li><a href="<?php echo base_url('master/unit'); ?>" class="this" title=""><span class="icos-list"></span>Unit Sub Kegiatan</a></li>
                    </ul>

                    <div class="divider"><span></span></div>

                    <div class="sideWidget">
                        <div class="inlinedate"></div>
                    </div>
                </div>

                <div id="alt1">
                    <div class="divider"><span></span></div>

                    <div class="sideWidget">
                        <form id="input-unit" method="post" >
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

                            <div class="formRow searchDrop">
                                <label>Sub Kegiatan :</label>
                                <?php if ($subkegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <select id="id_subkegiatan" name="id_subkegiatan" class="select" tabindex="2" data-placeholder="Pilih Sub Kegiatan" required>
                                        <option value=""></option>
                                        <?php foreach ($subkegiatans as $subkegiatan): ?>
                                            <option
                                                kode-program="<?php echo $subkegiatan->kode_program ;?>"
                                                nama-program="<?php echo $subkegiatan->nama_program ?>"
                                                id-kegiatan="<?php echo $subkegiatan->id_kegiatan ;?>"
                                                kode-kegiatan="<?php echo $subkegiatan->kode_kegiatan ;?>"
                                                nama-kegiatan="<?php echo $subkegiatan->nama_kegiatan ?>"
                                                kode-subkegiatan="<?php echo $subkegiatan->kode_subkegiatan ;?>"
                                                value="<?php echo $subkegiatan->id_subkegiatan ;?>">
                                                <?php echo $subkegiatan->nama_subkegiatan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <label>Nama Unit :</label>
                                <?php if ($subkegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="nama_unit" name="nama_unit" type="text" placeholder="Contoh : Belanja Barang" required="required" />
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                               <label>Volume :</label>
                                <?php if ($subkegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="volume" name="volume" type="text" placeholder="Contoh : 10" required/>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <label>Satuan :</label>
                                <?php if ($subkegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="satuan" name="satuan" type="text" placeholder="Contoh : Buah / Box / Pack" required/>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <label>Harga Satuan :</label>
                                <?php if ($subkegiatans == false): ?>
                                    <input type="text" placeholder="-" disabled/>
                                <?php else: ?>
                                    <input id="harga" name="harga" type="text" placeholder="Contoh : 1000" required/>
                                <?php endif ?>
                            </div>

                            <div class="formRow">
                                <?php if ($subkegiatans == false): ?>
                                    <input type="submit" class="buttonS bBlack  mb10" value="-" disabled />
                                <?php else: ?>
                                    <input id="save_unit" type="submit" class="buttonS bLightBlue" value="Simpan" />
                                <?php endif ?>
                            </div>

                            <div id="formRow-program" class="formRow" disabled style="display: none;">
                                <label>Program :</label>
                                <textarea rows="2" id="nama_program" name="nama_program" disabled style="display: none;"></textarea>

                                <label>Kegiatan :</label>
                                <textarea rows="2" id="nama_kegiatan" name="nama_kegiatan" disabled style="display: none;"></textarea>

                            </div>

                            <?php /*
                                FOR DEBUG ONLY
                                id_program<br>
                                <input type="text" id="id_program" name="id_program" ><br>
                                kode_program<br>
                                <input type="text" id="kode_program" name="kode_program" ><br>
                                kode_kegiatan<br>
                                <input type="text" id="kode_kegiatan" name="kode_kegiatan" ><br>
                                kode subkegiatan<br>
                                <input type="text" id="kode_subkegiatan" name="kode_subkegiatan" ><br>
                            */ ?>
                                <input type="text" id="id_program" name="id_program" hidden><br>
                                <input type="text" id="kode_program" name="kode_program" hidden><br>
                                <input type="text" id="kode_kegiatan" name="kode_kegiatan" hidden><br>
                                <input type="text" id="kode_subkegiatan" name="kode_subkegiatan" hidden><br>

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