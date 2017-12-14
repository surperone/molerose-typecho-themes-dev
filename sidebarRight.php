<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- SidebarRight -->
<div class="col-sm-3"> 
<h5 class="font-bold"><?php _e('热门文章'); ?></h5> 
<div> 
 <article class="media"> 
  <a class="pull-left thumb thumb-wrapper m-t-xs avatar"> <img src="/usr/themes/molerose/images/m1.jpg" /> </a> 
  <div class="media-body"> 
   <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a> 
   <div class="text-xs block m-t-xs">
    <a href="#">Travel</a> 2 minutes ago
   </div> 
  </div> 
 </article> 
 <div class="line"></div> 
 <article class="media m-t-none"> 
  <a class="pull-left thumb thumb-wrapper m-t-xs avatar"> <img src="/usr/themes/molerose/images/m2.jpg" /> </a> 
  <div class="media-body"> 
   <a href="#" class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> 
   <div class="text-xs block m-t-xs">
    <a href="#">Design</a> 2 hours ago
   </div> 
  </div> 
 </article> 
 <div class="line"></div> 
 <article class="media m-t-none"> 
  <a class="pull-left thumb thumb-wrapper m-t-xs avatar"> <img src="/usr/themes/molerose/images/m3.jpg" /> </a> 
  <div class="media-body"> 
   <a href="#" class="font-semibold">Sed diam nonummy nibh euismod tincidunt ut laoreet</a> 
   <div class="text-xs block m-t-xs">
    <a href="#">MFC</a> 1 week ago
   </div> 
  </div> 
 </article> 
</div>

<h5 class="font-bold"><?php _e('便捷分类'); ?></h5> 
<ul class="list-group"> 
   <?php $this->widget('Widget_Metas_Category_List')
                   ->parse('<li class="list-group-item"> <a href="{permalink}"> <span class="badge pull-right">{count}</span> {name} </a> </li>'); ?>
</ul> 

<h5 class="font-bold"><?php _e('热门标签'); ?></h5> 
<div class="tags m-b-lg l-h-2x"> 
 <a href="#" class="label bg-primary">Bootstrap</a> 
 <a href="#" class="label bg-primary">Application</a> 
 <a href="#" class="label bg-primary">Apple</a> 
 <a href="#" class="label bg-primary">Less</a> 
 <a href="#" class="label bg-primary">Theme</a> 
 <a href="#" class="label bg-primary">Wordpress</a> 
</div> 
</div> 
<!-- / SidebarRight -->