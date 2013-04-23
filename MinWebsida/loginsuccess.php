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
        <title>Lek - lärare elev kommunikation!</title>	
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
					</div>
            </div>
            <div id="center">
                <div id="info">
				<h1 class="dokument-item-header"> Lista över elever</h1>
				<p class="info">Detta är en lista över vilka elver som finns på skolan.</p>
                </div>
				
				<form action="loggaut.php" method="post">
<input type="submit" Name = "Submit1" VALUE = "Logga ut">
</form>
</div>
            <div id="right">
					Diverse länkar
            </div>

			<div id="footer">
				<p> &copy; 2013 Kristoffer Bresch
				</p>
			</div>
        </div>
    </body>
</html>