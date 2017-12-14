<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php $this->need('sidebar.php'); ?>

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
              <?php $this->archiveTitle(' &raquo; ','',''); ?>
            <?php endif; ?>

            <font class="pull-right blog-page-tit"> <?php $this->category(','); ?></font>
            <i class="icon-umbrella icon blog-page-ico pull-right"></i>
          </ol>

           <div class="post-item"> 
            <div class="post-media"> 
              <?php Thumbnail_Plugin::show($this); ?>
            </div> 
            <div class="caption wrapper-lg"> 
             <h2 class="post-title"><?php $this->title() ?></h2> 
             <div class="post-sum"> 
              <?php $this->content(); ?>
             </div> 
             <div class="line line-lg"></div> 
             <div class="text-muted"> 
              <i class="fa fa-clock-o icon-muted"></i> 最后修改：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
             </div> 
             <div class="blog-appreciate text-center">
              <a href="#" class="btn btn-s-md btn-danger" data-toggle="modal" data-target="#m-appreciate"><i class="fa fa-heart"></i> 赞赏支持</a>
             </div>
             <?php $this->need('pay.php'); ?>
            </div> 
           </div> 
            
          </div> 
          <!-- ARC Pages -->
          <div class="text-center m-t-lg m-b-lg">
          <ul class="pager">
            <!-- Post Page -->
            <?php thePrev($this); ?>
            <?php theNext($this); ?>
          </ul>
          </div> 
          <!-- ARC Pages -->

          <?php $this->need('comments.php'); ?>

         </div> 
          
        <?php $this->need('sidebarRight.php'); ?>
        </div> 
       </section> 
       <footer class="scrollable wrapper blog-footer">
        &copy; 2017 MoleRose .
        </footer>
      </section> 
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 
     </section> 

<?php $this->need('footer.php'); ?>