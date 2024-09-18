<?php
class cars{

    public $cars=array(
                'BMW'=>'1995',
                'Audi'=>'1996',
                'Mercedes'=>'1997'
            );
    public function __construct()
    {
        foreach($this->cars as $key => $value)
        {
            echo $key."=>".$value.PHP_EOL;
        }
    }

    public function yearUpdate()
    {
        foreach($this->cars as $key=>$value)
        {
            $this->cars[$key]=$value+1;
            echo $key . "=>" . $this->cars[$key] . PHP_EOL;
        }
    }

};
$myObjct=new cars();
$myObjct->yearUpdate();

?>