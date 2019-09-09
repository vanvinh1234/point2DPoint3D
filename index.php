<?php
include_once("Point2D.php");
include_once("Point3D.php");
$point2d = new Point2D(5,6);
$point2d->setXY(7,8);
$point2d->toString();
echo "<br>";
$point3d = new Point3D(7,8,7);
$point3d->setXYZ(9,6,8);
$point3d->toString();
