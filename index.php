<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$string="Hello world";
//strings
// echo strtolower($string);//strtolower()
// echo "<br>";
// echo strtoupper($string);//strtoupper(()
// echo "<br>";
// echo strlen($string);//strlen()
// echo "<br>";
// echo $string[7];//string[]
// echo "<br>";
// echo str_replace("world" , "Tasneem" ,$string);//str_replace()
// echo "<br>";
// echo substr($string,5);//substr()

//numbers
// echo "<br>";
// echo 10 * 10;
// echo "<br>";
// echo 10 / 10;
// echo "<br>";
// echo 10 + 10;
// echo "<br>";
// echo 10 - 10;
// echo "<br>";
// echo abs(-5);
// echo "<br>";
// echo pow(-5,2);
// echo "<br>";
// echo sqrt(100);
// echo "<br>";
// echo round(2.6);
// echo "<br>";
// echo floor(2.6);
// echo "<br>";
// echo ceil(2.3);
// echo "<br>";
// echo 10%2;
// echo "<br>";
// $num=20;
// $num--;
// echo $num;
// echo "<br>";
// echo max(10,50);
// echo "<br>";
// echo min(10,50);
// ?> 

<?php
/*
1.	Write a PHP script to: 

a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized.
*/
/*
$string="Hello world";
//a
echo strtolower($string);//strtolower()
echo "<br>";
//b
echo strtoupper($string);//strtoupper(()
echo "<br>";
//c
echo ucfirst($string);
echo "<br>";
//d
echo ucwords($string);
echo "<br>";
*/

/*2.	Write a PHP script splitting the following numeric string to be a date format. 

Sample Output: '085119'
Expected Output: 08:51:19
*/
/*
$string="085119";
$result=implode( ":" ,str_split($string,2));
echo $result;
*/

/*3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’*/
/*
$string="I am a full stack developer at orange coding academy";
if(strstr($string,"orange")){
echo "Word Found!" ;}
*/
 
 
/*4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php'*/
/* 
$string="www.orange.com/index.php";
echo substr($string,15);
*/
 
/*5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info'*/
/* 
$string="info@orange.com";
echo substr($string,0,4)
*/


/*6.	Write a PHP script to get the last three characters from the string. 

Sample Output: 'info@orange.com'
Expected Output: 'com'
*/
 /* 
 $string="info@orange.com";
 echo substr($string,-3)
*/

/*
7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 

Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'

Expected Output: 254ABCc or h242sfeDAFEe32  -> random number 
*/
/* 
$string="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
$random="";
$length=10;
for($i=0;$i<$length;$i++){
$random .=$string[random_int(0,strlen($string)-1)];
}

echo $random;
*/

/*
8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius.
*/
/*
$string="That new trainee is so genius.";
echo str_replace("That","the",$string,);
*/
/* 
9.	Write a PHP script to find the first character that is different between two strings. 

String1 : 'dragonball'
String2 : 'dragonboll'
Expected Result : First difference between two strings at position 7: "a" vs "o"
*/
/* 
function compare($string1,$string2){
$length=min(strlen($string1),strlen($string2));
for($i=0;$i<$length;$i++){
if($string1[$i]!==$string2[$i]){
    return "First difference between two strings is at position $i: '{$string1[$i]}' vs '{$string2[$i]}'";
}
}}
$string1="dragonball";
$string2="dragonboll";
echo compare($string1,$string2);
*/
/*
10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 

Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”}
*/
/* 
$string ="Twinkle, twinkle, little star.";
$array=explode(" ",$string);
var_dump($array);
*/

 /*
11.	Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a'
*/
/*
function char($i){
   return ++$i;
}
echo char('a');
echo "<br>";
echo char('z');
*/

/*
12.	Write a PHP script to insert a string at the specified position in a given string. 

Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
*/
/*
$string="The brown fox";
$word="quick ";
$pos=4;
echo substr_replace($string,$word,$pos,0);
*/

/*
18. Write a PHP script to get the first word of a sentence. 
Original String: 'The quick brown fox'
Expected Output: 'The'
*/
/* 
$string="The quick brown fox";
echo strtok($string," ");
*/
 
/*
13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24'
*/
/*
 $string='0000657022.24';
 echo str_replace('0',"",$string);
 */
/*
14.	Write a PHP script to remove part of a string. 

Original String: 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output: 'The quick brown jumps over the lazy dog'
*/
/* 
 $string="The quick brown fox jumps over the lazy dog";
 echo str_replace("fox","",$string);
 */

/* 
15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog'
*/
/*
$string="The quick brown fox jumps over the lazy dog---";
 echo str_replace("-","",$string);
*/

/*
16.	Write a PHP script to remove Special characters from the following string. 

Sample Output: '\"\1+2/3*2:2-3/4*3'
Expected Output: '1 2 3 2 2 3 4 3'
*/

/*
 $string='\"\1+2/3*2:2-3/4*3';
 echo preg_replace('/[^A-Za-z0-9]/',' ',$string);
*/

/*
17.	Write a PHP script to select first 5 words from the following string. 

Sample Output: 'The quick brown fox jumps over the lazy dog'
Expected Output: 'The quick brown fox jumps'
*/

/*
 $string="The quick brown fox jumps over the lazy dog";
echo substr($string,0,25)."<br>";
echo implode(' ',array_slice(explode(' ',$string),0,5));
*/

/*
18.	Write a PHP script to remove comma(s) from the following numeric string.
 
Sample Output: '2,543.12'
Expected Output: 2543.12
*/

/*
$string="2,543.12";
 echo str_replace(",","",$string);
*/

/*
19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z 
*/
/*
foreach (range('a', 'z') as $char) {
    echo $char ." ";
}
*/
?>
</body>
</html>