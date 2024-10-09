<?php
class cars{
    
    public $name;
    public $color='yellow';
    public $year='2025';

    public function set_name($val)
    {
        $this->name=$val;
    }
}

$car1 = new cars();
$car1->set_name('BMW');
print_r($car1);

?>
