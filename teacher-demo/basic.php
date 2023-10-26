
<?php
    $sampleArray = array(1,2,3, "red", "yellow", "blue");

    for($i = 0; $i < count($sampleArray); $i++) {
        $class = $i % 2 ? "even" : "odd";
        // echo $class;
        echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
    }
?>

<?php
    $name = "peter";
    echo $name[2];
?>

<?php
    // create a function that checks if a word is a palindrome, using only basics
?>

<?php
    $expr = "jan";
    switch($expr) {
        case "jan":
            echo "january";
            break;
        case "dec":
            echo "december";
            break;
        default:
            echo "enjoy!";
            break;
    }
    for($i = 0; $i < 10; ++$i) {
        if($i % 2) {
            continue;
        }
        echo $i;
    }
?>

<?php
    // create a function that checks if a sentence is a palindrome, using only basics and continue and break, REMEMBER NO STRING FUNCTIONS!!
?>