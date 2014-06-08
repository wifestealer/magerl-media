<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 23.05.14
 * Time: 20:34
 */

class Funktionen {
    public function holeStylesheets($type = "screen") {
        $obj = array_diff(scandir(SEITE_PFAD."/css/".$type), array("..", "."));
        $Stylesheets = array();

        foreach($obj as $css) {
            array_push($Stylesheets, SEITE_URL."/css/".$type."/".$css);
        }
        return $Stylesheets;
    }
} 