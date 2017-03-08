<?php
class Rectangle extends Figure
{
    private $part1 = 0;
    private $part2 = 0;

    function __construct($part1, $part2)
    {
        $this->part1 = $part1;
        $this->part2 = $part2;
    }

    public function getArea()
    {
        if (!$this->_area) {
            $this->_area = $this->part1 * $this->part2;
        }
        return $this->_area;
    }
}