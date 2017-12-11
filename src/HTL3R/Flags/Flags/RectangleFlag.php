<?php

namespace HTL3R\Flags\Flags;

use HTL3R\Flags\Flags;

class ReactangleFlag extends Abstractflag implements FlagInterface {
    /**
     * Calculates Area of the Flag
     * @return float Area of the Flag in m²
     */
    public function calculateArea():float{
        return $this->width*$this->height;
    }
}