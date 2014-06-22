<?
    /* hier beginnt alles */
    require_once("include/init.php");
    require_once(SEITE_PFAD."/include/content/header.php");
    if($_GET["login"] == 1)
        require_once(SEITE_PFAD."/page/partner/login.php");
    else
        require_once(SEITE_PFAD."/page/start.php");
    require_once(SEITE_PFAD."/include/content/footer.php");
?>