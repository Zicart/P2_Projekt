<?php


    //********************** OPSÆTNING AF DB **********************
        $db_hostname = 'localhost';
		$db_database = 'prog';
		$db_username = 'root';
		$db_password = '';
    $connection = mysqli_connect($db_hostname, $db_username, $db_password);
    
    //Hvis forbindelsen ikke kunne oprettes til DB
    if(!$connection) {
        die("Kan ikke forbinde til MySQL: " . mysqli_connect_error());
    }
    
      
    $selected_db = mysqli_select_db($connection, $db_database);
    
    if(!$selected_db){
        die("Kunne ikke v&aelig;lge database: " . mysqli_connect_error());
    }

    //********************** HVIS DER ER TRYKKET PÅ GEM, SÅ SKRIV TIL DB OG RETURNER TIL SIDEN edit_data.php **********************
    if(isset($_POST['saved'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $birthdate = $_POST['birthdate'];
        $number = $_POST['number'];
		$email = $_POST['email'];
		$describtion = $_POST['describtion'];
        
        $insert_query = "UPDATE users SET " . "name=" . "'" . $name . "'" . ", " . "age=" . "'" . $age . "'" . ", " . "birthdate=" . "'" . $birthdate . "'" . "," . "number=" . "'" . $number . "'" . ", " . "email=" . "'" . $email . "'" . ", " . "describtion=" . "'" . $describtion . "'" . " WHERE " . "name=" . "'" . $name . "'";
        
        $result = mysqli_query($connection, $insert_query);
       
            //Tjek om foresp&oslash;rgslen blev udf&oslash;rt, i s&aring; fald vil $result best&aring; af en reference til resultatet
            if(!$result){
                die ("Database adgang n&aelig;gtet: " . mysqli_connect_error());
            }
            
        header( 'Location: MichaelLund_teampage.php' ) ;  //HEr HER HER HER HER HER HER HER HER HER
       }
    
    
    //********************** FREMSØG RÆKKE MED VALGT BRUGER **********************
    
        $name = $_POST['edit_user'];
    
       //Angiver en streng som definerer, hvilken query der skal udf&oslash;res
       $fetch_query = "SELECT * FROM users WHERE name='Michael Lund'"; //HER HER HER HER HER HER HER HER
              
       //Udtr&aelig;k resultatet (som defineret via $fetch_query)
       $result = mysqli_query($connection, $fetch_query);
       
       //Tjek om foresp&oslash;rgslen blev udf&oslash;rt, i s&aring; fald vil $result best&aring; af en reference til resultatet
       if(!$result){
        die ("Database adgang n&aelig;gtet: " . mysqli_connect_error());
       }
       
       //Konverterer SQL resultatet til et PHP array (associativt, 2-dimensionalt)
       $fetched_array = mysqli_fetch_all($result, MYSQL_ASSOC);
       
    //********************** INDSÆT RÆKKE I TABEL + INDSÆT VÆRDIER I  INPUT FELTERNE **********************
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="da">

<html>
<head>
	<title>*Navn p&aring; hold*</title>
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

<div id="Contents" class="flex-container-center" style="margin-top: 15px;">
        <div id="divAs" >
        <div class="flex-homes">
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\coach_teampage.php">Anders L.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\AndreasJensen_teampage.php">Andreas J.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\ChristianOlesen_teampage.php">Christian O.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\ClausLund_teampage.php">Claus L.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\JeppePedersen_teampage.php">Jeppe P.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\JesperMikaelsen_teampage.php">Jesper M.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\MadsAndersen_teampage.php">Mads A.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\MichaelLund_teampage.php">Michael L.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\MortenPetersen_teampage.php">Morten P.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\OliverHansen_teampage.php">Oliver H.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\PeterRasmussen_teampage.php">Peter R.</a>
		<a class="flex-menuitem2 btn" href="\P2_Projekt\coach\player_edit\SimonFrederiksen_teampage.php">Simon F.</a>
		</div>
        </div>
        <div id="divBs">
			 <form action="MichaelLund_teampageedit.php" method="post">  <!-----HER HER HER HER HER HER HER HER HER HER HER HER --->
			<input type="hidden" name="saved" value="yes">
            <input class="button button5" type="submit" value="Gem">

        <table>
                 <tr>
                    <td><p><b>Navn:</b><input type="text" name="name" value="<?php echo $fetched_array[0]['name'] ?>"></p> </td>
					 
				 </tr>
				 <tr>
                    <td><p><b>Alder:</b><input type="text" name="age" value="<?php echo $fetched_array[0]['age'] ?>"></p> </td>
				 </tr>
				 <tr>
                    <td><p><b>F&oslash;dselsdag: </b> <input type="text" name="birthdate" value="<?php echo $fetched_array[0]['birthdate'] ?>"> </p></td>
				</tr>
				 <tr>
                    <td><p><b>Mobil nummer: </b><input type="text" name="number" value="<?php echo $fetched_array[0]['number'] ?>"> </p></td>
				</tr>
				 <tr>
					<td><p><b>Email: </b><input type="text" name="email" value="<?php echo $fetched_array[0]['email'] ?>"> </p></td>
				</tr>
				 <tr>
					<td><b>Bem&aelig;rkning: </b></td>
				 </tr>
				 <tr>
					<td valign="top" align= "left" style="border:1px solid #525252; width: 500px; height: 200px;"><input type="text" size="100" name="describtion" value="<?php echo $fetched_array[0]['describtion'] ?>"></td>
				</tr>

            </table>    

    
<?php

    //********************** LUK DB FORBINDELSE **********************

    mysqli_close($connection);
?>
            		   
        </div>
    </div>
<?php

?>

</body>
</html>
