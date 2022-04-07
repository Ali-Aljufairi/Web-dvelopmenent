 <?php
    //  Ali Redha ALi  20195330

    $products = array(

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
        "Asus monitor" => array(200, 5),
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
    $equalmax = [];


    $msg = "\e[1;35m Most Expensive Product(s) in the shopping cart is \e[0m";
    $msg2 = "\e[0;32m with Price of BD \e[0m\n";
    $msg4 = "\e[1;32m Total price for all Product(s) in the shopping cart is BD \e[0m";
    $total = 0;



    foreach ($products as $key => $value) {

        if ($value[0] > $max) {
            $max = $value[0];
            $max_key = $key;
        }

        $total += $value[0];
    }

    foreach ($products as $key => $value) {
        if ($value[0] == $max) {
            $equalMax[$key] = $value[0];
        }
    }

    foreach ($equalMax as $key => $value) {
        $msg .=  "\e[0;34m" . $key . "," . "\e[0m";
    }
    function Final_msg()
    {
        echo "\n";
        global $msg, $msg2, $max, $msg4, $total;
        echo  $msg . $msg2 . "\e[1;31m" .  $max . "\e[0m";
        echo "\n";
        echo $msg4 . "\e[1;31m" . $total . "\e[0m";
    }

    Final_msg();


    ?>

