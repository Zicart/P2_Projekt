<?php
    if (!empty($_POST['Name'])) {
        $db = mysqli_connect("localhost", "root", "", "mb");
        $Name = mysqli_real_escape_string($db, $_POST['Name']);
        $result = mysqli_query($db, "INSERT INTO mblist (Name) VALUES ('$Name');");
    
        if ($result) {
            echo "Du har nu oprettet en opslagstavle.<br /><br />";
            echo "<a href=\"index.php\">Tilbage til opslagstavle index</a>";
            exit;
        } else {
            echo "Der er opstået en fejl, prøv venligst igen.<br /><br />";
        }
    }
?>     
<form method="post" action="create.php">
Navn: <input type="text" name="Name" /><br />
<input type="submit" value="Opret" />
</form>
<a href="index.php">Tilbage</a>