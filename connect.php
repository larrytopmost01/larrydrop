<?php 
$con= new mysqli('localhost', 'root', '' ,'drop_db');

if($con){

}else{
    die(mysql_error($con));
}



?>