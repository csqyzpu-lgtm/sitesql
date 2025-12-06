<?php
//if else example
$age = 17;

if($age >= 18){
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
}


//3 conditions example with date(), H is format option for hour
$t = date("H");
if($t < 12){
    echo 'Bonjour bonjour';
} elseif($t < 17){
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}


$posts = ['First Post'];
//way to check if the variable is empty(false) or not(true)
//empty -> determine whether a var is empty or not
if(!empty($posts)){
    echo $posts[0];
} else {
    echo 'No Posts';
}

//conditional ternary operator 
$fav_movie = "";

$taste_police = "blade runner" ? "good taste" : "lemme tell you somthin'";
echo $taste_police;

//ternary null coalesce handling -> ?:, ?? and ??=;
//test on bar $posts on line 23, if this array is empty add null so it will not throw an error.
$firstPost = $posts[0] ?? null;
echo $firstPost;


//Switch operator
$fav_color = 'blue sea';

switch($fav_color){
    case 'blue sky':
    echo 'lets skywatching';
    break;
    case 'blue sea':
    echo 'you like the beach?';
    break;
    case 'blue neon':
    echo 'lets go to the club lol';
    break;
    default:   
        echo 'blue is not your favourite colour?';
}
?>