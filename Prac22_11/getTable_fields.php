<?
require_once 'dbconfig.php';
function PrintTableCols($tableName,$connect,$colnames)
{
	try {

		$sql = "SELECT ";
		for ($i=0; $i < sizeof($colnames)-1; $i++) { 
			$sql .=$colnames[$i].",";
		}
		$sql .=$colnames[sizeof($colnames)-1]." from $tableName";
		
		$result = mysqli_query($connect,$sql);
		if (mysqli_num_rows($result)>0) {
			echo "<table border='1'>";
			$col = mysqli_fetch_fields($result);
            $cols=sizeof($colnames);
            echo "<tr>";
            echo "<th colspan=$cols>$tableName</th>";
            echo "</tr>";
			echo "<tr>";
			foreach ($col as $value) {
				echo "<td>$value->name</td>";
			}
			echo "</tr>";
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				foreach ($row as $key => $value) {
					echo "<td>$value</td>";
				}
				echo "</tr>";
			}
			echo "</table>"."<br>";
		} else {
			echo "No results";
		}
		
	} catch (Exception $e) {
		die($e->getMessage());
	}
}
PrintTableCols("module",$connect,["M_Code","No_Credits"]);

PrintTableCols("students",$connect,["name","course"]);
?>