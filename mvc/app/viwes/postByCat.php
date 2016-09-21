	<header>
		<h1>Posts by Category</h1><hr/>	
	</header>
	<article class="postcontent" id="body">
		<?php 
			foreach ($getcat as $key => $value) {
		 ?>
		<div class="post">
			<div class="title">
				<h2><?php echo $value['title'] ?></h2>
				<p>Category: <?php echo $value['name'] ?></a></p>
			</div>
			<p><?php 
					$text = $value['content'];
					if(strlen($text) > 200) {
						$text = substr($text, 0, 200);
						echo $text;
					}
				?></p>
			<div class="reedmore"><a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>">See More</a></div>
		</div>
		<?php } ?>
	</article>