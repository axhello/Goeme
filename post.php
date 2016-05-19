<?php $this->need('header.php'); ?>

<div id="content-wrapd">
	<header class="main-header">
		<div class="overlay">
			<section class="middle siteinfo">
				<h1 class="page-title">好了么</h1>
				<h4 class="page-desc">
					<span>#只做优质主题的搬运工</span>
	            </h4>
			</section>
		</div>
	</header>
</div>
	<div class="container">
		<div class="row fixtop tp-box">
			<div class="col-sm-12 col-md-8">
				<div class="tp-page">
					<h2><?php $this->title() ?></h2>
					<div class="tp-content">
						<?php $this->content(); ?>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="tp-bar">
					<h2>链接</h2>
					<div class="tp-content">
					

						<a href="<?php if (isset($this->fields->url)): ?><?php $this->fields->url(); ?><?php endif; ?>" class="btn btn-lg btn-block btn-success"  target="_Blank">
						 <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
						 主题演示</a>


						<p></p>
						<a href="<?php if (isset($this->fields->download)): ?><?php $this->fields->download(); ?><?php endif; ?>" class="btn btn-lg btn-block btn-info"  target="_Blank">
						<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
						主题下载</a>
					</div>
					<h2 class="others">其他</h2>
					<div class="tp-content">

						<!-- </div> -->
						<div class="list-group">
					   <?php $this->related(5)->to($relatedPosts); ?>
    
   					 <?php while ($relatedPosts->next()): ?>
    			<a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>" class="list-group-item"><?php $relatedPosts->title(); ?></a>
    					<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->need('footer.php'); ?>