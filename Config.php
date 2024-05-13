<?php 
$Conn = new mysqli("localhost" , "root" , "" , "dern-support");
if($Conn){
    echo "";
}else{
    die (mysqli_error($Conn));
}
?>