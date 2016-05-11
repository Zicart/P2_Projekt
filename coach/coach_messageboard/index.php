<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Beskeder</title>
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
		<a class="btn" href="\P2_Projekt\coach\coach_teampage.php">Holdstyring</a>
		<a class="btn" href="\P2_Projekt\coach\coach_calendar.php">Kalender</a>
		<a class="btn" href="\P2_Projekt\coach\coach_statistics.php">Statistikker</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_messageboard\mbindex.php?MBID=3">Opslagstavle</a>
	</div>

	<p></p>




			<!-- Temp. debug		

			-->

<div class="flex-container-center">
	<div>
		<?php
			$db = mysqli_connect("localhost", "root", "", "mb"); //Forbindelse til databasen.
			$result = mysqli_query($db, "SELECT ID, Name FROM mblist ORDER BY Name;"); //De data jeg vil tr&aelig;kke ud. ID nr. og navn, sorteret efter navn.
			if (!mysqli_num_rows($result)) { //Sanity check. Hvis ikke der bliver udtrukket noget data.
				echo "Der er ingen opslagstavler";
			} else {
				while ($row = mysqli_fetch_assoc($result)) { //S&aring; l&aelig;nge der er data i tabellen at vise, som opfylder kriterierne.
					extract($row, EXTR_PREFIX_ALL, "mb"); //Udtr&aelig;k de data.
					echo "<div align='left'><a class='mbbutton1' href=\"mbindex.php?MBID=$mb_ID\"> $mb_Name</a><br /></div>"; //Vis dataen.
				}
			}
		?>
		<br/><br/>
		<div align="left"><a class="mbbutton2" href="create.php">Opret opslagstavle</a></div>
	</div>
</div>




</body>
</html>

