<?php
	function NavigationTuile ()
	{
		if(!isset($_GET['quoi']))
			if (!isset($_GET['ou']))
				AffichageCategorie($_SESSION['quoi']);
			else
				AffichageLieu($_SESSION['ou']);
		else
			AffichageCategorie($_SESSION['quoi']);
	}

	function AffichageLieu ($id_Area)
	{
		$connect=mysql_connect("localhost","greg","123") or die("Problème de connection<br/>\n");
		
		$ok=mysql_select_db("geo_area",$connect) or die(mysql_error());
		
		$Resultat=mysql_query("SELECT *
							  FROM GEO_AREA
							  WHERE Geo_Area_Id IN
								(SELECT Geo_Area_Down_Id
								 FROM   GEO_AREA_LINK
								 WHERE  Geo_Area_Up_Id = $id_Area)
								 ORDER BY Geo_Area_Name") or die(mysql_error());
		Affichage($Resultat,"ou", $id_Area);
	}

	function AffichageCategorie($id_quoi )
	{
		
		$connect=mysql_connect("localhost","greg","123") or die("Problème de connection<br/>\n");
		
		$ok=mysql_select_db("category",$connect) or die(mysql_error());
		
		$Resultat=mysql_query("SELECT *
							  FROM CATEGORY
							  WHERE category_id IN
								(SELECT category_down_id
								 FROM   CATEGORY_LINK
								 WHERE  category_up_id = $id_quoi)") or die(mysql_error());			 
		Affichage($Resultat, "quoi", $id_quoi );
	}

	function Affichage($Resultat, $type, $id_Original )
	{
		$NbLignes=mysql_num_rows($Resultat);
		
		if($NbLignes == 0)
		{
			if ($type =="quoi")
				header("Location: index.php?ou=".$_SESSION['ou']);
			else
				header("Location: pub.php");
		}
		else
		{
			if ( mysql_result($Resultat,0,5) == "subCatBlockCell")
				$NbAffichageMax = 24;
			else
				$NbAffichageMax = 20;
			?>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#slider').rhinoslider({
						effectTime: 300,
						controlsPlayPause: false,
						showBullets: 'always',
						slidePrevDirection: 'toRight',
						slideNextDirection: 'toLeft',
						cycled: false,
						<?php if ($NbLignes < $NbAffichageMax) {?>
							controlsPrevNext: false,
						<?php } ?>
					});
				});
			</script>
			<?php
		
			
			echo "<ul id='slider'><li>";
			$affich=0;
			
			for($i=0;$i<$NbLignes;$i++)
			{
				if($affich==$NbAffichageMax)
				{
					echo "</li><li>";
					$affich=0;
				}
				else
				{
					$affich++;
				}
				$color=mysql_result($Resultat, $i, 4);
				$nom=mysql_result($Resultat, $i, 1);
				$id=mysql_result($Resultat, $i, 0);
				$style=mysql_result($Resultat, $i, 5);
				
				
				if ( $style == "catBlockCell")
					echo "<a id='catBlockCellTxt' href='?$type=$id&numlevel$type=".($_SESSION['numlevel'.$type]+1)."'><div 			id='$style' style='background-color:#$color'>$nom</div></a>";
				else
					echo "<a id='subCatBlockCellTxt' href='index.php?$type=$id&numlevel$type=".($_SESSION['numlevel'.$type]+1)."'><div id='$style' style='border-color:#$color'><div id='subCatBlockCellIco' style='background-color:#$color'></div>$nom</div></a>";	
			}
			echo "</li></ul>";
		}			
		mysql_close();
	}
?>