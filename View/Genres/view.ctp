<section>
	<div class="genres view">
		<h2><?php echo 'Posts: '. $genre['Genre']['genres_name']; ?></h2>
	</div>
	
	<?php if (!empty($genre['Post'])): ?>
		<?php foreach ($genre['Post'] as $post): ?>
			<div class="profile_content">
				<?php echo $this->Html->link($post['post_name'],array('controller'=>'posts','action'=>'view',$post['id'])) ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?><br />
</section>
