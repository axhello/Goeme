		<footer>
			<div class="main-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget">
			                    <h4 class="title">友情链接</h4>
			                    <div class="content friend-links">
			                    <ul>
			                    	<li><a href="http://www.xiachedan.cc" title="AmWalker" target="_blank">AmWalker</a></li>
					              	<li><a href="https://www.ciyuanai.net" title="中国好基友" target="_blank">Axhello</a></li>
							      	<li><a href="http://www.51bbw.cn/"  title="我要表白网" target="_blank">我要表白网</a></li>
							      	<li><a href="http://www.hackfans.net" title="免费资源" target="_blank">免费资源</a></li>
								<li><a href="http://qqdie.com" title="主题制作人" target="_blank">QQ爹博客</a></li>
								<li><a href="http://www.sumeng.xyz/" title="主题采集者" target="_blank">苏檬博客</a></li>
							    </ul>	
			                    </div>
	                		</div>
						</div>
						<div class="col-sm-4">
							<div class="widget">
			                     <h4 class="title">标签云</h4>
			                    <div class="content tag-cloud">
			                    <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=10')->to($tags); ?>
								<ul>
								<?php while($tags->next()): ?>
								    <li><a style="color: rgb(<?php echo(rand(100, 255)); ?>, <?php echo(rand(100,255)); ?>, <?php echo(rand(100, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
								<?php endwhile; ?>
								</ul>
			                    </div>
	                		</div>
						</div>
						<div class="col-sm-4">
							<div class="widget">
			                    <h4 class="title">联系方式</h4>
			                    <div class="content friend-links">
			                        

					<span>Email：Root#xshell.cc（#换成@）</span><br /><br/>
					<span>QQ群: 116737182(任何问题与bug反馈)</span>
			                    </div>
	                		</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

<script>
 var navigation = responsiveNav(".nav-collapse");
</script>
	<?php $this->footer(); ?>
</body>
</html>