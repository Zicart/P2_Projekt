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
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\messageboard\mbindex.php?MBID=3">Opslagstavle</a>
	</div>

	<p></p>


<?php
    if (!isset($_REQUEST['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, så stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    
    function delete_message(&$Msg) {
        GLOBAL $db;

        extract($Msg, EXTR_PREFIX_ALL, 'row');
        $result = mysqli_query($db, "SELECT ID FROM mbmsgs WHERE Parent = $row_ID;");
        
        while ($row = mysqli_fetch_array($result)) {
            delete_message($row);
        }
        mysqli_query($db, "DELETE FROM mbmsgs WHERE ID = $row_ID;");
    }
    
    $result = mysqli_query($db, "SELECT Title FROM mbmsgs WHERE ID = {$_REQUEST['Msg']};");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, så stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen rækker returneres, så stopper handlingen.

    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'Msg');

    delete_message($_REQUEST['Msg']);
?>
<form method="post" action="delete.php">
<input type="hidden" name="MBID" value="<?php echo $_REQUEST['MBID']; ?>" />
<input type="hidden" name="Msg" value="<?php echo $_REQUEST['Msg']; ?>" />
<input class="mbbutton2" type="submit" value="Bekræft sletning"/>
</form>
