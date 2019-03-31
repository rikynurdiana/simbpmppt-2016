<div id="sidebar">
    <div class="mainNav">
        <?php $this->load->view('dashboard/global/user_nav'); ?>
        <?php $this->load->view('dashboard/pencairan/partial/main_menu'); ?>
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

                <div class="divider"><span></span></div>

                <div id="general">
                </div>

                <div id="alt1">
                </div>

                <div id="alt2">
                </div>
            </div>

            <div class="divider"><span></span></div>

            <div class="sideWidget">
                <div class="inlinedate"></div>
            </div>

            <div class="divider"><span></span></div>
        </div>
        <div class="clear"></div>
    </div>
</div>