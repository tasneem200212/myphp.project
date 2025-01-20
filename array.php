<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<?php
/*
1.	Write a script to generate the following paragraph 
 
 "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
 The words 'red', 'green' and 'white' should come from the $colors array.
 */

/*
 $colorsarray=['red','green','white'];
 echo  "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colorsarray[0] carpet, the $colorsarray[1] lawn, the $colorsarray[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
*/

 /*
 2.	$colors = array('white', 'green', 'red') 
 Write a PHP script that will display the colors as unordered list :
 Expected Output:  
 ●	green
 ●	red
 ●	white
 */

/*
$colors = array('white', 'green', 'red');
"<ul>";
echo "<li>$colors[1]</li>";
echo "<li>$colors[2]</li>";
echo "<li>$colors[0]</li>";
"</ul>";
*/
 
 /*
 3.	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
 
 Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
 Expected Output:
 The capital of Netherlands is Amsterdam 
 The capital of Greece is Athens 
 The capital of Germany is Berlin 
 */

 /* 
 $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
 echo "The capital of Netherlands is $cities[Netherlands]" . "<br>";
 echo "The capital of Greece is $cities[Greece]" . "<br>";
 echo "The capital of Germany is $cities[Germany]" . "<br>";
 */

 /*
 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

Write a PHP script to display the first element of the above array. 
Expected Output:  white
*/

/*
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
*/ 

/*
5.	Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:

Array 1 2 3 4 5   
Location: 4
New Item: $

Expected Output: 1 2 3 $ 4 5
*/

/*
 $array=[1,2,3,4,5];
 array_splice($array,3,0,"$");
print_r($array) ;
*/

/*
6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange
*/

/*
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
sort($fruits);
foreach($fruits as $x => $x_value ){
    echo chr(65+$x). "[$x]" ." " . $x_value;
    echo "<br>";
}
    */


/*
7.	Write a PHP script to calculate and display the average temperature for the recorded reads,
 also the script should display the list of the five lowest and the five highest temperatures 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85,
*/
/*
$array=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum=0;
$avg;
foreach($array as $x){
    $sum+=$x;
   $avg=$sum/sizeof($array);
}
echo "Average Temperature is:". $avg . " " ."<br>";
$newarray=array_unique($array);
sort($newarray);
$seven_lowest_temps=array_slice($newarray,0,7);
rsort($newarray);
$seven_highest_temps=array_slice($newarray,0,7);
sort($seven_highest_temps);
echo "List of seven lowest temperatures:". implode(',',$seven_lowest_temps) ."<br>";
echo "List of seven highest temperatures:". implode(',',$seven_highest_temps)."<br>";
*/

/*
8.	Write a PHP program to merge the following two arrays. 

Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

Expected Output:

Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)
*/

/*
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1,$array2));
*/

/*
9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

Sample Input:

$colors = array("red","blue", "white","yellow");

Expected Output :

Array
(
    RED
    BLUE
    WHITE
    YELLOW

)
*/

/*
$colors = array("red","blue", "white","yellow");
$uppercasedColors=array_map('strtoupper',$colors);
print_r($uppercasedColors);
*/

/*
10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

Sample Input:

$colors = array("RED","BLUE", "WHITE","YELLOW");

Expected Output :

Array
(
    red
    blue
    white
    yellow

)
*/

/*
$colors = array("RED","BLUE", "WHITE","YELLOW");
$uppercasedColors=array_map('strtolower',$colors);
print_r($uppercasedColors);
*/

/*
11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248
*/

/*
$array=[];
for($i=200;$i<=250;$i++){
    if($i % 4 ===0){
        $array[]=$i;
        

    }
}
echo implode(',',$array);
*/

/*
12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4.
 
 */
/*
$words =  array("abcd","abc","de","hjjj","g","wer");
$min = strlen($words[0]);
$max = strlen($words[0]);
for($i=1;$i<count($words);$i++){
    if(strlen($words[$i])<$min){
    $min=$i;
    }
    if(strlen($words[$i])>$max){
    $max=strlen($i). "<br>";
    }
}

echo "The shortest array length is " . $min . ". The longest array length is " . $max . ".";
*/

/*
13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12
*/

/*
$array=[];
for($i=0;$i<10;$i++){
$random_array=rand(11,20);
print_r($random_array . " ");
}
*/

/*
14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2
*/

/*
$array1 = array( 2, 0, 10, 12, 6);
sort($array1);
$zero=in_array(0,$array1);
if($zero){
    echo implode(", ", array_slice($array1,1,1));
}
    */


/*
15.	Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 )
*/

/*
// Input array
$array = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];

// Bubble Sort Algorithm
function bubbleSort($arr) {
    $n = count($arr);
    
    // Outer loop to traverse through all elements
    for ($i = 0; $i < $n - 1; $i++) {
        // Inner loop to compare adjacent elements
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element is greater than the next
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Call the bubbleSort function
$sortedArray = bubbleSort($array);

// Display the sorted array
echo "Sorted Array: ";
print_r($sortedArray);
*/

/*
16.	Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters number, precision, and $separator
Sample Data : 
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."
=o
Expected Output :
1.15
100.2578
-2.964
*/
/*
function floorDecimal($number, $precision) {
$number = floor($number * pow(10, $precision)) / pow(10, $precision);
echo $number;

}
echo floorDecimal(1.155, 2) . "<br>";
echo floorDecimal(100.25781, 4) . "<br>";
echo floorDecimal(-2.9636, 3) . "<br>";
*/


/*
17.  Write a PHP script to merge two commas separated lists with unique values only.
Sample input: list1 = "4, 5, 6, 7";
  		list2 = "4, 5, 7, 8";
Sample output: 4, 5, 6, 7, 8
*/
/*
$list1 = [4, 5, 6, 7];
$list2 = [4, 5, 7, 8];
$newarray=array_merge($list1,$list2);
$uniqarray=array_unique($newarray);
print_r($uniqarray);
*/
/*
18. Write a PHP function to remove the duplicate entry from an array.
sample input = 4, 5, 6, 7, 4, 7, 8
sample Output = 4, 5, 6, 7, 8
*/
/*
$array=[4, 5, 6, 7, 4, 7, 8];
$newarray=array_unique($array);
print_r($newarray);
*/

/*
19. Write a PHP Program to find if an array is a subset of another.
sample input:
array1 = 'a','1','2','3','4'
array2 = 'a','3'
	sample output:
array2 is a subset array from array1
*/

/*
function isSubset($array1,$array2){
    foreach($array1 as $element){
        if(in_array($element,$array2)){
            return true;
        }
    }
    return false;
}
$array1 = ['a','1','2','3','4'];
$array2 = ['a','3'];

if(isSubset($array1,$array2)){
    echo "array2 is a subset array from array1";
}
else{
    echo "array2 is not a subset array from array1";
   
}
    */

   ?> 
</body>
</html>