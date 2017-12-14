
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
| tags.php | 标签页面 | 新增 |
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

- 单独输出文章分类

``` PHP
<?php $this->widget('Widget_Metas_Category_List') ->parse('<li class="list-group-item"> <a href="{permalink}"> <span class="badge pull-right">{count}</span> {name} </a> </li>'); ?>
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

