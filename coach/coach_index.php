<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Bedre Fodbold</title>
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

	<div class="flex-menubuttons3 center">
		<div class="flex-home"><iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=da&amp;bgcolor=%23FFFFFF&amp;src=usabilitytestb303b%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FCopenhagen" style="border-width:0" width="500" height="600" frameborder="0" scrolling="no"></iframe></div>
		<div class="flex-menuitemsin3"> Reminders:
			<form method="post" action="coach_index.php">
				<textarea name="Message" rows="10" cols="48"></textarea><br />
				<input type="submit" value="Autogenerer" class="mbbutton2" />
				<input type="submit" value="SMS" class="mbbutton2" />
				<input type="submit" value="Opslag" class="mbbutton2" />
				<input type="submit" value="Opslag og SMS" class="mbbutton2" />
			</form>
			<br />
			<div class="flex-menuitemsin2"> Spillere med lavt fremm&oslash;de: <br />
				Anders: 34% <a class="mbbutton2" href="/P2_Projekt/coach/coach_stats_players/Anders_Levorsenalltime.php">Vis spiller</a><br />
				Andreas: 32% <a class="mbbutton2" href="/P2_Projekt/coach/coach_stats_players/Andreas_Jensenalltime.php">Vis spiller</a><br />
				<a class="mbbutton2" href="/P2_Projekt/coach/coach_match_statistics.php">Vis alle spillere</a>
				
			</div>
		</div>
	</div>


			<!-- Temp. debug		

			-->


<?php

?>

</body>
</html>
