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
              <li><?php $this->archiveTitle(' &raquo; ','',''); ?></li>
            <?php endif; ?>

            <font class="pull-right blog-page-tit"> <?php $this->title() ?></font>
            <i class="icon-umbrella icon blog-page-ico pull-right"></i>
          </ol>

         <section class="panel ">

                        <div class="panel-body">

                          <a href="#" class="thumb pull-right m-l m-t-xs avatar">

                            <img src="<?php $this->options->logoUrl() ?>" alt="...">

                            <i class="on md b-white bottom"></i>

                          </a>

                          <div class="clear">

                            <a href="#" class="text-info">Molerose <i class="icon-twitter"></i></a>

                            <small class="block text-muted">
                            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                        article <?php $stat->publishedPostsNum() ?> / sort <?php $stat->categoriesNum() ?> / comment <?php $stat->publishedCommentsNum() ?> / pages <?php $stat->publishedPagesNum() ?>
                            </small>

                            <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>

                          </div>

                        </div>

            </section>

           <div class="post-item"> 
            
            <div class="caption wrapper-lg">
             <div class="post-sum"> 
              <?php $this->content(); ?>
             </div> 
            </div> 
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