<?php
	interface interface1{
		function getSlotsAvailibility();
		function insert($table,$value);
		function checkRegnoDuplication($table,$value);
		function loginUser($table,$value);
		function checkSlotAvailibility($table,$value);
		function getUserData($table,$value);
		function updateSlotAvailibility($table,$value,$set);
		function insertBooking($table,$value);
		function releaseSlot($table,$value);
	}
?>