<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table,th,td{
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
  <?php
  /*
  1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
start and end position.  
Expected Output: 1-2-3-4-5-6-7-8-9-10 
*/
/*
$array=[1,2,3,4,5,6,7,8,9,10];
for($i=0;$i<sizeof($array);$i++){
}
echo implode("-",$array);
*/

/*
2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.  
 
Expected Output:  total as a number  
*/
/*
$sum=0;
for($i=0;$i<=30;$i++){
    $sum +=$i;
}
echo $sum;
*/

/*
3. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
A A A A A  
A A A B B  
A A C C C  
A D D D D  
E E E E E 
*/

/*
$row=5;
for($i=0;$i<$row;$i++){
    for($j=0;$j<$row;$j++){
    if($j<$row-$i-1){
        echo "A" . " ";
    }
    else{
      echo chr(65+ $i) . " ";
    } 
    } 
  echo "<br>"; 
}
*/

/*
4. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
1 1 1 1 1  
1 1 1 2 2  
1 1 3 3 3  
1 4 4 4 4  
5 5 5 5 5
*/

/* 
$row=5;
$num=1;
for($i=0;$i<$row;$i++){
for($j=0;$j<$row;$j++){
    if($j<$row-$i-1){
        echo $num . " ";
    }
    else{
        echo $num +$i . " ";
    }
}
echo "<br>";
}
*/

/*
5. Create a script to generate the following pattern, using the nested for loop.  
 
Expected Output: 
 
1 0 0 0 0  
0 2 0 0 0  
0 0 3 0 0  
0 0 0 4 0  
0 0 0 0 5 
*/

/*
$row=5;
$num=1;
for($i=0;$i<$row;$i++){
for($j=0;$j<$row;$j++){
if($j==$i){
echo $num+$i . " ";
}
else{
    echo "0" . " ";
}
}
echo "<br>";
}
*/

/*
6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
a number is the product of all integers up to and including that number. 
 
Sample Input: 5 
Expected Output: 120 
*/
 /* 
function factorial ($number){
    $factorial=1;
    for($i=1;$i<=$number;$i++){
$factorial *=$i;
    }
echo $factorial;
   
}
factorial(5);
*/


/*
7. Write a program to calculate and print the Fibonacci sequence using a for loop. 
Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting 
with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.  
 
Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …
*/

/* 
$limit = 22;
$a = 0 ;
$b = 1;
echo $a . " ";
while ($b <= $limit) {
 echo $b . " ";
    $temp = $b; 
    $b = $a +$b;  
    $a = $temp;
}
*/

/*
Write a program which will count the "c" characters in the text "Orange Coding Academy".  
 
Sample Input: Orange Coding Academy 
Expected Output: 2 
*/
/*
$string= "Orange Coding Academy";
$count=0;
for($i=0;$i<strlen($string);$i++){
if($string[$i]=="c" || $string[$i]=="C"){
    $count++;
}
}
echo $count;
*/
 
/*
9. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and 
cell spacing="0px" to the table tag.  
*/
 
/* 
echo "<table>";
$constnum=1;
for($i=1;$i<=6;$i++){
    echo "<tr>";
for($j=1;$j<=5;$j++){
$constnum=$i * $j;
echo "<td> $i * $j = $constnum </td>";
}
echo "</tr>";
}
echo "</table>";
 */ 
 
 
/* 
10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" 
instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of 
both three and five, print "FizzBuzz". 
 
Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….
*/

/*
for($i=1;$i<=50;$i++){
    if($i%3 ===0){
    echo "Fizz" . " ";
    }
    elseif($i%5===0){
    echo "Buzz" . " ";   
    }
    elseif($i%3 ===0 && $i%5===0){
    echo "FizzBuzz" . " ";
    }
    else{
     echo $i . " ";   
    }
}
    */ 

/*
11. Write a PHP program to generate and display the first n lines of a Floyd triangle 
 
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer 
science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive 
numbers, starting with a 1 in the top left corner: 
 
Sample output: 
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
 */

/*
$num=1;
 for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo $num ." ";
        $num++;
    }
    echo"<br>";
 }
*/
 
 
 /*
12. Write a PHP program to print the following pattern.  
    
Expected Output: 
 
     A  
    A B  
   A B C  
  A B C D  
 A B C D E  
  A B C D  
   A B C  
    A B  
     A 
 */

 /*
 for($i=1;$i<=6;$i++){
for($j=9;$j>$i;$j--){
    echo "&nbsp;&nbsp;";
}

$char='A';
for($j=1;$j<$i;$j++){
echo $char . " ";
$char++;
}
echo "<br>";
 }
 for($i=5;$i>=1;$i--){
    for($j=9;$j>$i;$j--){
        echo "&nbsp;&nbsp;";
    }
    $char='A';
for($j=1;$j<$i;$j++){
echo $char . " ";
$char++;
}
echo "<br>";
 }
*/
                               
  ?>  
</body>
</html>