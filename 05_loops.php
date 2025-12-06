<?php
//WHILE used to keep executing code until the condition provided is no longer metaphone
$x = 1;
while($x <= 15){
    echo 'Row number' . $x . '<br>';
    $x++;
}

$y = 1;

//D0.. WHILE..
//do will still execute the block code once even if the condition is wronr because code to execute run before the condition
do {
    echo 'Another row number' . $y . '<br>';
    $y++;
}while($y > 5);

//LOOP
$pairing = " and champagne";
$fav_desserts = ['éclair', 'pancake', 'crème brulée'];

//FOR + USE COUNT as like array length in javascript
for($i = 0; $i < count($fav_desserts); $i++){
    echo $fav_desserts[$i] . $pairing . '<br>';
}

//FOREACH
foreach($fav_desserts as $dessert){
    echo $dessert . " is lickin good" . "<br>";
}

foreach($fav_desserts as $x => $dessert){
    echo $dessert . " for day" . $x + 1 . "<br>";
}

//FOREACH + key-value pair loop
$holiday_plan =
    [
        "monday" => "netflix",
        "tuesday" => "cooking",
        "wednesday" => "horsing"
    ];

foreach($holiday_plan as $key => $value){
    echo "$key - $value<br>";
}
?>