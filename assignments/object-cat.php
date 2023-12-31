

<?php
ini_set('display_errors', 1);

//create a class
class KissForFood
{
    public $kissesPerDay;
    public $mealsPerDay;
    public $kissesPerWeek;
    public $kissesPerYear;
    //constructor 
    public function __construct($kissesPerDay, $mealsPerDay)
    {
        $this->kissesPerDay = $kissesPerDay;
        $this->mealsPerDay = $mealsPerDay;
    }

    public function calculateKissesPerDay()
    {
        $this->kissesPerDay = $this->kissesPerDay * $this->mealsPerDay;
    }

    public function calculateKissesPerWeek()
    {
        $this->kissesPerWeek = $this->kissesPerDay * 7;
    }

    public function calculateKissesPerYear()
    {
        $this->kissesPerYear = $this->kissesPerDay * 365;
    }
}

// CatKissesForFood object. values 2 kisses per meal and 5 meals per day
$catKisses = new KissForFood(2, 5);

// Calculate the number of kisses
$catKisses->calculateKissesPerDay();
$catKisses->calculateKissesPerWeek();
$catKisses->calculateKissesPerYear();

// Display the results
echo "<br>Kiss, Eat, Repeat: Finn Peek-A-Boo <br><br> <br> Kitty kisses for food per day: {$catKisses->kissesPerDay} kisses<br>";
echo "Kitty kisses for food per week: {$catKisses->kissesPerWeek} kisses<br>";
echo "Kitty kisses for food per year: {$catKisses->kissesPerYear} kisses<br> <br> <br>";

class CatFoodPerDay
{
    public $foodPerMeal;
    public $mealsPerDay;
    public $minimumFoodPerDay;

    public function __construct($foodPerMeal, $mealsPerDay)
    {
        $this->foodPerMeal = $foodPerMeal;
        $this->mealsPerDay = $mealsPerDay;
    }

    public function calculateMinimumFoodPerDay()
    {
        $this->minimumFoodPerDay = $this->foodPerMeal * $this->mealsPerDay;
    }
}

// CatFoodPerDay object : 45gr each meal- 5 meals per day
$catFoodPerDay = new CatFoodPerDay(45, 5);

// Calculate the minimum amount of food per day
$catFoodPerDay->calculateMinimumFoodPerDay();

// Display the result
echo "<br>Finn Peek-A-Boo eats approximetly 45gr food in each meal. and he eats at least {$catFoodPerDay->mealsPerDay} times a day.So, he eats minimum {$catFoodPerDay->minimumFoodPerDay} grams of food each day, <br> <br>";

?>
