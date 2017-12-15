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
            <font class="pull-right blog-page-tit"> <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></font>
            <i class="icon-umbrella icon blog-page-ico pull-right"></i>
          </ol>
           <?php while($this->next()): ?>
           <div class="post-item"> 
            <div class="post-media"> 
              <?php Thumbnail_Plugin::show($this); ?>
            </div> 
            <div class="caption wrapper-lg"> 
             <h4 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a></h4> 
             <div class="post-sum"> 
              <p><?php $this->excerpt(200, '...'); ?></p> 
             </div> 
             <div class="line"></div> 
             <div class="text-muted"> 
              <i class="fa fa-user icon-muted"></i> by 
              <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author" class="m-r-sm"><?php $this->author(); ?></a>
              <i class="fa fa-clock-o icon-muted"></i> <font datetime="<?php $this->date('c'); ?>" itemprop="datePublished"> <?php $this->date('Y-m-d H:i a'); ?> </font>
              <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> <?php $this->commentsNum('comments', '1 comments', '%d comments'); ?></a> 
             </div> 
            </div> 
           </div> <!-- /.post-item -->
           <?php endwhile; ?> 
          </div> 
          <div class="text-center"> 
           <?php $this->pageNav('«', '»', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination pagination-sm', 'itemTag' => 'li', 'textTag' => 'a', 'currentClass' => 'active', 'prevClass' => '', 'nextClass' => '')); ?> 
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