<?php



namespace HTL3R\Flags\Flags;



use HTL3R\FlagInterface;
use HTL3R\Flags\Flags\Abstractflag as AbstractFlag;

class TriangleFlag extends Abstractflag implements FlagInterface {
/**
* Calculates Area of the Flag
* @return float Area of the Flag in m²
*/
public function calculateArea():float{
public function __construct($name,$price,  $width, $height,  $color){
parent::__construct($name,$price,  $width, $height,  $color);
}
return ($this->width*$this->height)/2;
}

}