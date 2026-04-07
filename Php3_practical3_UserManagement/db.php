<?php
session_start();
$ServerName="localhost";
$ServerUsername="root";
$Password="";
$dbName="j1_php";
$conn=new mysqli($ServerName,$ServerUsername,$Password,$dbName);
if(!$conn){
    echo "Database doesn't Connected";
}
?>