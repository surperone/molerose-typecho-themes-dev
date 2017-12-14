
## 页面说明（预计需要使用的页面）

| 页面 | 页面说明 | 类型 |
| ---- | -------- | ---- |
| index.php | 首页 | 系统自带 |
| archive.php | 分类/搜索/作者/标签公用页面 | 系统自带 |
| post.php | 文章详细页 | 系统自带 |
| comments.php | 留言页面 | 系统自带 |
| page.php | 单一页面 | 系统自带 |
| 404.php | 404页面 | 系统自带 |
| footer.php | 脚部 | 系统自带 |
| header.php | 头部 | 系统自带 |
| sidebar.php | 侧边栏目 | 系统自带 |
| functions.php | 功能存放 | 系统自带 |
| avatars.php | 留言墙 | 新增 |
| links.php | 友情链接 | 新增 |
| file.php | 归档页面 | 新增 |

## 功能
| 功能 | 时间 |
| ---- | ---- |
| 留言板 | - |
| 友情链接 | - |
| 前台登录 | - |
| 留言同步邮箱 | - |

## 插件使用
| 名称 |
| ---- |
| Avatars （留言墙） |
| Links （友情链接）|
| CodeStyle （代码高亮） |
| CommentToMail （留言同步邮箱） |
| Sticky （文章置顶） |
| Thumbnail （文章缩略图） |


## 笔记

- 自定义留言样式

``` PHP
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">

    <div class="comment-txt-box" id="<?php $comments->theId(); ?>">
        <div class="comment-author clearfix">
            <?php $comments->gravatar('40', ''); ?>
            <cite class="fn comment-info-title"><?php $comments->author(); ?></cite>
            <a href="<?php $comments->permalink(); ?>" class="comment-meta" ><?php $comments->date('F jS, Y \a\t h:i a'); ?></a>
        </div>

        <?php $comments->content(); ?>

        <?php if ('waiting' == $comments->status) { ?>  
        <em class="awaiting"><?php $options->commentStatus(); ?></em>  
        <?php } ?>
        <!-- 评论审核，waiting 后全等的对象，对应 threadedComments 的第一，二个对象 -->
        <div class="comment-meta">
            <span class="comment-reply label bg-info"><?php $comments->reply(); ?></span>
        </div>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
        
    </div>
<?php } ?>
</li>
<?php } ?>


//$this 对应整个评论自定义函数(threadedComments)第一个变量，如这里是 $comments
<?php if ('waiting' == $this->status) { ?>  
//$singleCommentOptions 对应函数(threadedComments)的第二个变量，如这里是 $options
<em class="awaiting"><?php $singleCommentOptions->commentStatus(); ?></em>  
<?php } ?>

```

- 输出/嵌入页面

``` PHP
<?php $this->need('comments.php'); ?>
```

- 单独输出文章分类

``` PHP
<?php $this->widget('Widget_Metas_Category_List') ->parse('<li class="list-group-item"> <a href="{permalink}"> <span class="badge pull-right">{count}</span> {name} </a> </li>'); ?>
```

- 单独输出单页列表

``` PHP
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
  <li><a class="auto" <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><i class="fa fa-angle-right text-xs"></i><span><?php $pages->title(); ?></span></a></li>
<?php endwhile; ?>
```

- 单独输出文字内容

``` PHP
<?php _e('MoleRose'); ?>
```

- 文章上下翻页自定义

``` PHP
// 存放到 function.php 文件中的

/**
* 上一篇
*
* @access public
* @param string $default 如果没有上一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);

if ($content) {
$content = $widget->filter($content);
$link = '<li class="previous"> <a href="' . $content['permalink'] . '" title="' . $content['title'] . '" data-toggle="article-tooltip" data-placement="right"> 上一篇 </a></li>
';
echo $link;  // 自定义样式
} else {
$link = '<li class="previous disabled"><a href="javascript:;" data-toggle="article-tooltip" data-placement="right" title="没有了，亲！">上一篇</a></li>';
echo $link; // 自定义样式，没有链接时候的不可点击样式
}
}
 
/**
* 下一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
$link = '<li class="next"> <a href="' . $content['permalink'] . '" title="' . $content['title'] . '" data-toggle="article-tooltip" data-placement="left"> 下一篇 </a></li>';
echo $link; // 自定义样式
} else {
$link = '<li class="next disabled"><a href="javascript:;" data-toggle="article-tooltip" data-placement="left" title="没有了，亲！">下一篇</a></li>';
echo $link; // 自定义样式，没有链接时候的不可点击样式
}
}

// 输出语法
// 上一篇
<?php thePrev($this); ?> 
// 下一篇
<?php theNext($this); ?>

```

