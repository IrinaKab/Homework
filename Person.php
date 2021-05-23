<?php

//Здоровье не может быть больше 100
class Person{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name,$lastname,$age,$mother=null,$father=null){
        $this->name=$name;
        $this->lastname=$lastname;
        $this->age=$age;
        $this->mother=$mother;
        $this->father=$father;
        $this->hp=100;
    }
    function sayHi($name){
        return "Hi, $name! I'm ".$this->name;
    }
    function setHP($hp){
        if($this->hp+$hp>=100)$this->hp=100;
        else $this->hp=$this->hp+$hp;
        //$this->hp=$this->hp+$hp;
    }
    function getHP(){
        return $this->hp;
    }
    function getName(){
        return $this->name;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getMother(){
        return $this->mother;
    }
    function getFather(){
        return $this->father;
    }
    function getInfo(){
        return"
        <h3>A few words about myself</h3><br>"."My name is: ".$this->getName()."<br>
        my lastname is: ".$this->getLastname()."<br>
        my father is: ".$this->getFather()->getName()."<br>
        my mother is: ".$this->getMother()->getName()."<br>
        my grandfather is: ".$this->getFather()->getFather()->getName()."<br>
        my grandmother is: ".$this->getFather()->getMother()->getName()."<br>
        my grandfather is: ".$this->getMother()->getFather()->getName()."<br>
        my grandmother is: ".$this->getMother()->getMother()->getName()."<br>
        ";
    }
}

$igor=new Person("Igor","Petrov",68);
$inna=new Person("Inna","Petrova",68);
$fedor=new Person("Fedor","Ivanov",68);
$mary=new Person("Mary","Ivanova",68);

$alex=new Person("Alex","Ivanov",42,$mary,$fedor);
$olga=new Person("Olga","Ivanova",42,$inna,$igor);
$valera=new Person("Valera","Ivanov",15,$olga,$alex);

//echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();

//$alex->name="Alex";


// $medKit=50;
// //$alex->hp=$alex->hp-30; //Упал
// $alex->setHP(-30); //Упал
// echo $alex->getHP()."<br>";
// //$alex->hp=$alex->hp+$medKit;
// $alex->setHP($medKit); //Нашёл аптечку
// echo $alex->getHP();

// // echo $alex->name;
// // echo $igor->name;
// //echo $alex->sayHi($igor->name);


?>
