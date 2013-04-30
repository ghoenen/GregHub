<?php
	
	function Ariane()
	{	
		$connect=mysql_connect("localhost","greg","123") or die("Problème de connection<br/>\n");
		if (isset( $_GET['quoi'])) $_SESSION['quoi']=$_GET['quoi'];
		if (isset( $_GET['ou'])) $_SESSION['ou']=$_GET['ou'];
		if (isset($_GET['numlevelou'])) $_SESSION['numlevelou'] = $_GET['numlevelou'];
		if (isset($_GET['numlevelquoi'])) $_SESSION['numlevelquoi'] = $_GET['numlevelquoi'];
				
		
		?>
        <div id="filAriane">
            <div id="filArianeZoneQuoi">	
            	<div id="filArianeZoneTitle"><img src="img/triangle-agotte.gif"> QUOI ?</div>
                <div id="filArianeZoneNaviQuoi"> <?php ArianeQuoi($connect, $_SESSION['quoi']); ?></div>					
            </div>
            <div id="filArianeZoneOu">		
            	<div id="filArianeZoneTitle"><img src="img/triangle-agotte.gif"> OU ?</div> 
                <div id="filArianeZoneNaviOu"><?php ArianeOu($connect, $_SESSION['ou']); ?></div>
            </div>
        </div>
        <?php
		
		mysql_close($connect);
	}
	
	
	function ArianeOu($connect, $id)
	{
		$ok=mysql_select_db("geo_area",$connect) or die(mysql_error());

		$lvl = $_SESSION['numlevelou'];
		
			
		for ($i = $lvl+1; $i <6; $i++)
		{
			$_SESSION["levelou".$i]="";
		}
	
		$Resultat=mysql_query("SELECT *
							  FROM GEO_AREA
							  WHERE Geo_Area_Id = $id");
							  
		$_SESSION["levelou$lvl"]="<a id='lien' href='?ou=$id&numlevelou=$lvl' style='color:black'>".
		mysql_result($Resultat,0,'Geo_Area_Name')."</a>";
						  
		$_SESSION["levelou"]=$_SESSION["levelou0"];
					  
		for ($i = 1; $i <= $lvl; $i++)
		{
			$_SESSION["levelou"]= $_SESSION["levelou"]." > ".$_SESSION["levelou$i"];
		}						
		
		echo $_SESSION["levelou"];
	}
	
	function ArianeQuoi($connect, $id)
	{
		$ok=mysql_select_db("category",$connect) or die(mysql_error());

		$lvl = $_SESSION['numlevelquoi'];
		
			
		for ($i = $lvl+1; $i <4; $i++)
		{
			$_SESSION['levelquoi'.$i]="";
		}
	
		$Resultat=mysql_query("SELECT *
							  FROM CATEGORY
							  WHERE Category_Id = $id");
							  
		$_SESSION['levelquoi'.$lvl]="<a id='lien' href='?quoi=$id&numlevelquoi=$lvl' style='color:black'>".
		mysql_result($Resultat,0,'Category_Name')."</a>";
						  
		$_SESSION['levelquoi']=$_SESSION['levelquoi0'];
		
				  
		for ($i = 1; $i <= $lvl; $i++)
		{
			$_SESSION['levelquoi']= $_SESSION['levelquoi']." > ".$_SESSION['levelquoi'.$i];
		}						
		
		echo $_SESSION['levelquoi'];
	}
	
?>