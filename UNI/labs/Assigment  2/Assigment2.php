<?php
//  Ali Redha Ali  20195330

$shoppingCart = array(
    "Sony Playstation 3 Console " => array(350, 10),
    "Playstations" => array(350, 10),
    "DEll laptop" => array(500, 5),
    "DEll pc" => array(300, 5),
    "DEll monitor" => array(100, 5),
    "DEll mouse" => array(20, 5),
    "DEll keyboard" => array(10, 5),
    "DEll printer" => array(50, 5),
    "Glorious keyboard" => array(150, 5),
    "Razer keyboard" => array(50, 5),
    "Razer mouse" => array(30, 5),
    "Asus monitor" => array(600, 5),
    "Asus keyboard" => array(30, 5),
    "Asus mouse" => array(20, 5),
    "Asus pc" => array(400, 5),
    "Asus laptop" => array(600, 5),
    "Xbox" => array(400, 12),
    "Wii" => array(200, 5),
    "Wii U" => array(100, 1),
    "Nintendo 3XL" => array(300, 8),
    "Nintendo 3DS" => array(150, 51),
    "Nintendo DS" => array(100, 11),
    "Nintendo Switch" => array(200, 9),
    "Nintendo DS Lite" => array(124, 5),
    "Nintendo DSi" => array(300, 18),
    "Nintendo 3DS XL" => array(600, 12),
    "Nintendo 3DS XL Lite" => array(50, 13),
    "Nintendo 3DS XL Plus" => array(100, 11),
    "Nintendo 3DS XL Plus Lite" => array(50, 13),

);

$max = 0;
$max_key = "";
$msg = "Most Expensive Product(s) in the shopping cart is";
$msg2 = " with Price of BD ";
$msg4 = " Total price for all Product(s) in the shopping cart is BD ";
$total = 0;


foreach ($shoppingCart as $key => $value) {

    if ($value[0] > $max) {
        $max = $value[0];
        $max_key = $key;
    }

    $total += $value[0] * $value[1];
}

foreach ($shoppingCart as $key => $value) {
    if ($value[0] == $max) {
        $msg .=  "<b>" . $key . "</b>" . ",";
    }
}

function Final_msg()
{
    global $msg, $msg2, $max, $msg4, $total;
    echo  $msg . $msg2 . "<b>" . $max . "</b>";
    echo "<br>";
    echo $msg4 . "<b>" . $total . "</b>";
}

Final_msg();
