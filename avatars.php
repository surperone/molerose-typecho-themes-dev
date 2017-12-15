<?php
/**
 * 留言墙
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
             <ul class="clearfix blog-links-box">
              <?php Avatars_Plugin::output("li","mostactive"); ?>
             </ul>
           </div> 
          </div> 
           <?php $this->need('comments.php'); ?> 
         </div>
          <?php $this->need('sidebarRight.php'); ?>      
        </div> 
       </section> 
       <?php $this->need('global.php'); ?>
      </section> 
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
     </section> 
<?php $this->need('footer.php'); ?>