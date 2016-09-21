	<header>
		<h1>Post Page</h1><hr/>	
	</header>
	<article class="postcontent" id="body">
		<?php
			foreach ($postbyid as $key => $value) {
		?>
		<div class="details">
			<div class="title">
				<h2><?php echo $value['title'] ?></h2>
				<p>Category: <a href="<?php echo BASE_URL; ?>/Index/postByCat/<?php echo $value['cat'] ?>"><?php echo $value['name'] ?></a></p>
			</div>
			<div class="desc">
				<p> <?php echo $value['content'] ?></p>
			</div>
		</div>
		<?php } ?>
	</article>