<?php 
//set the class and define happiness level . I have no idea how to use happy, unhappy and neutral states... so, i use only happy and unhappy
//class Cat {
   // private $hungerLevel = 0;
    ////private $happy = false;

//use constructor - in the constructer setting hunger level 0, the cat is not hungry . therefore happiness is false.. 
//public function __construct() {
    $this->hungerLevel = 0;
    $this ->happy = false;
//}
//use boolean ... isHungry .. if the hunger level is smaller than 0, then the cat is hungry
//private function isHungry() {
    //return $this->hungerLevel > 0;
//}
//if the cat is hungry , means hunger level is smaller than 0 and it is reduces... then the cat gives kisses
//public function giveKisses() {
    //if ($this->isHungry()) {
       // $this->hungerLevel--;
        //$this ->happy = true;
        //return "My cat gives kisses";
    //}

    //else { 
        //$this ->happy = false;
        //return "My cat is not hungry and does not care anything"  ;
    //}
//}

//}

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
        return "My cat is happy , he is playful and he gives kisses ";
    }

    else { 
        $this ->happy = false;
        return "My cat is not happy, and does not care anything"  ;
    }
}

}

