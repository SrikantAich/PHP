<?php
<?
class base{

    function display($args)
    {
        echo "Parent ". $args;
    }

}
class derived extends parent{

    function display($args)
    {
        echo "child ". $args;
    }
}
$par=new base();
$par->display("Hello");
$chd=new derived();
$chd->display("Hello");

?>