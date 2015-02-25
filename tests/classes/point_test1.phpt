--TEST--
PHP Spec test generated from ./classes/point_test1.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

include_once 'Point.inc';

$p1 = new Point;		// without () uses the "default" constructor
						// note that without the default values in the constructor,
						// PHP5 warns "Missing argument n for Point::__construct()"
						// then constructor has undefined parameters, so uses NULL
var_dump($p1);

$p1 = new Point();		// parens are optional
var_dump($p1);

$p1 = new Point(100);	// let y default
var_dump($p1);

$cName = 'Point';
$p1 = new $cName(-1, 1);	// use string form
//$p1 = new 'Point'(-1, 1);	// but can't be a string literal!!!
var_dump($p1);

$p1 = new Point(20,30);
var_dump($p1);

var_dump($p1->getX());
var_dump($p1->getY());

$p1->setX(-3);
$p1->setY(10);
echo $p1 . "\n";		// implicit call to __toString()
echo $p1->__toString() . "\n";		// explicit call to __toString()

$p1->move(-5, 7);
echo $p1 . "\n";

$p1->translate(1, 1);
echo $p1 . "\n";
--EXPECTF--
object(Point)#1 (2) {
  ["x":"Point":private]=>
  int(0)
  ["y":"Point":private]=>
  int(0)
}
object(Point)#2 (2) {
  ["x":"Point":private]=>
  int(0)
  ["y":"Point":private]=>
  int(0)
}
object(Point)#%d (2) {
  ["x":"Point":private]=>
  int(100)
  ["y":"Point":private]=>
  int(0)
}
object(Point)#%d (2) {
  ["x":"Point":private]=>
  int(-1)
  ["y":"Point":private]=>
  int(1)
}
object(Point)#%d (2) {
  ["x":"Point":private]=>
  int(20)
  ["y":"Point":private]=>
  int(30)
}
int(20)
int(30)
(-3,10)
(-3,10)
(-5,7)
(-4,8)