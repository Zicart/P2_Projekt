<?php
    if (!isset($_REQUEST['MBID'])) exit;    //Sanity check. Hvis der ikke er givet et MBID (messageboard ID nummer) via GET eller POST, så er der opstået en fejl, og handlingen stoppes.
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
            echo "Du har slået en besked op<br /><br />";
            echo "<A HREF=\"mbindex.php?MBID={$_REQUEST['MBID']}\">Tilbage til opslagstavlen</a>";
            exit;
        } else {
            echo "Der var et problem med dit opslag, prøv igen.<br /><br />";
        }
    }
?>     
<form method="post" action="post.php">
Navn: <input type="text" name="Name" /><br />
Overskrift: <input type"text" name="Title" /><br /><br />
Besked:<BR />
<textarea name="Message" rows="10" cols="40"></textarea><br /><br />
<input type="hidden" name="MBID" value="<?php echo $_REQUEST['MBID']; ?>" />
<input type="hidden" name="Parent" value="<?php echo $Parent; ?>" />
<input type="submit" value="Post" />
</form>