<?php
    abstract class Animal
    {
        abstract function Walkstyle();

    }

    class Elephant extends Animal
    {
        function Walkstyle()
        {
            echo "Elephant Walks on four legs";
            echo PHP_EOL;
        }
    }

    class Kangroo extends Animal
    {
        function Walkstyle()
        {
            echo "Kangroo walks on two legs";
            echo PHP_EOL;
        }
    }

    $elephant =new Elephant();
    $kangroo = new Kangroo();

    $elephant->Walkstyle();    
    $kangroo->Walkstyle();    
?>