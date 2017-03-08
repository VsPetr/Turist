<?php
class Square extends Figure {
    private $part = 0;

    function __construct($part)
    {
        $this->part = $part;
    }

    public function getArea()
    {
        if (!$this->_area) {
            $this->_area = pow($this->part, 2);
        }
        return $this->_area;
    }
}
