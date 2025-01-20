<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Tasks/Functions</title>
</head>
<body>
    <?php
/*
1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number 
*/

/*
function primneumber($number){
if($number%2!==0){
    echo "$number is a prime number"."<br>";
}
else{
    echo " $number is not a prime number"."<br>";
}
}
primneumber(3);
primneumber(6);
*/

/*
2.	Write a PHP script to reverse a string 

Sample Input:  remove
Expected Output: evomer
*/
/*
function reverse($string){
echo strrev($string);
}
reverse("remove");
*/


/*
3.	 Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok
*/
/* 
function islowercase($string){
    $char=strtolower($string);
if($string===$char){
echo "'$string' is Ok";
}
else{
    echo "$string is not Ok";    
}
}
islowercase("remove");
*/

/*
4.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 
*/
/* 
function swap($x,$y){
    echo "x = $x" ."&nbsp;&nbsp;&nbsp;" . "y = $y"."<br>";
    $temp=$x;
$x=$y;
$y=$temp;
echo "x = $x" ."&nbsp;&nbsp;&nbsp;" . "y = $y";
}
swap(12,10);
*/

/*
5.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 
*/
/* 
function swap($x,$y){
    echo "x = $x" ."&nbsp;&nbsp;&nbsp;" . "y = $y"."<br>";
    $temp=$x;
$x=$y;
$y=$temp;
echo "x = $x" ."&nbsp;&nbsp;&nbsp;" . "y = $y";
}
swap(12,10);
*/


/*
6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number 
*/
/* 
function isArmstrong($number){
    $sum=0;
    $temp=$number;
    $numdigit=strlen((string)$number);
while($temp !=0){
    $digit=$temp % 10;
    $sum +=pow($digit,$numdigit);
    $temp = (int)($temp / 10);
}
return $sum == $number;}
$number = 407;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
*/


/*
7.	Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome 
*/
/*
function isPalindrome($string) {
    $cleanedString = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));

    $reversedString = strrev($cleanedString);
    return $cleanedString === $reversedString;
}

// Test the function
$testString = "A man, a plan, a canal, Panama";
if (isPalindrome($testString)) {
    echo "\"$testString\" is a palindrome.";
} else {
    echo "\"$testString\" is not a palindrome.";
}
 */


/*
8.	Write a PHP function to remove duplicates from an array ?

Sample Input:  

$array1 = array(2, 4, 7, 4, 8, 4);


Expected Output:

$array1 = array(2, 4, 7, 8);
*/

 /* 
 function removeduplicates($array){
    print_r($array);
    echo "<br>";
    echo "<br>";
    $uniq=array_unique($array);
    $uniq=array_values($uniq);
    print_r($uniq);
 }
 removeduplicates([2, 4, 7, 4, 8, 4]);
 */
 ?> 
</body>
</html>