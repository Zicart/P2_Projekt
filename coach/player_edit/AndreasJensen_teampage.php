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
    
    //********************** ER DER TRYKKET PÅ SLET? **********************
    
    /*Tjekker om der er trykket p&aring; en "Delete" knap. Hvis der trykkes p&aring; en delete knap
     *f&aring;r det tilh&oslash;rende hidden felt ("brugernavn") en v&aelig;rdi, nemlig brugernavnet for
     *den p&aring;g&aelig;ldende bruger.
    */
    if(isset($_POST['delete_user'])){
        $brugernavn = $_POST['delete_user'];
        $delete_query = "DELETE FROM users WHERE ID_number=" . "'" . $ID_number . "'";
    
        $result = mysqli_query($connection, $delete_query);
        
        if(!$result){
             die ("Sletning ikke foretaget: " . mysqli_connect_error());
        }
    }
    
    
    //********************** FREMSØG ALLE RÆKKER **********************
       //Angiver en streng som definerer, hvilken query der skal udf&oslash;res
       $fetch_query = "SELECT * FROM users WHERE name='Andreas Jensen'";   //HER HER HER HER HER HER HER HER HER HER//
              
       //Udtr&aelig;k resultaterne (som defineret via $fetch_query)
       $result = mysqli_query($connection, $fetch_query);
       
       //Tjek om foresp&oslash;rgslen blev udf&oslash;rt, i s&aring; fald vil $result best&aring; af en reference til resultatet
       if(!$result){
        die ("Database adgang n&aelig;gtet: " . mysqli_connect_error());
       }
       
       //T&aelig;ller hvor mange r&aelig;kker, der findes i tabellen (referer til $results, som indeholder SQL s&oslash;geresultatet)
       $rows = mysqli_num_rows($result);
       
       //Konverterer SQL resultatet til et PHP array (associativt, 2-dimensionalt)
       $fetched_array = mysqli_fetch_all($result, MYSQL_ASSOC);

    //********************** INDSÆT RÆKKER I TABEL + EN MINI FORM TIL HVER RÆKKE **********************
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
				<img src="\P2_Projekt\images\profil.png" width="60" height="80" alt="">
			</a>
			<a href="\P2_Projekt\frontpage.php">
				<img src="\P2_Projekt\images\logout.png" width="80" height="40" alt="">
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

<!--		<div class="flex-menubuttons center">
		<div class="flex-homes">
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_teampage.php">Anders L.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\AndreasJensen_teampage.php">Andreas J.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\ChristianOlesen_teampage.php">Christian O.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\ClausLund_teampage.php">Claus L.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\JeppePedersen_teampage.php">Jeppe P.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\JesperMikaelsen_teampage.php">Jesper M.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\MadsAndersen_teampage.php">Mads A.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\MichaelLund_teampage.php">Michael L.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\MortenPetersen_teampage.php">Morten P.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\OliverHansen_teampage.php">Oliver H.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\PeterRasmussen_teampage.php">Peter R.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\SimonFrederiksen_teampage.php">Simon F.</a>
		</div>
		<div class="flex-menuitemsins">
			<div style="background-color:#f4f4f4; height: 400px; width: 970px;">
		<table>
				<tr>
					<td>Nu virker det sgu vist</td>
					<td>Hvor er jeg egentlig dygtig</td>
				</tr>
				
			</table>	
			</div>
			
		</div>
	</div>-->


			<!-- Temp. debug		

			-->

<div id="Contents" class="flex-container-center" style="margin-top: 15px;">
        <div id="divAs" >
        <div class="flex-homes">
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\coach_teampage.php">Anders L.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\AndreasJensen_teampage.php">Andreas J.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\ChristianOlesen_teampage.php">Christian O.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\ClausLund_teampage.php">Claus L.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\JeppePedersen_teampage.php">Jeppe P.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\JesperMikaelsen_teampage.php">Jesper M.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\MadsAndersen_teampage.php">Mads A.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\MichaelLund_teampage.php">Michael L.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\MortenPetersen_teampage.php">Morten P.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\OliverHansen_teampage.php">Oliver H.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\PeterRasmussen_teampage.php">Peter R.</a>
		<a class="flex-menuitem btn" href="\P2_Projekt\coach\player_edit\SimonFrederiksen_teampage.php">Simon F.</a>
		</div>
        </div>
        <div id="divBs">
					<div style="float: right;">	
                        <form name="edit" action="AndreasJensen_teampageedit.php" method="post"> <!-- HER HER HER HER HER HER HER HER   -->
                            <input class="button button5" type="submit" value="Rediger">
                            <input type="hidden" name="edit_user" value="<?php echo $fetched_array[$i]['name'] ?>">
                        </form>
					</div>
            <table>

            <?php
            for($i = 0; $i < $rows; $i++){ ?>
                 <tr>
                    <td><p><b>Navn:</b><?php echo $fetched_array[$i]['name'] ?></p> </td>
					 
				 </tr>
				 <tr>
                    <td><p><b>Alder:</b><?php echo $fetched_array[$i]['age'] ?></p> </td>
				 </tr>
				 <tr>
                    <td><p><b>F&oslash;dselsdag: </b> <?php echo $fetched_array[$i]['birthdate'] ?> </p></td>
				</tr>
				 <tr>
                    <td><p><b>Mobil nummer: </b><?php echo $fetched_array[$i]['number'] ?> </p></td>
				</tr>
				 <tr>
					<td><p><b>Email: </b><?php echo $fetched_array[$i]['email'] ?> </p></td>
				</tr>
				 <tr>
					<td><b>Bem&aelig;rkning: </b></td>
				 </tr>
				 <tr>
					<td valign="top" align= "left" style="border:1px solid #525252; width: 500px; height: 200px;"><?php echo $fetched_array[$i]['describtion'] ?></td>
				</tr>


            <?php } ?>
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
