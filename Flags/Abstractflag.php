<?php

namespace HTL3R\Flags\Flags;

abstract class Abstractflag{
protected $name;
protected $price;
protected $width;
protected $height;
protected $color;

/**
* Flag constructor.
* @param string $name name of the flag
* @param float $price price of the flag
* @param float $width width of the flag in m
* @param float $height height of the flag in m
* @param float $area area of the flag
* @param string $color color as hex code
*/

//Konstruktor zum Erstellen der Klasse; verwendet das reservierte Wort __construct
function __construct(string $name,float $price, float $width, float $height, string $color){
$this->name = $name;
$this->price = $price;
$this->width = $width;
$this->height = $height;

$this->color = $color;
}

/**
* Calculates the area of the flag
* @return float area of the flag in m²
*/


function __toString() : string
{

$rv = <<<EOT
    Name: $this->name<br />
    Preis: $this->price<br />
    Breite: $this->width <br />
    Höhe:$this->height<br />
    Farbe: <div style="width:10px;height:10px;background-color:$this->color">

EOT;
        return $rv;

        }
        }