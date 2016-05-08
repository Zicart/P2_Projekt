<?php
    if (!isset($_REQUEST['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, så stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    
    $result = mysqli_query($db, "SELECT Title, Message FROM mbmsgs WHERE ID = {$_REQUEST['Msg']};");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, så stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen rækker returneres, så stopper handlingen.
    
    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'msg');

    if (isset($_POST['Title'])) {
        $Title = mysqli_real_escape_string($db, $_POST['Title']);
        $Message = mysqli_real_escape_string($db, $_POST['Message']);
        $messageID = mysqli_real_escape_string($db, $_POST['Msg']);
    
        $result = mysqli_query($db, "UPDATE mbmsgs SET Title = '$Title', Message = '$Message' WHERE ID = $messageID;");
        if ($result) {
            echo "Din besked er blevet opdateret<br /><br />";
            echo "<a href=\"mbindex.php?MBID={$_REQUEST['MBID']}\">Tilbage til opslagstavlen</a>";
            exit;
        } else {
            echo "Der var et problem med dit opslag, prøv igen.<br /><br />";
        }
    }
?>     
<form method="post" action="edit.php">
Overskrift: <input type="text" name="Title" value="<?php echo $msg_Title; ?>" /><br /><br />
Besked:<br />
<textarea name="Message" rows="10" cols="40"><?php echo $msg_Message; ?></textarea><br /><br />
<input type="hidden" name="MBID" value="<?php echo $_REQUEST['MBID']; ?>" />
<input type="hidden" name="Msg" value="<?php echo $_REQUEST['Msg']; ?>" />
<input type="submit" value="Rediger" />
</form>