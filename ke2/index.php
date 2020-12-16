<?php
require_once ('./Ape.php');
require_once ('./Frog.php');

class Animal
{

    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}



//Create an instance from the child class
echo "Kera:";
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";
echo $sungokong->name; //"Kera sakti"
echo "<br>";
echo $sungokong->kakiApe;
echo "<br> <br>";

echo "Katak:";
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
echo "<br>";
echo $kodok->name;
echo "<br>";
echo $kodok->kakiFrog;

