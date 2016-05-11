<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Bedre Fodbold</title>
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
				<img src="\P2_Projekt\images\profil.png" width="60" height="80" alt="">
			</a>
			<a href="\P2_Projekt\frontpage.php">
				<img src="\P2_Projekt\images\logout.png" width="80" height="40" alt="">
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

	<div class="flex-menubuttons2 center">
		<div class="flex-home"><iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=da&amp;bgcolor=%23FFFFFF&amp;src=hq7gp5ii3mm04spr9i237j4o5c%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FCopenhagen" style="border-width:0" width="500" height="600" frameborder="0" scrolling="no"></iframe></div>
		<div class="flex-menuitemsin">
			<p style="margin-left: 15%; ">Andreas Jensen <button class="button button5" type="button" onclick="location.href='/P2_Projekt/player/player_stats_players/Andreas_Jensenalltime.php'">Se statistik</button> </p>
			
			<table>
				<tr>
					<td><p style="margin-left:15%; margin-top: 10%; font-size: 20px;">Fremmøde</p></td>
					<td><p style="margin-left:15%; margin-top: 10%; font-size: 20px;">Holdgennemsnit</p></td>
				</tr>
				<tr>
				<td>
					<div class="container">
						<div id="activeBorder" class="active-border">
							<div id="circle" class="circle">
							<span class="prec 270" id="prec">89%</span>
							</div>
						</div>
					</div>
				</td>
				<td>
					<div class="container2">
						<div id="activeBorder" class="active-border">
							<div id="circle2" class="circle2">
							<span class="prec 270" id="prec">70%</span>
							</div>
						</div>
					</div>
				</td>
				</tr>
			</table>
			
		</div>
	</div>


			<!-- Temp. debug		

			-->


<?php

?>

</body>
</html>
