<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php $this->options->charset(); ?>"> 
	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="/favico.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php $this->options->themeUrl('css/style.css'); ?>" rel="stylesheet">
	<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
	<?php $this->header(); ?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-padding">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="logo" class="navbar-brand" href="/"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
               <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Theme <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="/typecho">Typecho</a></li>
	                <li role="separator" class="divider"></li>
	                <li><a href="/wordpress">Wordpress</a></li>
	              </ul>
            </li>
			<?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
          </ul>
          	<form method="post" action="" class="navbar-form navbar-right" role="search">
			  <div class="form-group">
			    <input type="search" class="form-control" placeholder="Search" name="s">
			    <input type="submit" class="submit" hidden value="Search" />
			    <span class="search-icon glyphicon glyphicon-search" aria-hidden="true"></span>
			  </div>
			</form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	