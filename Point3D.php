<?php


class Point3D extends Point2D
{
    public $z;
    public $arrXYZ = [];
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }public function setZ(){
        return $this->z;
    }
    public function setXYZ($x,$y,$z){
        array_push($this->arrXYZ,$x,$y,$z);
    }
    public function getXYZ(){
        return $this->arrXYZ;
    }
    public function toString()
    {
        foreach ($this->getXYZ() as $value){
            echo $value. " ";
        }
    }

}