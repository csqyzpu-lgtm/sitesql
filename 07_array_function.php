<?php
$fruits = ['apple', 'orange', 'kiwi'];

echo count($fruits);
echo '<br>';

//search an array with IN_ARRAY()
var_dump(in_array('apple',$fruits));
echo '<br>';

//ARRAY_PUSH() : add new data to existing array in the end
array_push($fruits, 'burberry');
print_r($fruits);
echo '<br>';

//ARRAY_UNSHIFT() : add new data to existing array in the beginning
array_unshift($fruits, 'mango');
print_r($fruits);
echo '<br>';

//ARRAY_POP() remove data from array in end vs ARRAY_SHIFT() to remove the beginning
array_pop($fruits);
print_r($fruits);
echo '<br>';

array_shift($fruits);
print_r($fruits);
echo '<br>';

//UNSET :remove from array with specific index
unset($fruits[1]);
print_r($fruits);
echo '<br>';

//ARRAY_CHUNK split array to chunks (ex: chunk of 2)
$flowers_basket = ['lily', 'rose', 'tulip', 'jasmine'];
print_r($flowers_basket);

$flower_shower = array_chunk($flowers_basket, 2);
print_r($flower_shower);

//ARRAY_MERGE merge array chunks
$number_list1 = [1,2,3];
$number_list2 = [4,5,6];
$merged_list= array_merge($number_list1, $number_list2);
print_r($merged_list);

//spread operator [...var] to collect array in new var
$number_list3 = [7,8,9];
$number_list_acc = [...$merged_list, ...$number_list3, 10, 11, 12];
print_r($number_list_acc);


$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'tomato', 'banana'];

//ARRAY_COMBINE to set first parameter ass key and second parameter as value in new array
$c = array_combine($a, $b);
print_r($c);
echo '<br>';

//ARRAY_KEYS just collect the keys as new array
$color_keys = array_keys($a);
print_r($color_keys);
echo '<br>';

//ARRAY_FLIP to reverse key as value and value as data
$flipped_data = array_flip($c);
print_r($flipped_data);


//RANGE : Create an array containing a range of elements
$numbers = range(1, 20);

//ARRAY_MAP : Applies the callback to the elements of the given arrays
$newNumber = array_map(function($number){
    return "Number ${number}";
}, $numbers);
print_r($newNumber);

//ARRAY_FILTER : takes original array and filter it with function
$lessThan5 = array_filter($numbers, fn($number) => $number <= 5 );
print_r($lessThan5);

//ARRAY_REDUCE : cursively reduce the array to a single value using a callback function
$sum = array_reduce($numbers, fn($carry, $number) => 
$carry + $number);

var_dump($sum);

?>