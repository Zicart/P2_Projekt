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
		</div>
	</div>
	
	<p></p>
	
	<div class="flex-menubuttons center">
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_teampage.php">Holdstyring</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_calendar.php">Kalender</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_statistics.php">Statistikker</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_bulletin.php">Nyheder</a>
	</div>

	<p></p>




			<!-- Temp. debug		

			-->


<?php
    $db = mysqli_connect("localhost", "root", "", "mb");
    $result = mysqli_query($db, "SELECT ID, Name FROM mblist ORDER BY Name;");
    if (!mysqli_num_rows($result)) {
        echo "Der er ingen opslagstavler";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            extract($row, EXTR_PREFIX_ALL, "mb");
            echo "<a href=\"mbindex.php?MBID=$mb_ID\"> $mb_Name</a><br />";
        }
    }
?>     
<br /><br /><a href="create.php">Opret opslagstavle</a>

</body>
</html>

