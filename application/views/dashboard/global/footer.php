<footer>
    <div class="footer-right">
        <?php echo  (ENVIRONMENT === 'development') ?  'Framework Version <strong>' . CI_VERSION . '</strong>' : '' ?> |
        Page Rendered in <strong> {elapsed_time}</strong> seconds. |
        Memory Usage <strong> <?php echo $this->benchmark->memory_usage();?></strong> |
        Develop By RN-16-<?php echo CI_VERSION; ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
</footer>