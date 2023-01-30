<?php

$array = array("Fried Chicken" => array("price"=>7.50, "description"=>"Crispy fried chicken served with a side of your choice", "image"=>"chicken"), 
    "Mashed Potatoes" => array("price"=>3.50, "description"=>"Creamy mashed potatoes topped with butter and herbs", "image"=>"mashedpotatoes"), 
    "Green Beans" => array("price"=>3.00, "description"=>"Fresh green beans cooked to perfection", "image"=>"greenbeans"), 
    "Taco Casserole" => array("price"=>8.00, "description"=>"A delicious layer of taco meat, cheese, and tortillas", "image"=>"polecat"), 

    "Spanish Rice" => array("price"=>5.00, "description"=>"Flavorful Spanish rice cooked with tomatoes, onions, and peppers", "image"=>"spanishrice"), 
    "Pico de Gallo" => array("price"=>4.00, "description"=>"A fresh salsa made with tomatoes, onions, cilantro, and jalapenos", "image"=>"chicken"), 
    "Lasagna" => array("price"=>9.50, "description"=>"Layers of cheesy lasagna noodles smothered in marinara sauce", "image"=>"garlicbread"), 
    "Garlic Bread" => array("price"=>2.00, "description"=>"Freshly toasted garlic bread", "image"=>"chicken"), 
    "Salad" => array("price"=>4.50, "description"=>"A crisp garden salad with your choice of dressing", "image"=>"chicken"), 

    "Fish and Chips" => array("price"=>8.25, "description"=>"Golden fried fish served with crispy french fries", "image"=>"fishchips"), 
    "Cole Slaw" => array("price"=>3.75, "description"=>"Tangy coleslaw made with shredded cabbage and carrots", "image"=>"coleslaw"), 
    "French Fries" => array("price"=>3.25, "description"=>"Crispy golden french fries", "image"=>"fries"), 
    "Pizza" => array("price"=>12.00, "description"=>"A large pizza loaded with your favorite toppings", "image"=>"chicken"), 
    "Garlic Knots" => array("price"=>2.50, "description"=>"Soft and fluffy garlic knots", "image"=>"chicken"), 
    "Ceasar Salad" => array("price"=>5.00, "description"=>"Crisp romaine lettuce tossed with caesar dressing, croutons, and parmesan cheese", "image"=>"chicken"));


    foreach ($array as $item => $values) {
        echo '<ul><li>'.$item . " - $" . $values['price'] . 
        "<img src='images/".$values['image'].".jpg'>
        </li> <li>" . $values['description'] . "</li></ul><br>";
    };

?>