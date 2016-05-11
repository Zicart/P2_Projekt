<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>Beskeder</title>
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


<?php
    if (!isset($_REQUEST['MBID'])) exit;    //Sanity check. Hvis der ikke er givet et MBID (messageboard ID nummer) via GET eller POST, s&aring; er der opst&aring;et en fejl, og handlingen stoppes.
    if (!isset($_REQUEST['Parent'])) { 
        $Parent = 0;
    } else {
        $Parent = $_REQUEST['Parent'];
    }
    
    if (isset($_POST['Title'])) {
        $db = mysqli_connect("localhost", "root", "", "mb");
        
        $Name = mysqli_real_escape_string($db, $_POST['Name']);
        $Title = mysqli_real_escape_string($db, $_POST['Title']);
        $Message = mysqli_real_escape_string($db, $_POST['Message']);
        $CurrentTime = time();
    
        $result = mysqli_query($db, "INSERT INTO mbmsgs (MBID, Parent, Poster, Title, Message, DateSubmitted) VALUES ({$_REQUEST['MBID']}, $Parent, '$Name', '$Title', '$Message', $CurrentTime);");
        if ($result) {
            echo "<div class='flex-messageboard center'>Du har sl&aring;et en besked op<br /><br /></div>";
            echo "<div class='flex-messageboard center'><a class='mbbutton2' href=\"mbindex.php?MBID={$_REQUEST['MBID']}\">Tilbage til opslagstavlen</a></div>";
            exit;
        } else {
            echo "<div class='flex-messageboard center'>Der var et problem med dit opslag, pr&oslash;v igen.<br /><br /></div>";
        }
    }
?>
<div class="flex-messageboard center">
<form method="post" action="post.php">
Navn: <input type="text" name="Name" /><br />
Overskrift: <input type"text" name="Title" /><br /><br />
Besked:<BR />
<textarea name="Message" rows="10" cols="40"></textarea><br /><br />
<input type="hidden" name="MBID" value="<?php echo $_REQUEST['MBID']; ?>" />
<input type="hidden" name="Parent" value="<?php echo $Parent; ?>" />
<input type="submit" value="Post" />
</form>
</div>