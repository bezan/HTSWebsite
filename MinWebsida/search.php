<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    
    mysql_select_db("minwebsida") or die(mysql_error());
    
     
     
     
?>

<?php
include '../MinWebsida/inloggadellerinte.php'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="kristoffer" type="text/css" href="../MinWebsida/bezans.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Matchning på nätet!</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner-left" ><img src='matchbild.jpg'></div>
               <div id="banner-center" ><h1>Matchning på nätet</h1></div>
               <div id="banner-right" ><img src='matchbild2.jpg'></div>
            </div>
            <div id="left">
					<div class="dokument-item">
						Nyheter!
						Alla som är något hänger här!
					</div>
            </div>
            <div id="center">
                <div id="info">
				<h1 class="dokument-item-header"> Användare som finns på denna sidan nedan.</h1>
				<p class="info">De som finns i databasen: </p>
				<br>
				<?php
    $query = $_GET['query']; 
    
     
    $min_length = 1;
    
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
        
         
        $query = mysql_real_escape_string($query);
        
         
        $raw_results = mysql_query("SELECT * FROM user
            WHERE (`name` LIKE '%".$query."%')") or die(mysql_error());
			//lägg till alla intressen osv
                     
         
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
             
                echo "<p><h3>".$results['name']."</h3>"."</p>";
                
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
                </div>
				
				<form action="loggaut.php" method="post">
<input type="submit" Name = "Submit1" VALUE = "Logga ut">
</form>


</div>
            <div id="right">
					<form action="search.php" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
	</form>
            </div>

			<div id="footer">
				<p> &copy; 2013 Kristoffer Bresch
				</p>
			</div>
        </div>
		
    </body>
</html>

