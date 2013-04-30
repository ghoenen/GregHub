<?php
	session_start();
	if ( !isset ($_SESSION['quoi'])) $_SESSION['quoi'] = 0;
	if ( !isset ($_SESSION['ou'])) $_SESSION['ou'] = 0;
	
	if ( !isset ($_SESSION['levelquoi'])) $_SESSION['levelquoi'] 
			= "<a id='lien' href='index.php?quoi=0' style='color:black'>Catégorie</a>";	
		if ( !isset ($_SESSION['levelquoi0'])) $_SESSION['levelquoi0']
				="<a id='lien' href='index.php?quoi=0&?numlevelquoi=0' style='color:black'>Catégorie</a>";	
		if ( !isset ($_SESSION['levelquoi1'])) $_SESSION['levelquoi1']="";
		if ( !isset ($_SESSION['levelquoi2'])) $_SESSION['levelquoi2']="";
		if ( !isset ($_SESSION['levelquoi3'])) $_SESSION['levelquoi3']="";
		
		
	if ( !isset ($_SESSION['levelou'])) $_SESSION['levelou']
			= "<a id='lien' href='index.php?ou=0&?numlevelou=0' style='color:black'>MONDE</a>";
		if ( !isset ($_SESSION['levelou0'])) $_SESSION['levelou0']
				="<a id='lien' href='index.php?ou=0&?numlevelou=0' style='color:black'>MONDE</a>";
		if ( !isset ($_SESSION['levelou1'])) $_SESSION['levelou1']="";
		if ( !isset ($_SESSION['levelou2'])) $_SESSION['levelou2']="";
		if ( !isset ($_SESSION['levelou3'])) $_SESSION['levelou3']="";
		if ( !isset ($_SESSION['levelou4'])) $_SESSION['levelou4']="";
		if ( !isset ($_SESSION['levelou5'])) $_SESSION['levelou5']="";
	
	
	if ( !isset ($_SESSION['numlevelquoi'])) $_SESSION['numlevelquoi'] = 0;
	if ( !isset ($_SESSION['numlevelou'])) $_SESSION['numlevelou'] = 0;
?>