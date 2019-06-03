<?php
	require "dao.php";
	$d = new dao();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Practise</title>
	<style type="text/css">
		span:hover{
			background-color: green;
			color: white;

		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<style type="text/css">
		a{
			text-decoration: none;
		}
		.sp1{
			display: block;
			height: 140px;
			width: 60px;
			border: 1px solid black;
			text-align: center;
			padding-top: 60px;
		}
		.sp2{
			display: block;
			height: 60px;
			width: 140px;
			border: 1px solid black;
			text-align: center;
			padding-top: 20px;
		}
		td,th,table{
			border-collapse: collapse;
			margin:0px;
		}
	</style>
	<?php

		
		
		$result = $d->getSlotsAvailibility();
	?>
	<script type="text/javascript">
		
		window.onload = function() {
			<?php


				while($raw=$result->fetch_assoc())
				{
					//echo $raw["slot_id"]." - ".$raw["slot_status"]."<br>";
					if($raw["slot_status"]=="0")
					{
					?>
						document.getElementById('<?php echo $raw["slot_link"] ?>').href='bookticket.php?pno=<?php echo $raw["slot_id"]?>';

					<?php
					}
					else{
						?>
						document.getElementById('<?php echo $raw["slot_id"] ?>').style='background-color:gray;color:white;';

						<?php
					}
					
				}

			?>

			
			
		}

	</script>
</head>
<body>
<div style="margin-top: 50px" class="container">
	<div class="raw">
		
		<div class="col-md-12">
			
		
<table>
	<tr>
		<td><a id="a1"><span id="p1" class="sp1">p1</span></a></td>
		<td><a id="a2"><span id="p2" class="sp1">p2</span></a></td>
		<td><a id="a3"><span id="p3" class="sp1">p3</span></a></td>
		<td><a id="a4"><span id="p4" class="sp1">p4</span></a></td>
		<td><a id="a5"><span id="p5" class="sp1">p5</span></a></td>
		<td><a id="a6"><span id="p6" class="sp1">p6</span></a></td>
		<td><a id="a7"><span id="p7" class="sp1">p7</span></a></td>
		<td><a id="a8"><span id="p8" class="sp1">p8</span></a></td>
		<td><a id="a9"><span id="p9" class="sp1">p9</span></a></td>
		<td><a id="a10"><span id="p10" class="sp1">p10</span></a></td>
		<td><a id="a11"><span id="p11" class="sp1">p11</span></a></td>
		<td><a id="a12"><span id="p12" class="sp1">p12</span></a></td>
		<td><a id="a13"><span id="p13" class="sp1">p13</span></a></td>
		<td><a id="a14"><span id="p14" class="sp1">p14</span></a></td>
		<td><a id="a15"><span id="p15" class="sp1">p15</span></a></td>
		<td><a id="a16"><span id="p16" class="sp1">p16</span></a></td>
		<td><a id="a17"><span id="p17" class="sp1">p17</span></a></td>

	</tr>

</table>
</div>
</div>
</div>
	<div style="margin-top: 140px;" class="raw">
		<div class="col-md-3">
		<table>
		<tr><td><a id="a18"><span id="p18" class="sp2">p18</span></a></td></tr>
		<tr><td><a id="a19"><span id="p19" class="sp2">p19</span></a></td></tr>
		<tr><td><a id="a20"><span id="p20" class="sp2">p20</span></a></td></tr>
		<tr><td><a id="a21"><span id="p21" class="sp2">p21</span></a></td></tr>
		<tr><td><a id="a22"><span id="p22" class="sp2">p22</span></a></td></tr>
		</table>
		</div>	
		
		<div class="col-md-3">
			<table>
	<tr>
		<td><a id="a23"><span id="p23" class="sp1">p23</span></a></td>
		<td><a id="a24"><span id="p24" class="sp1">p24</span></a></td>
		<td><a id="a25"><span id="p25" class="sp1">p25</span></a></td>
		<td><a id="a26"><span id="p26" class="sp1">p26</span></a></td>
		<td><a id="a27"><span id="p27" class="sp1">p27</span></a></td>
		<td><a id="a28"><span id="p28" class="sp1">p28</span></a></td>
		<td><a id="a29"><span id="p29" class="sp1">p29</span></a></td>
		<td><a id="a30"><span id="p30" class="sp1">p30</span></a></td>
		<td><a id="a31"><span id="p31" class="sp1">p31</span></a></td>



	</tr>

</table>		

		</div>
		<div class="col-md-3"></div>
		<div style="margin-left:  338px" class="col-md-3">
		<table>
		<tr><td><a id="a32"><span id="p32" class="sp2">p32</span></a></td></tr>
		<tr><td><a id="a33"><span id="p33" class="sp2">p33</span></a></td></tr>
		<tr><td><a id="a34"><span id="p34" class="sp2">p34</span></a></td></tr>
		<tr><td><a id="a35"><span id="p35" class="sp2">p35</span></a></td></tr>
		<tr><td><a id="a36"><span id="p36" class="sp2">p36</span></a></td></tr>
		</table>

		</div>	
	</div>


		
		<div style="margin-left: 338px;margin-top: -162px;" class="col-md-3">
			<table>
	<tr>
		<td><a id="a37"><span id="p37" class="sp1">p37</span></a></td>
		<td><a id="a38"><span id="p38" class="sp1">p38</span></a></td>
		<td><a id="a39"><span id="p39" class="sp1">p49</span></a></td>
		<td><a id="a40"><span id="p40" class="sp1">p40</span></a></td>
		<td><a id="a41"><span id="p41" class="sp1">p41</span></a></td>
		<td><a id="a42"><span id="p42" class="sp1">p42</span></a></td>
		<td><a id="a43"><span id="p43" class="sp1">p43</span></a></td>
		<td><a id="a44"><span id="p44" class="sp1">p44</span></a></td>
		<td><a id="a45"><span id="p45" class="sp1">p45</span></a></td>

	</tr>

</table>		

		</div>

<div style="margin-top: 550px;margin-bottom: 50px" class="container">
	<div class="raw">
		
		<div class="col-md-12">
			
		
<table>
	<tr>
		<td><a id="a46"><span id="46" class="sp1">p46</span></td>
		<td><a id="a47"><span id="47" class="sp1">p47</span></td>
		<td><a id="a48"><span id="48" class="sp1">p48</span></td>
		<td><a id="a49"><span id="49" class="sp1">p49</span></td>
		<td><a id="a50"><span id="50" class="sp1">p50</span></td>
		<td><a id="a51"><span id="51" class="sp1">p51</span></td>
		<td><a id="a52"><span id="52" class="sp1">p52</span></td>
		<td><a id="a53"><span id="53" class="sp1">p53</span></td>
		<td><a id="a54"><span id="54" class="sp1">p54</span></td>
		<td><a id="a55"><span id="55" class="sp1">p55</span></td>
		<td><a id="a56"><span id="56" class="sp1">p56</span></td>
		<td><a id="a57"><span id="57" class="sp1">p57</span></td>
		<td><a id="a58"><span id="58" class="sp1">p58</span></td>
		<td><a id="a59"><span id="59" class="sp1">p59</span></td>
		<td><a id="a60"><span id="60" class="sp1">p60</span></td>
		<td><a id="a61"><span id="61" class="sp1">p61</span></td>
		<td><a id="a62"><span id="62" class="sp1">p62</span></td>


	</tr>

</table>
</div>
</div>
</div>

</body>
</htmt>
