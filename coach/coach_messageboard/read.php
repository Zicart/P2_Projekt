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




			<!-- Temp. debug		

			-->
            
<?php
    if (!isset($_GET['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, s&aring; stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    $msgID = mysqli_real_escape_string($db, $_GET['Msg']);
    
    $result = mysqli_query($db, "SELECT MBID, Poster, Title, Message, DateSubmitted FROM mbmsgs WHERE ID = $msgID;");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, s&aring; stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen r&aelig;kker returneres, s&aring; stopper handlingen.
    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'msg');
    
    $msg_DateSubmitted = date("d/m/y", $msg_DateSubmitted);
    echo "<div class='flex-messageboard center'><b>Sl&aring;et op af $msg_Poster</a> den $msg_DateSubmitted<br/></div></b> ";
    echo "<div class='flex-messageboard center'>$msg_Message<br /><br /> </div>";
    echo "<div class='flex-messageboard center'><a class='mbbutton2' href=\"post.php?Parent={$_GET['Msg']}&MBID=$msg_MBID\">Svar p&aring; opslag</a>"; //For at svare p&aring; et opslag linkes der tilbage til "post.php", hvor beskedens ID sendes som "Parent" nummeret.
    echo "<a class='mbbutton2' href=\"edit.php?Msg={$_GET['Msg']}&MBID=$msg_MBID\">Rediger dette opslag</a>";
    echo "<a class='mbbutton2 disabled' >Slet dette opslag</a> </div>";
	//href=\"delete.php?Msg={$_GET['Msg']}&MBID=$msg_MBID\"
?>
