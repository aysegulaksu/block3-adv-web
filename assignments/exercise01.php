<?php

// Define function :isPalindrome and check if the sentence is palindrome
function isPalindrome($sentence) {
    // Convert sentence to lowercase - and make this is a case-insensitive comparison
    $sentence = strtolower($sentence);
    // You need to get the length of the sentence
    $length = strlen($sentence);
    // You need to clean the sentence.... Initilaize an empty string... store the sentence - cleaned sentence 
    $cleanedSentence = '';

    // Use loop... from both ends, first from the begining, check it fromthe begining 
    for ($i = 0; $i < $length; $i++) {
        // Get the character at the current position
        $char = $sentence[$i];
        // Check if the character is a letter such as a to z  or numbers like 0-9 etc 
        if (($char >= 'a' && $char <= 'z') || ($char >= '0' && $char <= '9')) {
            // Append the character to cleaned sentence
            $cleanedSentence .= $char;
        }
    }

    // Check length of the clnd sentence
    $length = strlen($cleanedSentence);

    // Loop  the first half of the cleaned sentence
    for ($i = 0; $i < $length / 2; $i++) {
        // Check if the characters at the current position and its mirror position
        // (counting from the end) are not equal
        if ($cleanedSentence[$i] != $cleanedSentence[$length - $i - 1]) {
            // If not equal- there is mismatch, the sentence is not a palindrome
            return false;
        }
    }

    // If the loop completes - no  mismatch, the sentence is a palindrome
    return true;
}

// Check if the 'sentence' parameter was provided in a POST request
if (isset($_POST['sentence'])) {
    // Get the input sentence from the POST request
    $inputSentence = $_POST['sentence'];
    // Call the isPalindrome function to determine if it's a palindrome
    if (isPalindrome($inputSentence)) {
        $result = "The sentence is a palindrome.";
    } else {
        $result = "The sentence is not a palindrome.";
    }
} else {
    // If no 'sentence' parameter was provided, set the result to an empty string
    $result = ""; // Display nothing if no input is provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
     <!--  stylesheet -->
     <link rel="stylesheet" href="../../assets/css/class.css">
     <link rel="stylesheet" href="../../assets/css/reset.css">
     <link rel="stylesheet" href="../form.css">
     <!--  fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--  google fonts -->  
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>        
        <figure>
            <a href="../index.html">
                <img src="../../assets/images/aysegul-aksu-logo.png" alt="Aysegul Aksu Logo" class="logo">
            </a> 
        </figure>
        <figure class="hero">
            <img src="../../assets/images/dynamic-programming.jpg" alt="" class="hero-img">
            <figcaption><a href="../index.html">Advanced Web Programming
            </a>                 
            </figcaption>
        </figure> 

    </header>
    <section class="form-php">
    <article class="form">
                <form action="./exercise01.php" method="post">
                   <fieldset class="fieldset-pink">
                        <legend>Palindrome Checker</legend>
                        <div class="form-group-dark">
                            <label for="sentence">Enter a sentence:</label>
                            <input type="text" id="sentence" name="sentence">
                            <input type="submit" value="Check" class="btn">
                        </div>
                       
                    </fieldset>

            </form>
            <p><?php echo $result; ?></p>
            </article>  
    </section>
    <section>
        <article class="single-columb">
            <h2>Palindrome Sentences</h2>
            <p>A man, a plan, a canal — Panama!</p>
            <p>Sit on a potato pan, Otis.</p>
            <p>Mr. Owl Ate My Metal Worm</p>
        </article>
    </section>
  

    <footer>
        <nav>
            <a href="../../index.html">Home</a>
            <a href="../index.html">Advenced Web Programming</a>
            <a href="https://www.linkedin.com/in/aksuaysegul/" class="icon-link" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
        </nav>
        <br>
        <h5>Aysegul Aksu / 2395090 / NEW.0F Website Design Specialist AEC</h5>
    </footer>
               
</body>
</html>
</body>
</html>

