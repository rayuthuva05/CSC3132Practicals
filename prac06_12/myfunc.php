<?php
//get the database connection file
require_once 'dbconf.php';
/*function PrintTable($tableName,$connect){
try{
	//Query
	$sql = "SELECT * FROM $tableName";

	//execute the query (call variable,query)
	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)>0) {
		//fetch the data from rows

		echo "<table border=1> ";

	$col = mysqli_fetch_fields($result);
	//print the column
	echo "<tr>";
	foreach ($col as $value) {
		//return an object
		//print_r($value)
			echo "<td>".$value->name."</td>";
		}
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result)){
			//print the data in table format

		echo "<tr>";
		foreach ($row as $key => $value) {
			echo "<td>$value</td>";
		}
		echo "</tr>";
		}
		echo "</table>";
	} 
	else{
		echo "No results"; //table is empty
	}

	}


catch(Exception $e){
	die($e->getMessage());
}
}*/
 //GET DATA FROM DB
 function employee($connect){
            try{
            
                $sql = "SELECT EMP_ID,EMP_Name FROM  employee";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }

                    echo "<td> View details </td>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){ 
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    $EMP_ID=$row['EMP_ID'];
                    //query string
                    echo "<td><a href='printtable.php? EMP_ID=$EMP_ID '> View </a> </td>";
                    echo "</tr>";
                    
                    }

                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }



         function Empdetails($EMP_ID,$connect){
            try{
            
                $sql = "SELECT * FROM  employee where  EMP_ID = $EMP_ID ";
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }

       /* 
	Join the tables
       function Jointable($EMP_ID,$connect){
            try{
            
                $sql = "SELECT * FROM  employee , department join '$EMP_Name' = '$EMP_Name' where  ;
            
            
                $result = mysqli_query($connect,$sql);
            
                if (mysqli_num_rows($result)>0) {
                
            
                    echo "<table border=1> ";
            
                $col = mysqli_fetch_fields($result);
            
                echo "<tr>";
                foreach ($col as $value) {
                    
                        echo "<td>".$value->name."</td>";
                    }
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                } 
                else{
                    echo "No results"; 
                }
            
                }
            
            
            catch(Exception $e){
                die($e->getMessage());
            }
        }*/
?>
<?php
require_once 'dbconf.php';
function GetBookList($tableName,$connect,$colnames)
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
            //echo "<tr>";
            //echo "<th colspan=$cols>$tableName</th>";
           // echo "</tr>";
			//echo "<tr>";
			foreach ($col as $value) {
				echo "<td>$value->name</td>";
			}
			echo "<td>view</td>";
			echo "</tr>";
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				foreach ($row as $key => $value) {
					echo "<td>$value</td>";
				}
				$id=$row['id'];
				echo "<td><a href='bookid.php?bookid=$id'>view</a></td>";
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

function GetBook($id,$connect){
		try{
		
			$sql = "SELECT * FROM  books where  id = '$id' ";
		
		
			$result = mysqli_query($connect,$sql);
		
			if (mysqli_num_rows($result)>0) {
			
		
				echo "<table border=1> ";
		
			$col = mysqli_fetch_fields($result);
			
			
			foreach ($col as $value) {
				
					echo "<td>".$value->name."</td>";
				}
				echo "</tr>";
				while($row = mysqli_fetch_assoc($result)){
					
				echo "<tr>";
				foreach ($row as $key => $value) {
					echo "<td>$value</td>";
				}
				echo "</tr>";
				}
				echo "</table>";
			} 
			else{
				echo "No results"; 
			}
		
			}
		
		
		catch(Exception $e){
			die($e->getMessage());
		}
	}

?>