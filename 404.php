<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en" class="app">
 <head> 
  <meta charset="<?php $this->options->charset(); ?>">
  <title><?php $this->options->title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/simple-line-icons.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.css'); ?>">  
  <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header(); ?>
</head>
<body class="bg-light dk">
    <section id="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig">404</h1>
        </div>
         <div class="list-group auto m-b-sm m-b-lg">
          <a href="<?php $this->options->siteUrl(); ?>" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> 你可以点击我，再回到首页
          </a>
          <a href="" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-user icon-muted"></i> 当然，如果首页你看过了，你可以尝试着多了解我以一些
          </a>
          <a href="mailto:admin@molerose.com" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge bg-info lt">admin@molerose.com</span>
            <i class="fa fa-fw  fa-envelope icon-muted"></i> 如果你很着急，想和我说说话，我不介意与你有邮件来往
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>MoleRose Themes Service<br>&copy; <?php echo date('Y'); ?></small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
</body>
</html>