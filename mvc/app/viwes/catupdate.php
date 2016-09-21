<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
<h3>Update Category</h3><hr/>

	<?php
		if(isset($msg)) {
			echo $msg;
		}
	?>
	
	<form action="http://localhost:8080/mvc/Category/updateCat" method="post">
		<table>
			<?php
				if(isset($catById)) {
				foreach ($catById as $value) {
			?>
			<tr>
				<td>Update Category Name</td>
				<td><input type="text" name="name" required="1" value="<?php echo $value['name'] ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $value['id'] ?>"></td>
			</tr>
			<tr>
				<td>Update Category Title</td>
				<td><input type="text" name="title" required="1" value="<?php echo $value['title'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Update</button></td>
			</tr>
			<?php } } ?>
		</table>
	</form>

</body>
</html>