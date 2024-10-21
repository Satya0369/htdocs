<?php
class car{
    public $model;
    public $name;
   public function __construct($name,$model){
        $this->name=$name;
        $this->model=$model;
    }
    function display(){
        echo "Name: ".$this->name."<br>";
        echo "model: ".$this->model."<br>";
    }
}
$car1=new car("benz",2002);
$car1->display();
?>