function test($IdAChercher, $NbColonneMax, $NbLigneMax)
{
	var $connect=mysql_connect("localhost","greg","123");
	var $ok=mysql_select_db("geo_area",connect);
	
	var $Resultat=mysql_query("SELECT *
							  FROM GEO_AREA
							  WHERE Geo_Area_Id IN
								(SELECT Geo_Area_Down
								 FROM GEO_AREA_LINK
								 WHERE Geo_Area_Up = 'IdAChercher')");
	$NbLignes=mysql_num_rows($Resultat);
	
	if($NbLignes == 0)
	{
		echo "Pas de résultats.";
	}
	else
	{
		echo "<table id='tabSousCat'><tr><td>";
		var $colonne=1;
		var $ligne=1;
		
		while($row=mysql_fetch_assoc($Resultat)
		{
			$colonne++;
			
			if($colonne==$NbColonneMax)
			{
				$colonne=1;
				$ligne++;
				echo "</td><tr>";
				if ($ligne==$NbLigneMax)
				{
					$ligne=1;
					echo "</table></li><li><table id='tabSousCat'>";
				}
				echo "<tr>"
			}
			else
			{
				echo"</td><td>";
			}
			echo $row["Geo_Area_Nom"];
		}
		echo "</td></tr></table>";
	}			
}