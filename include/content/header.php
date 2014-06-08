<html>
    <head>
        <?
            foreach($GLOBALS["Funktionen"]->holeStylesheets("screen") as $Stylesheet) {
                echo '<link rel="stylesheet" type="text/css" href="'.$Stylesheet.'" media="screen">';
            }
        ?>
    </head>
<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 23.05.14
 * Time: 20:12
 */
?>
<body class="blue-bg">
    <div id="logo">
        <div class="wrapper">
            <img src="<? echo SEITE_URL; ?>/img/uebermich-paarfoto.png" alt="Logobild" title="Ich & Natascha">
        </div>
    </div>

    <header>
        <div class="wrapper">
            <div class="titelBox">
                <h1 id="seitenTitel">Magerl Media</h1>
                <p>Anwendungsentwicklung by Karl Magerl</p>
            </div>
            <nav id="navigation">
                <ul>
                    <li><a href="<? echo SEITE_URL; ?>/ueber-mich">Ueber mich</a></li>
                    <li><a href="<? echo SEITE_URL; ?>/werdegang">Werdegang</a></li>
                    <li><a href="<? echo SEITE_URL; ?>/kontakt">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>