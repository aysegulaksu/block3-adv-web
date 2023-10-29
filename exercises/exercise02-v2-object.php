<?php 

//the hungry and kiss example does not feel right... I would do the same example with wants to play

//set the class and define playfullness level- that makes more sense
class Cat {
   private $playfullnessLevel = 0;
    private $happy = false;

//use constructor - in the constructer setting playfullness level 0, the cat does not want to play. therefore happiness is false.. 
public function __construct() {
    $this->playfullnessLevel = 0;
    $this ->happy = false;
}

//use boolean ... isPlayfull .. if the playfullness level is bigger than 0, then the cat is playfull 
private function isPlayfull() {
    return $this->playfullnessLevel > 0;
}
//if my cat is playful , means playfullness level level is bigger than 0  then my cat gives kisses
public function giveKisses() {
    if ($this->isPlayfull()) {
     $this->playfullnessLevel++;
        $this ->happy = true;
        return "My cat gives kisses, he is playful and he is happy  ";
    }

    else { 
        $this ->happy = false;
        return "My cat is not playful, he is not happy"  ;
    }
}
public function play () {
    $this->playfullnessLevel++;
    $this ->happy = true;
    return "My cat is happy" ;
}

public function isHappy() {
    return $this->happy;
}
}

$finnPeekaboo = new Cat();

$behaviours = [];
$behaviours []=$finnPeekaboo->giveKisses();
$behaviours []=$finnPeekaboo->play();

foreach ($behaviours as $behaviour) {
    echo $behaviour . "<br>";
    echo "is Finn Happy? " . ($finnPeekaboo->isHappy() ? "Yes" : "No") . "<br>";

}

