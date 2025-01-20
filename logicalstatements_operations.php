<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Statements and Operators</title>
</head>
<body>
 <?php
 /*
1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’
*/

/*
function isleap($year){
if(($year % 4 == 0 && $year % 100 !=0 )||( $year % 400 ==0)){
    return true;
}
else{
    return false;
}
}
$year=2013;
if(isleap($year)){
    echo "This year is a leap year";
}
else{
    echo "This year is not a leap year";
}
*/

/*
2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’
*/

/*
$temperature=27;
if($temperature<20){
    echo "we are in winter";
}
else{
    echo "It is summertime!";
}
*/


/*
3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’
*/

/* 
$firstInteger=2;
$secondInteger=2;
if($firstInteger ===$secondInteger){
$sum=($firstInteger+$secondInteger)*3;
echo $sum ."<br>"."It is summertime!";
}
else{
$sum=($firstInteger+$secondInteger); 
echo $sum ;  
}
*/


/* 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’
*/

/*
$firstInteger=10;
$secondInteger=10;
if($firstInteger + $secondInteger ==30){
$sum=($firstInteger+$secondInteger);
echo $sum ;
}
else{
echo "false";  
}
*/


/*
5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’
*/

/*
$number=20;
if($number>0 &&$number % 3 == 0){
    echo "True";
}
else{
    echo "False";
}
*/


/*
6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’
*/

/*
$number=20;
if($number >= 20 && $number <= 50 ){
    echo "True";
}
else{
    echo "False";
}
*/



/*
7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9
*/

/* 
$array=[ 1, 5, 9 ];
echo max($array);
*/

/*
8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit
*/

/*
function calculate($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return "The total electricity bill for $units units is: " . number_format($bill, 2) . " JOD";
}

$units = 300;
echo calculate($units);
*/


/*
9.	 Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division
 */

/* 
function calculator($num1,$num2,$operater){
 if($operater==="+") {
    $sum=$num1+$num2;
    echo $sum;
 } 
 elseif($operater==="-"){
    $divis=$num1-$num2;
    echo $divis;
 }
 elseif($operater==="*"){
    $multip=$num1*$num2;
    echo $multip;
 }
 elseif($operater==="/"){
    $divi=$num1/$num2;
    echo $divi;
 }
}
calculator(10,5,"/");
*/

/*
10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’
*/
/*
$age=15;
if($age >= 18){
    echo "is eligible to vote";
}
else{
    echo "is no eligible to vote";
}
*/


/*
11.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’
*/

/*
$number=0;
if($number<0) {
    echo "Negative";
 } 
 elseif($number>0){
    echo "positive";
 }
 elseif($number=== 0){
    echo "Zero";
 }
*/


/*
12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’
*/

/*
function grade($array){
    $sum=0;
    for($i=0;$i<sizeof($array);$i++){
        $sum +=$array[$i]; 
    }
    $avg= $sum/sizeof($array);
    
    
    if( $avg<60) {
        echo "F";
     } 
     elseif($avg<70){
        echo "D";
     }
     elseif($avg<80){
        echo "C";
     }
     elseif($avg<90){
        echo "B";
     }
     elseif($avg<100){
        echo "A";
     }
}
grade([60,86,95,63,55,74,79,62,50]);
*/

 ?>   
</body>
</html>