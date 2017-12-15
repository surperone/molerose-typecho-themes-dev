<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en" class="app">
 <head> 
  <meta charset="<?php $this->options->charset(); ?>">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/OwO.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/simple-line-icons.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.css'); ?>">
  
  <script src="<?php $this->options->themeUrl('js/OwO.min.js'); ?>"></script>

  <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header(); ?>

 </head> 
 <body class="container"> 
  <section class="vbox"> 
   <header class="bg-white-only header header-md navbar navbar-fixed-top-xs"> 
   	<!-- Logo -->
    <div class="navbar-header aside bg-success"> 
     <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="icon-list"></i> </a> 
     <a href="<?php $this->options->siteUrl(); ?>" class="navbar-brand text-lt"> <i class="fa fa-pagelines"></i> <span class="hidden-nav-xs m-l-sm">MoleRose</span> </a> 
    </div> 
    <!-- /Logo -->
    <!-- Mobile btn -->
    <ul class="nav navbar-nav hidden-xs"> 
     <li> <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted"> <i class="fa fa-indent text"></i> <i class="fa fa-dedent text-active"></i> </a> </li> 
    </ul> 
     <!-- /Mobile btn -->
    <!-- Search -->
    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search"> 
     <div class="form-group"> 
      <div class="input-group"> 
       <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button> </span> 
       <input type="text" id="s" name="s" class="form-control input-sm no-border rounded" placeholder="<?php _e('输入关键字搜索'); ?>" /> 
      </div> 
     </div> 
    </form> 
    <!-- /Search -->
    <div class="navbar-right "> 
	<!-- Begin -->
     <ul class="nav navbar-nav m-n hidden-xs"> 
     <!-- SuiuiNian -->
      <li class="hidden-xs"> <a href="#" class="dropdown-toggle lt" data-toggle="dropdown"> <i class="icon-bell"></i></a> 
       <section class="dropdown-menu aside-xl animated fadeInUp"> 
        <section class="panel bg-white"> 
         <div class="panel-heading b-light bg-light"> 
          <strong><?php _e('朋友们的碎碎念'); ?></strong> 
          <a href="#" class="pull-right" title="查看更多"><i class="fa fa-share"></i></a> 
         </div> 
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
        <?php while($comments->next()): ?>
            <div class="list-group list-group-alt"> 
              <a href="<?php $comments->permalink(); ?>" class="media list-group-item"> 
              <span class="pull-left thumb-sm"> <?php $comments->gravatar('40', ''); ?> </span> 
              <span class="media-body block m-b-none"><?php $comments->author(false); ?><br /> 
                <small class="text-muted"><?php $comments->excerpt(50, '...'); ?></small> 
              </span> 
              </a> 
             </div> 
        <?php endwhile; ?>

        </section> 
       </section> 
       </li> 
       <!-- / SuiuiNian -->
       <!-- Login -->
       <li class="hidden-xs"> <a href="#" data-toggle="dropdown" class="dropdown-toggle lt"> <i class="icon-user"></i> </a> 
       <section class="dropdown-menu aside animated fadeInUp panel-body bg-white dropdown-stop"> 
          <form role="form" action="<?php $this->options->loginaction(); ?>" method="post">
            <div class="form-group">
              <label>用户名</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="请输入用户名" required>
            </div>
            <div class="form-group">
              <label>密码</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="请输入密码" required>
            </div>
            <button type="submit" class="btn btn-group-justified btn-success">提交登录</button>
            <input type="hidden" name="referer" value="<?php $this->options->adminUrl(); ?>">
          </form>
       </section> 
       </li>
       <!-- / Login -->
     </ul> 
     <!-- / End -->
    </div> 
    <!-- / .navbar-right -->
   </header> 
   <!-- / .header End -->
   <section> 
    <section class="hbox stretch">