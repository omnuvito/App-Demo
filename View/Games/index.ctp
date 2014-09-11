<section>
	<header>
		<h2>Games List</h2>
	</header>
	<?php foreach ($games as $game): ?>
		<ul>
			<li>
				<p>
					<a href="#"><?php echo ($game['Game']['game_name']); ?></a>
				</p>
			</li>
		</ul>
	<?php endforeach; ?>
</section>