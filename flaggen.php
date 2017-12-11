<?php

require_once './Interfaces/FlagInterface.php';
require_once './Flags/Abstractflag.php';
require_once './Flags/TriangleFlag.php'
use \HTL3R\Flags\Flags\Abstractflag as AbstractFlag;
use \HTL3R\Flags\FlagInterface as FlagInterface;
use HTL3R\Flags\TriangleFlag as TriangleFlag;
use HTL3R\Flags\RectangleFlag as RectangleFlag;






    $myFlag = new ReactangleFlag("England", 24.0, 2,0.5, 1,"#F00");
    echo $myFlag;


/*
    echo "Flagge1: England-Fahne | EUR 24.50 | 2m lang| 0.5m hoch| 1m² | weiß";
    echo "<br />";
    echo "Flagge2: Österreich-Fahne | EUR 26.50 | 2m lang| 0.5m hoch| 1m² | rot";
*/
?>