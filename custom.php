<?php
/**
 * 插件页面模板
 *
 * @package custom
 */
?>
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
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					      <h4 class="panel-title">
					          Collapsible Group Item #1
					      </h4>
					        </a>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					      <h4 class="panel-title">
					          Collapsible Group Item #2
					      </h4>
					        </a>
					    </div>
					    <div id="collapseTwdo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					  </div>

					</div>
					<li>
						<div class="pic-border pull-left">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<img src="<?php $this->options->themeUrl('img/ui_logo.jpg'); ?>">
						</a>
						</div>
						<div class="info">
							<h4> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Elementarist输出助手</a></h4>
							<p>Elementarist元素萨输出助手插件，在界面上显示一大一小2个框体，大框体显示推荐的法术循环顺序和推荐的Buff，小框体显示你的Debuff计时器，如烈焰震击等。</p>
							<div class="info-date">
								<span class="fl"><em>最后更新：</em>2015-12-07</span><span class="icon star"></span>8.3<span class="icon praise"></span>8<span class="icon load"></span>81,863
							</div>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse clearfix" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body bg-info">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					</li>
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
