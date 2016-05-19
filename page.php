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
			<div class="col-sm-12 col-md-12">
				<div class="tp-page">
					<h2><?php $this->title() ?></h2>
					<div class="tp-content">
						<?php $this->content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->need('footer.php'); ?>