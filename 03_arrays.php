<?php
   /* //simplae array
    $numbers =[1,2,3];
    $fruits = array('apple', 'orange', 'pear');

    //every array, just like js is 0-based
    echo $fruits[1];

    //key-value pairs array example
    $array = array(
        "foo" => "bar",
        "bar" => "foo",
    );

    // faster shortcut to "array()"
    $faster_array = [
        1 => "netflix!",
        2 => "cooking!",
        3 => "horsing!",
    ];
    */

    //create and access MULTIDIMENSIONAL ARRAY
    $holiday_plan = [
        [
            "monday" => "netflix",
            "tuesday" => "cooking",
            "wednesday" => "horsing"
        ],
        [
            "thursday" => "chill",
            "friday" => "coding",
            "saturday" => "playing guitar"
        ],
        [
            "sunday" => "concert",
            "anyday" => "gaming"
        ]
    ];
    //print_r($holiday_plan[0]);
    echo $holiday_plan[0]["monday"];

    var_dump(json_encode($holiday_plan));
?>