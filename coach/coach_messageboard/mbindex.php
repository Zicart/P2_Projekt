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
            
<div class="flex-messageboard center">
<?php
    if (!isset($_GET['MBID'])) exit;
    $db = mysqli_connect("localhost", "root", "", "mb");
    
    function showpost(&$parent) {
        GLOBAL $db;

        $mbID = mysqli_real_escape_string($db, $_GET['MBID']);

        extract($parent, EXTR_PREFIX_ALL, "msg");
        $msg_DateSubmitted = date("d/m/y", $msg_DateSubmitted);
        echo "<div class='font12'><a class='mbbutton2' href=\"read.php?Msg=$msg_ID\">$msg_Title</a> sl&aring;et op af $msg_Poster den $msg_DateSubmitted</div></br>";
        $result = mysqli_query($db, "SELECT ID, Title, Poster, DateSubmitted FROM mbmsgs WHERE MBID = $mbID AND Parent = $msg_ID ORDER BY DateSubmitted DESC;");
    
		//S&oslash;rger for at alle svar til et opslag er indenteret
        if (mysqli_num_rows($result)) {
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                showpost($row);
            }
            echo "</ul>";
        }
    }
    
    $mbID = mysqli_real_escape_string($db, $_GET['MBID']);
    $result = mysqli_query($db, "SELECT ID, Title, Poster, DateSubmitted FROM mbmsgs WHERE MBID = $mbID AND Parent = 0 ORDER BY DateSubmitted DESC;");
    if (!$result) exit;
    if (!mysqli_num_rows($result)) {
        echo "Denne opslagstavle har ingen opslag.";
    } else {
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            showpost($row);
        }
        echo "</ul>";
    }
?>
</div>
<div class="flex-messageboard center">
<a class="mbbutton2" href="post.php?MBID=<?php echo $_GET['MBID']; ?>">Skriv nyt opslag</a>
</div>

</body>
</html>

