<?php


class Point2D
{
    public $x;
    public $y;
    public $arrXY = [];

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y;
    }

    public function setXY($x, $y)
    {
        array_push($this->arrXY, $x, $y);

    }

    public function getXY()
    {
        return $this->arrXY;
    }

    public function toString()
    {
        foreach ($this->getXY() as $value) {
            echo $value . " ";
        }
    }

}