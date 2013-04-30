<?php
	function BarRecherche()
	{
		?>
        <div id="intuitiveSearchBar">
            <div id="intuitiveSearchBarLangZone">
                    <a id="intuitiveSearchBarLangNonSelectedBox" href="index.php">EN</a> &nbsp;
                    <a id="intuitiveSearchBarLangSelectedBox" href="index.php">FR</a>
            </div>
            <form class="intuitiveSearchBar">
                <input name="intuitiveSearchBarFormField" type="text" placeholder="Vous agottez quoi?">
                <input name="intuitiveSearchBarFormField" type="text" placeholder="Vous agottez où?">
                <button name="buttonOkRedSquare" type="submit" >ok</button>
            </form>
        </div>
        <?php
	}
?>