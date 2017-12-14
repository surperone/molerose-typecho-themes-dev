<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- SidebarRight -->
<div class="col-sm-3"> 
<h5 class="font-bold"><?php _e('热门文章'); ?></h5> 

<div> 

<?php TePostViews_Plugin::outputHotPosts($this) ?>

</div>

<h5 class="font-bold"><?php _e('便捷分类'); ?></h5> 
<ul class="list-group"> 
   <?php $this->widget('Widget_Metas_Category_List')
                   ->parse('<li class="list-group-item"> <a href="{permalink}"> <span class="badge pull-right">{count}</span> {name} </a> </li>'); ?>
</ul> 

<h5 class="font-bold"><?php _e('热门标签'); ?></h5> 
<div class="tags m-b-lg l-h-2x"> 
<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=28')->to($tags); ?>
<?php while($tags->next()): ?>
<a href="<?php $tags->permalink(); ?>" class="label bg-primary"><?php $tags->name(); ?></a>
<?php endwhile; ?>

</div> 
</div> 
<!-- / SidebarRight -->