	<header>
		<h1>Home Page</h1><hr/>	
	</header>
	<article class="postcontent" id="body">
		<?php 
			foreach ($allPost as $key => $value) {
		 ?>
		<div class="post">
			<h2><a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></h2>
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