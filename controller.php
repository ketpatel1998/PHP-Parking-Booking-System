<?php
	require "dao.php";
	require "model.php";
	$d = new dao();
	$m = new model();
	extract($_POST);

	if(isset($_POST) &&  !empty($_POST))
	{
		date_default_timezone_set('Asia/Kolkata'); 
		

		if(isset($_POST['btntimeslot']))
		{	
			session_start();
			$sttime = $_POST['tmstart'];
			$endtime = $_POST['tmend'];
			//echo $sttime." ".$endtime;
			$arr = explode(":", $sttime);
			$arr2 = explode(":", $endtime);

			$a1 = $arr[0];
			$a2 = $arr[1];
			$b1 = $arr2[0];
			$b2 = $arr2[1];

			$times1 = time();
			$tos = date("H:i",$times1);
			$toc = explode(":", $tos);
			$c1 = $toc[0];
			$c2 = $toc[1];
			if(($a1-$c1)<0)
			{
				header("location:chosetime.php");	
			}
			else if(($a1-$c1)==0)
			{
				if(($a2-$c2)<=0)
				{
					header("location:chosetime.php");
				}
				else
				{
					if(($b1-$a1)<0)
					{
						header("location:chosetime.php");
					}
					else if(($d1=($b1-$a1))==0)
					{
						if(($d2=($b2-$a2))<=0)
						{
							header("location:chosetime.php");		
						}
						else
						{
							//echo "Success";
							$_SESSION["hour1"]["id"]=$a1;
							$_SESSION["min1"]["id"]=$a2;
							$_SESSION["hour2"]["id"]=$b1;
							$_SESSION["min2"]["id"]=$b2;
							$_SESSION["hour3"]["id"]=$d1;
							$_SESSION["min3"]["id"]=$d2;
						 	header("location:choseslot.php");
						}
					}
					else{
						$d2 = ($b2-$a2);
						if($d2<0)
						{
							$d1 = $d1-1;
							$d2 = 60 + $d2;
						}
						//echo "Success";
						$_SESSION["hour1"]["id"]=$a1;
						$_SESSION["min1"]["id"]=$a2;
						$_SESSION["hour2"]["id"]=$b1;
						$_SESSION["min2"]["id"]=$b2;
						$_SESSION["hour3"]["id"]=$d1;
						$_SESSION["min3"]["id"]=$d2;
					 	header("location:choseslot.php");
					}
				}
			}
			else
			{
					if(($b1-$a1)<0)
					{
						header("location:chosetime.php");
					}
					else if(($d1=($b1-$a1))==0)
					{
						if(($d2=($b2-$a2))<=0)
						{
							header("location:chosetime.php");		
						}
						else
						{
							//echo "Success";
							$_SESSION["hour1"]["id"]=$a1;
							$_SESSION["min1"]["id"]=$a2;
							$_SESSION["hour2"]["id"]=$b1;
							$_SESSION["min2"]["id"]=$b2;
							$_SESSION["hour3"]["id"]=$d1;
							$_SESSION["min3"]["id"]=$d2;
						 	header("location:choseslot.php");
						}
					}
					else{
						//echo "Success";
						$d2 = ($b2-$a2);
						if($d2<0)
						{
							$d1 = $d1-1;
							$d2 = 60 + $d2;
						}
						$_SESSION["hour1"]["id"]=$a1;
						$_SESSION["min1"]["id"]=$a2;
						$_SESSION["hour2"]["id"]=$b1;
						$_SESSION["min2"]["id"]=$b2;
						$_SESSION["hour3"]["id"]=$d1;
						$_SESSION["min3"]["id"]=$d2;
					 	header("location:choseslot.php");
					}
			}
			//echo " ".$a1." ".$a2." ".$b1." ".$b2;
			//echo "<br>".($b1-$a1).":".($b2-$a2);
			

			
		}
		if(isset($_POST["nmrefreshbtn"]))
		{

			$times1 = time();
			$tos = date("H:i",$times1);
			$toc = explode(":", $tos);
			$b1 = $toc[0];
			$b2 = $toc[1];
			//echo "Global : ".$tos11."<br>";
			echo "current_time :".$b1." ".$b2."<br>";
			$result = $d->getSlotsAvailibility();
                while($raws=mysqli_fetch_array($result))
                {
                	if($raws["slot_status"]=="1")
                    {
                        $j = $raws["endtime"];
                        //echo $j."<br>";
                        $arr = explode(":", $j); 
                        $a1 = $arr[0];
						$a2 = $arr[1];
						echo $a1." ".$a2."<br>";
						if(($a1-$b1)>0)
						{


						}
						else if(($a1-$b1)==0)
						{

							if(($a2-$b2)>=0)
							{

							}
							else
							{
								echo "in release1";
								$j = $d->releaseSlot("slots_tbl",$raws["slot_id"]);
								if($j>0)
								{
									echo "sucess<br>";

								}
								else
								{
									echo "Error at line 73<br>";
								}		
							}
							
						}
						else
							{
								echo "In release2"; 
								$j = $d->releaseSlot("slots_tbl",$raws["slot_id"]);
								if($j>0)
								{
									echo "sucess<br>";

								}
								else
								{
									echo "Error at line 73<br>";
								}		
							}

                     }

                }
                session_start();
                if(isset($_SESSION["onlyview"]["name"]))
                {
                	unset($_SESSION["onlyview"]["name"]);
                	header("location:viewpakingmap.php");
                }
                else
                {
                	header("location:choseslot.php");
                }
		}
		if(isset($_POST['bookdestin']))
		{
			session_start();
			$dest = $_POST['bookdestin'];
			if($dest=="ah0")
			{
				header("location:chosedestin.php");
			}
			else if($dest=="ah1")
			{
				$_SESSION["destin"]["id"]="Piksole Building, Ahmedabad";
				header("location:chosetime.php");
			}
			else if($dest=="ah2")
			{
				$_SESSION["destin"]["id"]="Star-Bazar, New-Ranip, Ahmedabad";
				header("location:chosedestin.php");
			}
		}
		if(isset($_POST['printbookticket']))
		{
			session_start();
			$slot = $_SESSION["slot"]["id"];
			$sttime = $_SESSION['hour1']['id'].":".$_SESSION['min1']['id'];
			$endtime = $_SESSION['hour2']['id'].":".$_SESSION['min2']['id'];
			$slottime = $_SESSION['hour3']['id'].":".$_SESSION['min3']['id'];
			$dest = $_SESSION['destin']['id'];
			$regno = $_SESSION['regno']['name'];
			$name = $_SESSION['name1']['id'];
        	$email = $_SESSION['email1']['id'];
        	$phone = $_SESSION['phone1']['id'];
        	echo "Hoo";
        	$temp = " time_hours = '".$slottime."', starttime = '".$sttime."' ,endtime = '".$endtime."'";
			$j =  $d->updateSlotAvailibility("slots_tbl",$slot,$temp);
			if($j>0)
			{
				$m->set_data("txtregno",$regno);
					$m->set_data("txtname",$name);
					$m->set_data("txtemail",$email);
					$m->set_data("txtph",$phone);
					$m->set_data("txtslot",$slot);
					$m->set_data("txtsttime",$sttime);
					$m->set_data("txtendtime",$endtime);
					$m->set_data("txtdest",$dest);
					$m->set_data("txtslottime",$slottime);
					
					$a = array('regno'=>$m->get_data(test_input('txtregno')),
						'name'=>$m->get_data(test_input('txtname')),
						'email'=>$m->get_data(test_input('txtemail')),
						'phone'=>$m->get_data(test_input('txtph')),
						'place'=>$m->get_data(test_input('txtdest')),
						'slot'=>$m->get_data(test_input('txtslot')),
						'starttime'=>$m->get_data(test_input('txtsttime')),
						'time_hours'=>$m->get_data(test_input('txtslottime')),
						'endtime'=>$m->get_data(test_input('txtendtime'))

					);
					$l = $d->insertBooking("booked_tbl",$a);
					if($l>0)
					{
									
						unset($_SESSION["slot"]["id"]);
						unset($_SESSION['destin']['id']);
						unset($_SESSION['name1']['id']);
		        		unset($_SESSION['email1']['id']);
		        		unset($_SESSION['phone1']['id']);

						header("location:chosedestin.php");	
					}
					else
					{
						echo "make slot available";
					}
			}
			else
			{
				unset($_SESSION["slot"]["id"]);
				
				unset($_SESSION['hour1']['id']);
				unset($_SESSION['min1']['id']);
				unset($_SESSION['hour2']['id']);
				unset($_SESSION['min2']['id']);
						
				unset($_SESSION['destin']['id']);
				unset($_SESSION['name1']['id']);
        		unset($_SESSION['email1']['id']);
        		unset($_SESSION['phone1']['id']);

				header("location:chosedestin.php");	
			}

			
		}
		if(isset($_POST['nmbtnsignin']))
		{
			$value = " reg_no = '".$_POST["nmtxtregno"]."'";
			$value .= " and password = '".$_POST["nmtxtpassword"]."'";
			$j = $d->loginUser("users_tbl",$value);
			if($result=mysqli_fetch_array($j))
			{
				session_start();
				$_SESSION["regno"]["name"]=$result['reg_no'];
				header("Location:chosedestin.php");
			}
			else
			{
				session_start();
				$_SESSION["error3"]["name"]="set";
				header("location:signup.php");
			}
		}
		if(isset($_POST['nmbtnsignup']))
		{
			if($_POST['nmtxtconfirmpassword']==$_POST['nmtxtpassword'])
			{

				$reg = $_POST["nmtxtregno"];

				$j = $d->checkRegnoDuplication("users_tbl",$reg);
				if($result=mysqli_fetch_array($j))
				{
					session_start();
					$_SESSION["error"]["name"]="set";
					header("location:signup.php");
				}
				else
				{
					$m->set_data("txtregno",$nmtxtregno);
					$m->set_data("txtname",$nmtxtname);
					$m->set_data("txtemail",$nmtxtemail);
					$m->set_data("txtph",$nmtxtphone);
					$m->set_data("txtpassword",$nmtxtpassword);

					
					$a = array('reg_no'=>$m->get_data(test_input('txtregno')),
						'name'=>$m->get_data(test_input('txtname')),
						'email'=>$m->get_data(test_input('txtemail')),
						'phone'=>$m->get_data(test_input('txtph')),
						'password'=>$m->get_data(test_input('txtpassword'))

					);

					$q = $d->insert("users_tbl",$a);
					if($q > 0)
					{
						session_start();
						$_SESSION["regno"]["name"]=$reg;
						header("Location:index.php");
					}
					else
					{
						echo "Something is Wrong";
					}
				}
			}
			else
			{
				session_start();
				$_SESSION["error2"]["name"]="set";
				header("location:signup.php");
			}
		}
	}
?>