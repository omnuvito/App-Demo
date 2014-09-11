<section>
	<header>
		<h2>Game News</h2>
	</header>
	<?php foreach ($posts as $post): ?>
		<article>
			<header>
				<div class='title_article'>
					<?php echo ($post['Post']['post_name']); ?>
				</div>
			</header>
			<div class='content'>
				<?php echo ($post['Post']['post_content']); ?>
			</div>
			<footer>
				<div class='article_footer'>
					<p>
						Genre: <?php echo $this->Html->link($post['Genre']['genres_name'], array('controller' => 'genres', 'action' => 'view', $post['Genre']['id'])); ?> &nbsp; <?php if(CakeSession::read('User.id')!=null){?>
								Author: <?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
						<?php }else{ ?> Author: <?php echo $post['User']['username']; ?> <?php } ?> &nbsp; Created: <?php echo ($post['Post']['created_at']); ?>
					</p>
				</div>
			</footer>
		</article>
	<?php endforeach; ?>
</section>