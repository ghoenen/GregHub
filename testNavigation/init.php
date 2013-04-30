<meta charset="utf-8">

<link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />
<link type="text/css" rel="stylesheet" href="css/tipsy.css" />
<link type="text/css" rel="stylesheet" href="css/navigation.css" />
<link type="text/css" rel="stylesheet" href="css/fil_ariane.css" />
<link type="text/css" rel="stylesheet" href="css/bar_recherche.css" />

<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/mousewheel.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
     $(function() {
       $('#img_barre1').tipsy({fade: true, gravity: 's-e'});
       $('#img_barre2').tipsy({fade: true, gravity: 's'});
       $('#img_barre3').tipsy({fade: true, gravity: 's-w'});
     });
</script>

<map name="nav_barre">
    <area id="img_barre1" title="Choisir une catégorie" shape="circle" coords="59,18,18" href="?quoi=0&numlevelquoi=0">
    <area id="img_barre2" title="Choisir un lieu" shape="circle" coords="306,18,18" href="?ou=0&numlevelou=0">
    <area id="img_barre3" title="Lancer la recherche" shape="circle" coords="560,18,18" href="pub.php">
</map>
