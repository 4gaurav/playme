<?php
session_start();
error_reporting(0);
require_once("db.php");
$logPath = "log/clickreceive_".date("Ymd").".txt";
error_log("called url: ".date('Ymd His')." : ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);

$pubid = $_GET['pubid'];
$campid = $_GET['id'];
$subid = $_GET['subid'];
$referID=date("ymdHisu");

$Query="insert into tbl_wapidentify_poland (referid,entrydate,pubid,subid,campid) values ('$referID',now(),'$pubid','$subid','$campid')";
	error_log(date('Ymd His')." : Query=$Query \n", 3, $logPath);	
		if(!mysqli_query($con1,$Query))
		  {
			error_log("Error description:".date('Ymd His')." : ". mysqli_error($con1)."\n", 3, $logPath);	
		  }
$lastid = mysqli_insert_id($con1);		  
error_log(date('Ymd His')."redirected to lp page: \n", 3, $logPath);
header("Location:landing_page/pl.php?lastid=$lastid");
die;		
?>