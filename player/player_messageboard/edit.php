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
    
    
<?php
    if (!isset($_REQUEST['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, s&aring; stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    
    $result = mysqli_query($db, "SELECT Title, Message FROM mbmsgs WHERE ID = {$_REQUEST['Msg']};");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, s&aring; stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen r&aelig;kker returneres, s&aring; stopper handlingen.
    
    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'msg');

    if (isset($_POST['Title'])) {
        $Title = mysqli_real_escape_string($db, $_POST['Title']);
        $Message = mysqli_real_escape_string($db, $_POST['Message']);
        $messageID = mysqli_real_escape_string($db, $_POST['Msg']);
    
        $result = mysqli_query($db, "UPDATE mbmsgs SET Title = '$Title', Message = '$Message' WHERE ID = $messageID;");
        if ($result) {
            echo "<div class='flex-messageboard center'>Din besked er blevet opdateret<br /><br />";
            echo "<a href=\"mbindex.php?MBID={$_REQUEST['MBID']}\">Tilbage til opslagstavlen</a></div>";
            exit;
        } else {
            echo "<div class='flex-messageboard center'> Der var et problem med dit opslag, pr&oslash;v igen.<br /><br /></div>";
        }
    }
?>
<div class="flex-messageboard center">
<form method="post" action="edit.php">
Overskrift: <input type="text" name="Title" value="<?php echo $msg_Title; ?>" /><br /><br />
Besked:<br />
<textarea name="Message" rows="10" cols="40"><?php echo $msg_Message; ?></textarea><br /><br />
<input type="hidden" name="MBID" value="<?php echo $_REQUEST['MBID']; ?>" />
<input type="hidden" name="Msg" value="<?php echo $_REQUEST['Msg']; ?>" />
<input type="submit" value="Rediger" />
</form>
</div>