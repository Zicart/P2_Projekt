<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Statistik</title>
	<meta charset="ISO-8859-1">
    <meta name="keywords" content="player">
	<link rel="stylesheet" href="\P2_Projekt\main.css">
</head>

<body>
	<div class="flex-homeprofile center">
		<div class="flex-home">
			<a href="\P2_Projekt\player\player_index.php">
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
		<a class="flex-menuitem btn" href="\P2_Projekt\player\player_teampage.php">Holdstyring</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\player\player_calendar.php">Kalender</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\player\player_statistics.php">Statistikker</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\player\player_messageboard\mbindex.php?MBID=3">Opslagstavle</a>
	</div>

	<p></p>

	<div class="flex-menubuttons center">
		<a class="flex-menuitem btn" href="\P2_Projekt\player\player_statistics.php">Hold</a>
		<div class="dropdown">
			 <button class="dropbtn">Spillere</button>
			<div class="dropdown-content">
				<a href="\P2_Projekt\player\player_stats_players\Anders_Levorsenalltime.php">Anders L.</a>
				<a href="\P2_Projekt\player\player_stats_players\Andreas_Jensenalltime.php">Andreas J.</a>
				<a href="\P2_Projekt\player\player_stats_players\Christian_Olesenalltime.php">Christian O.</a>
				<a href="\P2_Projekt\player\player_stats_players\Claus_Lundalltime.php">Claus L.</a>
				<a href="\P2_Projekt\player\player_stats_players\Jeppe_Pedersenalltime.php">Jeppe P.</a>
				<a href="\P2_Projekt\player\player_stats_players\Jesper_Mikaelsenalltime.php">Jesper M.</a>
				<a href="\P2_Projekt\player\player_stats_players\Mads_Andersenalltime.php">Mads A.</a>
				<a href="\P2_Projekt\player\player_stats_players\Michael_Lundalltime.php">Michael L.</a>
				<a href="\P2_Projekt\player\player_stats_players\Morten_Petersenalltime.php">Morten P.</a>
				<a href="\P2_Projekt\player\player_stats_players\Oliver_Hansenalltime.php">Oliver H.</a>
				<a href="\P2_Projekt\player\player_stats_players\Peter_Rasmussenalltime.php">Peter R.</a>
				<a href="\P2_Projekt\player\player_stats_players\Simon_Frederiksenalltime.php">Simon F.</a>
			</div>
		</div>
		<a class="flex-menuitem btn" href="\P2_Projekt\player\player_match_statistics.php">Kamp</a>

	</div>
	



			<!-- Temp. debug		

			-->


<?php

?>
<div class="flex-menubutton center">
	<br>
	<div style="margin: auto; display:flex; align-items:center; justify-content:center;">
		<button type="button" onclick="location.href='player_statistics.php'">7 Dage</button>
		<button type="button" onclick="location.href='player_statistics14days.php'">14 Dage</button>
		<button type="button" onclick="location.href='player_statistics1month.php'">1 M&aring;ned</button>
		<button type="button" onclick="location.href='player_statisticsalltime.php'">Altid</button>
		</div>
	<br>
	
<table class="ex2" cellspacing="10">
  <tr>
    <td style="border: 1px solid #000; text-align: center;">Kampe Spillet <br> 4</td>
    <td style="border: 1px solid #000; text-align: center;">M&aring;l Scoret <br> 4</td>
	<td style="border: 1px solid #000; text-align: center;">R&oslash;de Kort <br> 0</td>
  </tr>
  <tr>
    <td style="border: 1px solid #000; text-align: center;">Gule Kort <br> 2</td>
    <td style="border: 1px solid #000; text-align: center;">Skader <br> 1</td>
	<td style="border: 1px solid #000; text-align: center;">Holdfremm&oslash;de <br> 72%</td>
  </tr>
  <tr>
	<td style="border: 1px solid #000; text-align: center;">Kampe Vundet <br> 4</td>
	<td style="border: 1px solid #000; text-align: center;">Kampe Tabte <br> 1</td>
	<td style="border: 1px solid #000; text-align: center;">Uafgjort <br> 1</td>
  </tr>
</table>
</div>
</body>
</html>
