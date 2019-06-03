<?php
	class Dbconnection
	{
		function connect()
		{
			$connection = mysqli_connect("LocalHost","root","","parking_booking_system");	
			if($connection!=null)
			{
				//echo "Success";
			}
			else
			{
				//echo "Fail";
			}
			return $connection;
		}
	}

?>