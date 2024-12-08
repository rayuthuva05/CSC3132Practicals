<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Data Using form</title>
</head>
<body>
    <?php
    require_once 'dbconf.php';
    require_once 'myfunc.php';
	
    ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<table>
			<tr>
				<td align="right">Name:</td>
				<td><input type="search" name="search" /></td>
			</tr>

			<tr>
                <td></td>
				<td align='center'><input type="submit" value="Search" /></td>
			</tr>
		</table>
	</form>	

	<?php

	PrintTable ("students",$connect);
	if (isset($_GET['search']) && $_GET['search'] != '') {
		SearchData($_GET['search'],$connect);
	}
	?>
</body>
</html>