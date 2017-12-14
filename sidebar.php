<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
     <!-- .aside --> 
     <aside class="bg-dark aside hidden-print" id="nav"> 
      <section class="vbox"> 
       <section class="w-f-md scrollable"> 
        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railopacity="0.2"> 
         <!-- nav --> 
         <nav class="nav-primary hidden-xs"> 
          <ul class="nav" data-ride="collapse"> 
           <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> <?php _e('Navigation'); ?> </li> 
           <li> <a href="<?php $this->options->siteUrl(); ?>" class="auto"> <span class="pull-right text-muted"> </span> <i class="icon-emoticon-smile icon"> </i> <span>Home Pages</span> </a> 
            </li> 
            <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> <?php _e('Composition'); ?> </li> 
           <li> <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-ghost icon"> </i> <span> <?php _e('MoleRose'); ?> </span> </a> 
            <ul class="nav dk text-sm"> 
              <?php $this->widget('Widget_Metas_Category_List')
                   ->parse('<li><a href="{permalink}" class="auto"> <b class="badge bg-info pull-right">{count}</b> <i class="fa fa-angle-right text-xs"></i> <span>{name}</span> </a> </li>'); ?>
            </ul> </li> 
           <li> <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-down text-active"></i> </span> <i class="icon-cup icon"> </i> <span> <?php _e('Pages'); ?> </span> </a> 
            <ul class="nav dk text-sm"> 
                  <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                      <li><a class="auto" <?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><i class="fa fa-angle-right text-xs"></i><span><?php $pages->title(); ?></span></a></li>
                    <?php endwhile; ?>
            </ul> </li> 
          </ul> 
         </nav> 
         <!-- / nav --> 
        </div> 
       </section> 
       <footer class="footer hidden-xs no-padder text-center-nav-xs"> 
        <div class="bg hidden-xs "> 
         <div class="dropdown dropup wrapper-sm clearfix"> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left m-l-xs"> <img src="/usr/themes/molerose/images/400-400.jpg" class="dker" alt="..." /> </span> <span class="hidden-nav-xs clear"> <span class="block m-l"> <strong class="font-bold text-lt">MolrRose</strong> <b class="caret"></b> </span> <span class="text-muted text-xs block m-l">Web Developer</span> </span> </a> 
          <ul class="dropdown-menu animated fadeInRight aside text-left"> 
           <li> <span class="arrow bottom hidden-nav-xs"></span> <a href="mailto:admin@molerose.com">电子邮箱 <i class="fa fa-envelope pull-right"></i></a></li> 
           <li> <a href="https://github.com/amplest">Github <i class="fa fa-github-alt pull-right"></i></a></li> 
           <li> <a href="http://weibo.com/xiongxingjiayou">新浪微博 <i class="fa fa-weibo pull-right"></i></a> </li> 
           <li> <a href="#"> 吾家小店 <i class="fa fa-shopping-cart pull-right"></i></a> </li> 
           <li> <a href="https://github.com/amplest/molerose-typecho-themes-dev">开发文档 <i class="fa fa-book pull-right"></i></a> </li> 
           <li class="divider"></li> 
           <li><p class="text-center">生命就一次，为何不开心点</p></li> 
          </ul> 
         </div> 
        </div> 
       </footer> 
      </section> 
     </aside> 
     <!-- /.aside -->