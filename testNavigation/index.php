<?php
	include_once("init.php");
	include_once("function/variable_session.inc.php");
	include_once("function/function_navigation.inc.php");
	include_once("function/function_ariane.inc.php");
	include_once("function/function_recherchebar.inc.php");			
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test Navigation</title>
	</head>
	<body>
		 <div id="page">
        	<div id="navigation">
                <?php
					BarRecherche();
                	Ariane();
				?>
            </div>
            <img id="barre" src="img/barre.png" usemap="#nav_barre" style="margin-bottom:10px">
			<?php
                NavigationTuile();
            ?>
		</div>
	</body>
</html>