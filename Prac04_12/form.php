<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Data Using form</title>
</head>
<body>
    <?php
    require_once 'dbconf.php';
    require_once 'myfunc.php';

    echo $_SERVER['PHP_SELF'];
    ?>
	<form action="<php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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

</body>
</html>