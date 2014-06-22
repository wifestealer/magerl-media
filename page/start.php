<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 24.05.14
 * Time: 02:29
 */
    require_once(SEITE_PFAD."/include/class/Jahresuebersicht.php");
    $Jahresuebericht = new Jahresuebersicht();
    $Jahresuebericht->fuegeJahreHinzu("CMS", "Programmierung", "Wordpress, Joomla, Typo3");
    $Jahresuebericht->fuegeJahreHinzu("Datenbanken", "Administration", "Sybase, MSSQL, MySQL, MongoDB, SQLLite");
    $Jahresuebericht->fuegeJahreHinzu("eCommerce", "Programmierung", "JTL-Shop3, xtc:modified");
    //$Jahresuebericht->fuegeJahreHinzu(2013, "Webentwickler", "Umsetzung von Webprojekten");
?>
<article>
    <div class="contentBox">
        <h3>Software Lösungen</h3>
        <ul id="news">
            <li>
                <p>
                    Wir entwickeln Individualsoftware, dort wo Lösungen kommerzieller Standardsoftware nicht ausreicht.
                </p>
            </li>
            <li>
                <p>
                    Unsere Philopsophie: Wir möchten dass unsere Software auch in vielen Jahren bei Ihnen
                    noch Verwendung findet. Sie stellen die Anforderungen, wir schlagen Ihnen Ideen u.
                    Vorschläge zur Optimierung vor und setzen diese im Anschluss in Absprache mit Ihnen um.
                </p>
            </li>
        </ul>
    </div>
    <div class="contentBox">
        <h3>Systeme</h3>
        <ul id="lebenslauf">
            <?php foreach($Jahresuebericht->holeElemente() as $Jahresueberblick) { ?>
            <li>
                <div class="jahr"><?php echo $Jahresueberblick->__get("Jahr"); ?></div>
                <div class="balken">
                    <div class="kugel"></div>
                    <div class="strich"></div>
                    <div class="clear"></div>
                </div>
                <div class="info">
                    <div class="strich"></div>
                    <div class="text">
                        <?php if($Jahresueberblick->__get("Titel")) { ?>
                        <div class="title"><?php echo $Jahresueberblick->__get("Titel"); ?></div>
                        <?php } ?>
                        <?php if($Jahresueberblick->__get("Aktivitaet")) { ?>
                            <div class="desc"><?php echo $Jahresueberblick->__get("Aktivitaet"); ?></div>
                        <?php } ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php
        require_once(SEITE_PFAD."/include/class/Faehigkeiten.php");
        $Faehigkeiten = new Faehigkeitenbaum();

        $Faehigkeiten->fuegeFaehigkeitHinzu("3D Modellierung", 92);
        $Faehigkeiten->fuegeFaehigkeitHinzu("Web Entwicklung", 90);
        $Faehigkeiten->fuegeFaehigkeitHinzu("Datenbank Administration", 90);
        $Faehigkeiten->fuegeFaehigkeitHinzu("Content Managment", 82);
        $Faehigkeiten->fuegeFaehigkeitHinzu("Software Entwicklung", 78);
    ?>
    <div class="contentBox">
        <h3>Faehigkeiten</h3>
        <div id="faehigkeiten">
            <?php if($Faehigkeiten->getFaehigkeiten()) { ?>
                <ul>
                <?php foreach($Faehigkeiten->getFaehigkeiten() as $Faehigkeit) { ?>
                    <li class="faehigkeit">
                        <div class="kugel"><div class="hintergrund" data-height="<?php echo $Faehigkeit->__get("Einstufung"); ?>"></div><span class="text"><?php echo $Faehigkeit->__get("Faehigkeit"); ?></span></div>
                    </li>
                <?php } ?>
                    <li class="clear"></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</article>