<?php

include_once 'connectionmade.php';
include_once 'interface1.php';

class dao implements interface1{
	private $conn;
	function __construct()
	{
		$db = new Dbconnection();
		$this->conn=$db->connect();
	}
	function getUserData($table,$value)
	{
		$where = " where reg_no = '".$value."'";
		$j = mysqli_query($this->conn,"select * from ".$table." ".$where);
		return $j;
	}
	function updateSlotAvailibility($table,$value,$set)
	{
		$where = " where slot_id = '".$value."'";
		$j = mysqli_query($this->conn,"update ".$table." set slot_status = '1',".$set." ".$where);
		return $j;
	}
	function insertBooking($table,$value)
	{
		$field ="";
		$val = "";
		$i = 0;
		foreach($value as $k => $v)
		{
			$v = str_replace("'","",$v);
			if($i == 0)
			{
				$field.=$k;
				$val.="'".$v."'";
			}
			else
			{
				$field.=",".$k;
				$val.=",'".$v."'";
			}
			$i++;
		}
		return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->conn));
	}
	function releaseSlot($table,$value)
	{
		$j = mysqli_query($this->conn,"update ".$table." set slot_status = 0,starttime = 0,endtime = 0 where slot_id = '".$value."'");
		return $j;
	}
	function checkSlotAvailibility($table,$value)
	{
		$where = " where slot_id = '".$value."'";
		$j = mysqli_query($this->conn,"select * from ".$table." ".$where);
		return $j;
	}
	function getSlotsAvailibility()
	{
		$j = mysqli_query($this->conn,"select * from slots_tbl");
		return $j;
	}

	function checkRegnoDuplication($table,$value)
	{
		$where = " where reg_no = '".$value."'";
		$j = mysqli_query($this->conn,"select * from ".$table."".$where);
		return $j;
	}
	function loginUser($table,$value)
	{
		$where = " where ".$value;
		$j = mysqli_query($this->conn,"select * from ".$table."".$where);
		return $j;
	}
	function insert($table,$value)
	{
		$field ="";
		$val = "";
		$i = 0;
		foreach($value as $k => $v)
		{
			$v = str_replace("'","",$v);
			if($i == 0)
			{
				$field.=$k;
				$val.="'".$v."'";
			}
			else
			{
				$field.=",".$k;
				$val.=",'".$v."'";
			}
			$i++;
		}
		return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->conn));

	}
}
?>