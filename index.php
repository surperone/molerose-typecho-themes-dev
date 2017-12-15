 <?php
/**
 * MoleRose 更新版本
 * 
 * @package Molerose
 * @author Simon.Xiong
 * @version 0.1
 * @link http://molerose.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php $this->need('sidebar.php'); ?>
      
     <section id="content" class="blog-box"> 
      <section class="vbox"> 
       <section class="scrollable wrapper"> 
        <div class="row"> 
         <div class="col-sm-9"> 
          <div class="blog-post">
          <?php while($this->next()): ?>
           <div class="post-item"> 
            <div class="post-media"> 
              <?php Thumbnail_Plugin::show($this); ?>
            </div> 
            <div class="caption wrapper-lg"> 
             <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a></h2> 
             <div class="post-sum"> 
              <p><?php $this->excerpt(200, '...'); ?></p> 
             </div> 
             <div class="line line-lg"></div> 
             <div class="text-muted blog-item-info"> 
              <i class="fa fa-user icon-muted"></i> by 
              <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author" class="m-r-sm"><?php $this->author(); ?></a>
              <i class="fa fa-clock-o icon-muted"></i> <font datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> <?php $this->date('Y-m-d H:i a'); ?> </font>
              <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> <?php $this->commentsNum('comments', '1 comments', '%d comments'); ?></a> 
             </div> 
            </div> 
           </div> <!-- /.post-item -->
           <?php endwhile; ?>
            
          </div> <!-- /.blog-post -->
          <div class="text-center"> 
           <?php $this->pageNav('«', '»', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination pagination-sm', 'itemTag' => 'li', 'textTag' => 'a', 'currentClass' => 'active', 'prevClass' => '', 'nextClass' => '')); ?> 
          </div> 
         </div> <!-- /.col-sm-9 -->

         <?php $this->need('sidebarRight.php'); ?>

        </div> <!-- /.row -->
       </section> <!-- /.wrapper -->
       <?php $this->need('global.php'); ?>
      </section> 
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
     </section> <!-- /#content -->

<?php $this->need('footer.php'); ?>

