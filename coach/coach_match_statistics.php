<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Statistik</title>
	<meta charset="ISO-8859-1">
    <meta name="keywords" content="coach">
	<link rel="stylesheet" href="\P2_Projekt\main.css">
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
				<img src="\P2_Projekt\images\profil.png" width="60" height="80" alt="">
			</a>
			<a href="\P2_Projekt\frontpage.php">
				<img src="\P2_Projekt\images\logout.png" width="80" height="40" alt="">
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
<div>
	<br>
<table class="ex2">
  <tr>
    <td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">Navne</td>
    <td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">Antal spil</td>
	<td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">M&aring;l</td>
	<td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">R&oslash;dt kort</td>
	<td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">Gult kort</td>
	<td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">Minutter</td>
	<td style="border-bottom: 1px solid #ddd; background-color:lightgrey;">Fremm&oslash;de</td>
  </tr>
  <tr>
    <td style="border-bottom: 1px solid #ddd;">Anders Levorsen</td>
    <td style="border-bottom: 1px solid #ddd;">51</td>
	<td style="border-bottom: 1px solid #ddd;">23</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">6</td>
	<td style="border-bottom: 1px solid #ddd;">13452</td>
	<td style="border-bottom: 1px solid #ddd;">79%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Andreas Jensen</td>
    <td style="border-bottom: 1px solid #ddd;">45</td>
	<td style="border-bottom: 1px solid #ddd;">10</td>
	<td style="border-bottom: 1px solid #ddd;">2</td>
	<td style="border-bottom: 1px solid #ddd;">14</td>
	<td style="border-bottom: 1px solid #ddd;">12455</td>
	<td style="border-bottom: 1px solid #ddd;">78%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Christian Olesen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Clause Lund</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Jeppe Pedersen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Jesper Mikaelsen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Mads Andersen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Michael Lund</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Morten Petersen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Oliver Hansen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Peter Rasmussen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
  <tr>
	<td style="border-bottom: 1px solid #ddd;">Simon Frederiksen</td>
    <td style="border-bottom: 1px solid #ddd;">55</td>
	<td style="border-bottom: 1px solid #ddd;">32</td>
	<td style="border-bottom: 1px solid #ddd;">1</td>
	<td style="border-bottom: 1px solid #ddd;">3</td>
	<td style="border-bottom: 1px solid #ddd;">15022</td>
	<td style="border-bottom: 1px solid #ddd;">95%</td>
  </tr>
</table>
</div>
</body>
</html>
