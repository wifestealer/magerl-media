<html>
    <head>
        <meta charset="utf-8">
        <script src="<? echo SEITE_URL; ?>js/jquery.1.83.min.js"></script>
        <script src="<? echo SEITE_URL; ?>js/custom.js"></script>
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
    <header>
        <div id="rechtebox" class="container">
            <div id="logoBox">
                <!--<img src="<? echo SEITE_URL; ?>/img/uebermich-paarfoto.png" alt="Logobild" title="Ich & Natascha">-->
            </div>
            <div class="titelBox">
                <p>Anwendungsentwicklung by Karl Magerl</p>
                <h1 id="seitenTitel">Magerl Media</h1>
            </div>
        </div>

        <nav id="navigation">
            <ul>
                <li><a href="<? echo SEITE_URL; ?>/ueber-mich">Ueber mich</a></li>
                <li><a href="<? echo SEITE_URL; ?>/werdegang">Werdegang</a></li>
                <li><a href="<? echo SEITE_URL; ?>/kontakt">Kontakt</a></li>
                <li>
                    <a href="<? echo SEITE_URL; ?>/kontakt">Downloads</a>
                    <ul class="subnavigation">
                        <li><a href="<?php echo SEITE_URL; ?>/downloads/plugins">Plugins</a></li>
                        <li><a href="<?php echo SEITE_URL; ?>/downloads/plugins">Modelierungen</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <aside class="container" id="contentbox">