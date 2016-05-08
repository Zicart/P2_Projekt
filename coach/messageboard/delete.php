<?php
    if (!isset($_REQUEST['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, så stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    
    function delete_message(&$msg) {
        GLOBAL $db;

        extract($msg, EXTR_PREFIX_ALL, 'row');
        $result = mysqli_query($db, "SELECT ID FROM mbmsgs WHERE Parent = $row_ID;");
        
        while ($row = mysqli_fetch_array($result)) {
            delete_message($row);
        }
        mysqli_query($db, "DELETE FROM mbmsgs WHERE ID = $row_ID;");
    }
    
    $result = mysqli_query($db, "SELECT Title, Password FROM mbmsgs WHERE ID = {$_REQUEST['Msg']};");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, så stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen rækker returneres, så stopper handlingen.

    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'msg');
?>

<form method="post" action="delete.php">
<input type="hidden" name="MBID" value="<?php echo $_REQUEST['MBID']; ?>" />
<input type="hidden" name="Msg" value="<?php echo $_REQUEST['Msg']; ?>" />
<input type="submit" value="Bekræft sletning"/>
</form>