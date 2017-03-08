<?php

class Circle extends Figure
{

    private $_radius = 0;

    function __construct($radius)
    {
        $this->_radius = $radius;
    }

    public function getArea()
    {
        if (!$this->_area) {
            $this->_area = pi() * pow($this->_radius, 2);
        }
        return $this->_area;
    }
}