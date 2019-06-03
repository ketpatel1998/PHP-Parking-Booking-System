<?php
	require "dao.php";
	require "model.php";
	$d = new dao();
	$m = new model();
	extract($_GET);
	$j = $d->checkSlotAvailibility("slots_tbl",$pno);
	if($result=mysqli_fetch_array($j))
	{
		if($result["slot_status"]=="1")
		{
			header("location:choseslot.php");
		}
		else
		{
			session_start();
			$_SESSION["slot"]["id"]=$pno;
			header("location:bookticket.php");
		}
	}
	else
	{
		header("location:choseslot.php");
	}
?>