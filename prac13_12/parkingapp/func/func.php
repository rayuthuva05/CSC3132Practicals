<?php
require_once 'conf/conf.php';
function GetTableData($query,$connection){
try{
    $result = mysqli_query($connection,$query);
    $data = array();
    if (mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    return $data;
}
catch (Exception $e) {
    die($e->getMessage());
}
}

function RequiredField($value,$msg="the field can't be empty"){
    if (empty($_POST[$value])) {
        echo $msg;
        return false;
    } else {
        return true;
    }
}


function GetTableData2($query,$connect){
try {
    $result=mysqli_query($connect,$query);

    if(mysqli_num_rows($result)>0){
        $col=mysqli_fetch_fields($result);

        while($row=mysqli_fetch_assoc($result)){
            echo "<div>";
            foreach($row as $value){
                echo  $value."<br>";
            }
            echo "</div>";
        }
    }
    else{
        echo "no result";
    }
} catch (Exception $e) {
    die($e->getMessage());
}
}
?>

