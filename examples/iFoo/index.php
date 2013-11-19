<?php
require_once '../Autoloader/Autoloader.php';

$autoloader=new Autoloader;

var_dump((new Foo)->setFoo(new Baz1));
var_dump((new Foo)->setFoo(new Baz2));
var_dump((new Foo)->setFoo(new Baz3));

class Baz4{}
// la classe Baz4 ne respecte pas le contrat BADABOUM...
var_dump((new Foo)->setFoo(new Baz4));

?>