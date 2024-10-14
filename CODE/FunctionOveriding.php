<?php
class Base {
    function display($args) {
        echo "Parent " . $args . "<br>";
    }
}

class Derived extends Base {
    function display($args) {
        echo "Child " . $args . "<br>";
    }
}

$base = new Base();
$base->display("Hello");

$derived = new Derived();
$derived->display("Hello");
?>