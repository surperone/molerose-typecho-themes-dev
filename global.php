<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php
$site_create_time = strtotime('2017-11-13 00:00:00');
$time = time() - $site_create_time;
$uptime = Sec2Time($time);
?>
<footer class="scrollable wrapper blog-footer">
   &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> <span class="pull-right label bg-light"><?php echo $uptime['years']; ?>年<?php echo $uptime['days']; ?>天</span>
</footer>