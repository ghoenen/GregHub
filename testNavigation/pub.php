<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
	<?php
		$connect=mysql_connect("localhost","greg","123") or die("Problème de connection<br/>\n");
		
		$ok=mysql_select_db("geo_area",$connect) or die(mysql_error());
		
		
		$ResultatOu=mysql_query("SELECT *
							  FROM GEO_AREA
							  WHERE Geo_Area_Id=".$_SESSION['ou']) or die(mysql_error());
							  
		$ok=mysql_select_db("category",$connect) or die(mysql_error());
							  
		$ResultatQuoi=mysql_query("SELECT *
							  FROM CATEGORY
							  WHERE category_Id=".$_SESSION['quoi']) or die(mysql_error());
								 
		echo "affichage des pubs !!!!!".mysql_result($ResultatOu, 0, "Geo_Area_Name")." + ".mysql_result($ResultatQuoi, 0, "Category_Name");
    ?>
</body>
</html>
