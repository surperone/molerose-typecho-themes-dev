<?php
/**
 * 归档页面
 * 
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <?php $this->need('sidebar.php'); ?>

     <!-- /.aside --> 
     <section id="content" class="blog-box"> 
      <section class="vbox"> 
       <section class="scrollable wrapper"> 
        <div class="row"> 
         <div class="col-sm-9"> 
          <div class="blog-post"> 

          <ol class="breadcrumb">
            <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php if ($this->is('index')): ?>
            <?php elseif ($this->is('post')): ?>
            <li><?php $this->category(); ?></li>
            <li class="active"><?php $this->title() ?></li>
            <?php else: ?>
              <li><?php $this->archiveTitle(' &raquo; ','',''); ?></li>
            <?php endif; ?>

            <font class="pull-right blog-page-tit"> <?php $this->title() ?></font>
            <i class="icon-umbrella icon blog-page-ico pull-right"></i>
          </ol>

           <div class="post-item"> 

              <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                    $year=0; $mon=0; $i=0; $j=0;
                    $output = '<div id="archives" class="caption wrapper-lg blog-file-box"><dl class="clearfix">';
                    while($archives->next()):
                        $year_tmp = date('Y',$archives->created);
                        $mon_tmp = date('m',$archives->created);
                        $y=$year; $m=$mon;
                        // if ($mon != $mon_tmp && $mon > 0) $output .= '';
                        // if ($year != $year_tmp && $year > 0) $output .= '';
                        if ($year != $year_tmp) {
                            $year = $year_tmp;
                            $output .= '<h3>'. $year .' 年</h3>'; //输出年份
                        }
                        if ($mon != $mon_tmp) {
                            $mon = $mon_tmp;
                            $output .= '<dt><small class="label bg-light">'. $mon .' 月</small></dt>'; //输出月份
                        }
                        $output .= '<dd class="col-md-6 col-sm-12 col-xs-12"><a href="'. $archives->permalink .'" title="'. $archives->title .'">'. $archives->title .'<div><small><i class="icon-heart icon"></i>'.date('于d日发布，',$archives->created).'共'. $archives->commentsNum.'条评论</small></div></a></dd>'; //输出文章日期和标题
                    endwhile;
                    $output .= '</dl></div>';
                    echo $output;
                ?>

           </div> 
          </div> 

         </div> 
         
         <?php $this->need('sidebarRight.php'); ?> 

        </div> 
       </section> 
       <?php $this->need('global.php'); ?>
      </section> 
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
     </section> 
<?php $this->need('footer.php'); ?>