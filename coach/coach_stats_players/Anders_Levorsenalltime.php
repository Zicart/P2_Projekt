<?php

include("phpcharts/lib/inc/chartphp_dist.php");

$p = new chartphp();

$p->data = array(array(array('Fremm&oslash;de', 12),array('Udeblev', 9), array('Meldt afbud', 14)));
$p->chart_type = "pie";

// Common Options
$p->title = "Fremm&oslash;de";

$out = $p->render('c1');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Statistik</title>
	<meta charset="ISO-8859-1">
    <meta name="keywords" content="coach">
	<link rel="stylesheet" href="\P2_Projekt\main.css">
	<script src="phpcharts/lib/js/jquery.min.js"></script>
        <script src="phpcharts/lib/js/chartphp.js"></script>
        <link rel="stylesheet" href="phpcharts/lib/js/chartphp.css">

    <style>
        /* white color data labels */
        .jqplot-data-label{color:lightgrey;}
    </style>
</head>

<body>
	<div class="flex-homeprofile center">
		<div class="flex-home">
			<a href="\P2_Projekt\coach\coach_index.php">
				<img src="\P2_Projekt\images\bedrefodbold_logo.png" width="96" height="96" alt="">
			</a>
		</div>
		<div class="flex-profile">
			<a href="profilepage.php">
				<img src="\P2_Projekt\images\profil.png" width="40" height="60" alt="">
			</a>
			<a href="\P2_Projekt\frontpage.php">
				<img src="\P2_Projekt\images\logout.png" width="60" height="30" alt="">
			</a>
		</div>
	</div>
	
	<p></p>
	
	<div class="flex-menubuttons center">
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_teampage.php">Holdstyring</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_calendar.php">Kalender</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_statistics.php">Statistikker</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_messageboard\mbindex.php?MBID=3">Opslagstavle</a>
	</div>

	<p></p>

	<div class="flex-menubuttons center">
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_statistics.php">Hold</a>
		<div class="dropdown">
			 <button class="dropbtn">Spillere</button>
			<div class="dropdown-content">
				<a href="\P2_Projekt\coach\coach_stats_players\Anders_Levorsenalltime.php">Anders L.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Andreas_Jensenalltime.php">Andreas J.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Christian_Olesenalltime.php">Christian O.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Claus_Lundalltime.php">Claus L.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Jeppe_Pedersenalltime.php">Jeppe P.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Jesper_Mikaelsenalltime.php">Jesper M.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Mads_Andersenalltime.php">Mads A.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Michael_Lundalltime.php">Michael L.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Morten_Petersenalltime.php">Morten P.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Oliver_Hansenalltime.php">Oliver H.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Peter_Rasmussenalltime.php">Peter R.</a>
				<a href="\P2_Projekt\coach\coach_stats_players\Simon_Frederiksenalltime.php">Simon F.</a>
			</div>
		</div>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_match_statistics.php">Kamp</a>

	</div>
	



			<!-- Temp. debug		

			-->


<?php
?>

 <div id="Content" class="flex-container-center" style="margin-top: 15px;">
        <div id="divA" >
            <div id="picture" >
             <img src="\P2_Projekt\images\playerimage.png" id="picture">   
            </div>
            <div id="info">
            <p>Anders Levorsen <br> 19 &aring;r <br><br> Tr&oslash;je nr.: 15 <br><br> Position: Defense</p>  
            </div>
            <div id="description">
             <p> Kommer fra Aalborg midtby. Har spillet for klubben bla. bla. bla.</p>   
            </div>
        </div>
        <div id="divB">
          <button type="button" onclick="location.href='Anders_Levorsen7days.php'">7 Dage</button>
		   <button type="button" onclick="location.href='Anders_Levorsen14days.php'">14 Dage</button>
		   <button type="button" onclick="location.href='Anders_Levorsen1month.php'">1 M&aring;ned</button>
		   <button type="button" onclick="location.href='Anders_Levorsenalltime.php'">Altid</button>
		
		<div style="width:100%; min-width:50px; height:90%; min-height: 50px;">
			<br><br> <?php echo $out; ?>
		<ul style="list-style-type:none">
			<li> Skader: 0</li>
			<li> M&aring;l: 4</li>
			<li> R&oslash;de Kort: 0</li>
			<li>Gule Kort: 0</li>
			<li> Minutter Spillet: 532</li>
		</ul>
		</div>
		   
        </div>
    </div>
	

</body>
</html>
