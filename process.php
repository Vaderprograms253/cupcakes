<?php

//get name and cupcakes
$cupcakes = $_POST['flavors'];
$name = $_POST['name'];

if (empty($cupcakes)){
    echo "You did not select any cupcakes";
} else {
    $price = 3.50;
    echo "Thank you ". $name ."<br><br><b>Order Summary:</b>";
    for ($i = 0; $i < count($cupcakes); $i++){
        echo "<li>".$cupcakes[$i]. "</li>";
        $total += $price;
    }
    echo "<br>Total:    $". number_format((float)$total, 2, '.','');
}

