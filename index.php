<?php
/**
 * 主题站！
 * 
 * @package Goeme Theme
 * @author Axhello
 * @version 1.0
 * @link http://ciyuanai.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>

	<div id="content-wrapd">
		<header class="jumbotron main-header">
				<div class="container">
					<div class="middle">
						<h2 class="page-title">好了么</h2>
						<h4 class="page-desc">#只做优质主题的搬运工</h4>
					</div>
				</div>
		</header>
		<div class="container">
			<div class="row fixtop">
			<?php while($this->next()): ?>
	           	<div class="col-xs-12 col-sm-4">
	                <article class="post flipInY animated">
	                    <h2 class="post-title">
	                        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
	                    </h2>
	                    <a href="<?php if (isset($this->fields->demo)): ?><?php $this->fields->demo(); ?><?php endif; ?>" class="preview btn btn-success"  target="_blank">预览</a>
<?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
    $img = $matches[2][0];
echo <<<Html
     <div class="post-featured-image">
      <a class="thumbnail loaded" href="{$this->permalink}" title="{$this->title}">
       <img src="{$img}" style="width:531px; height:232px;" alt="{$this->title}">
      </a>
     </div>

Html;
}else if($imgCount <= 0){
    $img = $matches[2];
echo <<<EOF
     <div class="post-featured-image">
      <a class="thumbnail loaded" href="{$this->permalink}" title="{$this->title}">
       <img src="http://image.youzhan.org/1/76/7e64a87332f0f4812da54fdba7cb7.png!thumb" style="width:531px; height:232px;" alt="{$this->title}">
      </a>
     </div>

EOF;
}
?>
	                </article>
	            </div>
	        <?php endwhile; ?>
	        </div>
	          	<nav class="pagination">

			       <?php $this->pageLink('上一页','prev') ?>
			    	<span class="page-number">第<?php
						echo floor( $this->_currentPage);?>页/共<?php
						echo floor($this->_total / 9 + 1);?>页</span>
			        <?php $this->pageLink('下一页','next') ?>			       
				</nav>
	    </div>
<?php $this->need('footer.php'); ?>