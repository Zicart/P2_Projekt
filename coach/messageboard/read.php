<?php
    if (!isset($_GET['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, så stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    $msgID = mysqli_real_escape_string($db, $_GET['Msg']);
    
    $result = mysqli_query($db, "SELECT MBID, Poster, Title, Message, DateSubmitted FROM mbmsgs WHERE ID = $msgID;");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, så stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen rækker returneres, så stopper handlingen.
    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'msg');
    
    $msg_DateSubmitted = date("d/m/y", $msg_DateSubmitted);
    echo "Slået op af $msg_Poster</a> den $msg_DateSubmitted<br />";
    echo "$msg_Message<br /><br />";
    echo "<a href=\"post.php?Parent={$_GET['Msg']}&MBID=$msg_MBID\"> Svar på opslag</a>"; //For at svare på et opslag linkes der tilbage til "post.php", hvor beskedens ID sendes som "Parent" nummeret.
    echo "<a href=\"edit.php?Msg={$_GET['Msg']}&MBID=$msg_MBID\">Rediger dette opslag</a>";
    echo "<a href=\"delete.php?Msg={$_GET['Msg']}&MBID=$msg_MBID\">Slet dette opslag</a>";
?>