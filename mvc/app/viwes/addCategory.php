<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
<h3>Add Category</h3><hr/>

	<?php
		if(isset($msg)) {
			echo $msg;
		}
	?>
	
	<form action="http://localhost:8080/mvc/Category/insertCategory" method="post">
		<table>
			<tr>
				<td>Add Category Name</td>
				<td><input type="text" placeholder="Category Name" name="name" required="1"></td>
			</tr>
			<tr>
				<td>Add Category Title</td>
				<td><input type="text" placeholder="Category Title" name="title" required="1"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Save</button></td>
			</tr>
		</table>
	</form>

</body>
</html>