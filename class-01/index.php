<style>
    .odd {
    background-color: yellow;
}

</style>



<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, a. Cum excepturi reprehenderit, facere reiciendis alias perspiciatis consequatur magnam totam aliquid. Similique officia commodi, fugiat modi eius placeat inventore dignissimos!</p>



<?php 
$sampleArray = array(1, 2, 3, "red", "yellow", "blue");
for ($i = 0; $i < count($sampleArray); $i++) {
    $class = ($i + 1) % 2 ? "odd" : "even";
    echo "<p class='$class'> index $i contains $sampleArray[$i]</p>";
}


?>