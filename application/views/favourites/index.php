

<div class="favourites_list_page">
	<h2><?php echo $title ?></h2>

	<?php foreach ($heroes as $hero) : ?>
		<div class="list_hero">
			<div class="list_hero_head">
				<img src="<?php echo $hero['image'] ?>" class="list_image">
			</div>
			<div class="list_hero_body">
				<h3><?php echo $hero['name'] ?></h3>
				<p><?php echo $hero['phrase'] ?></p>
				<a class="btn btn-primary" href="<?php echo site_url('/favourites/'.$hero['slug']) ?>">Learn more</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
