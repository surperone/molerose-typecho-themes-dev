<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 秒转时间，格式 年 月 日 时 分 秒
 * @param int $time
 * @return array|boolean
 */
// 设置时区 
date_default_timezone_set('Asia/Shanghai');
function Sec2Time($time){
    if(is_numeric($time)){
        $value = array(
                "years" => 0, "days" => 0, "hours" => 0,
                "minutes" => 0, "seconds" => 0,
        );
        if($time >= 31556926){
            $value["years"] = floor($time/31556926);
            $time = ($time%31556926);
        }
        if($time >= 86400){
            $value["days"] = floor($time/86400);
            $time = ($time%86400);
        }
        if($time >= 3600){
            $value["hours"] = floor($time/3600);
            $time = ($time%3600);
        }
        if($time >= 60){
            $value["minutes"] = floor($time/60);
            $time = ($time%60);
        }
        $value["seconds"] = floor($time);
        return (array) $value;
    }else{
        return (bool) FALSE;
    }
}
$site_create_time = strtotime('2017-11-13 00:00:00');
$time = time() - $site_create_time;
$uptime = Sec2Time($time);
?>
<footer class="scrollable wrapper blog-footer">
   &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> <span class="pull-right label bg-light"><?php echo $uptime['years']; ?>年<?php echo $uptime['days']; ?>天</span>
</footer>