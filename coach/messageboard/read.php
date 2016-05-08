<?php
    if (!isset($_GET['Msg'])) exit; //Sanity check. Hvis $Msg ikke er sat, s� stopper handlingen.
    $db = mysqli_connect("localhost", "root", "", "mb");
    $msgID = mysqli_real_escape_string($db, $_GET['Msg']);
    
    $result = mysqli_query($db, "SELECT MBID, Poster, Title, Message, DateSubmitted FROM mbmsgs WHERE ID = $msgID;");
    if (!$result) exit; //Sanity check. Hvis hentningen af data ikke virker, s� stopper handlingen.
    if (!mysqli_num_rows($result)) exit; //Sanity check. Hvis ingen r�kker returneres, s� stopper handlingen.
    extract(mysqli_fetch_array($result), EXTR_PREFIX_ALL, 'msg');
    
    $msg_DateSubmitted = date("d/m/y", $msg_DateSubmitted);
    echo "Sl�et op af $msg_Poster</a> den $msg_DateSubmitted<br />";
    echo "$msg_Message<br /><br />";
    echo "<a href=\"post.php?Parent={$_GET['Msg']}&MBID=$msg_MBID\"> Svar p� opslag</a>"; //For at svare p� et opslag linkes der tilbage til "post.php", hvor beskedens ID sendes som "Parent" nummeret.
    echo "<a href=\"edit.php?Msg={$_GET['Msg']}&MBID=$msg_MBID\">Rediger dette opslag</a>";
    echo "<a href=\"delete.php?Msg={$_GET['Msg']}&MBID=$msg_MBID\">Slet dette opslag</a>";
?>