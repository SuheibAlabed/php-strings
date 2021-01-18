<?php

  //-------------------- Start -----------------------//
//-------------------- Question #1 -----------------------//
{
    $name = "suheib adel alabed";
    echo "<h2> Question #1 </h2><br>";
    echo "a) Convert Name to UpperCase: <b> " . strtoupper($name)."</b><br>";
    echo "b) Convert Name to LowerCase: <b>" . strtolower($name) ."</b><br>";
    echo "c) First Character Uppercase <b>" . ucfirst($name) ."</b><br>";
    echo "d) First character of all the words uppercase <b>" . ucwords($name) ."</b><br>";
}






//-------------------- Question #2 -----------------------//
{
echo "<br><h2> Question #2 </h2><br>";

$var = "082307";
echo "<h5>2) Write a PHP script to split the following string.
Sample string : '082307'
Expected Output : 08:23:07 </h5> ";




$var = str_split($var, 2);
$var1 = join(":",$var);
print_r($var1);
}






//-------------------- Question #3 -----------------------//


echo "<br><br><h2> Question #3 </h2><br>";

echo " <h5>3)Write a PHP script to check whether a string contains a specific string?<br>
        Sample string : 'The quick brown fox jumps over the lazy dog.'<br>
        Check whether the said string contains the string 'jumps'.</h5> ";




$var1 ="The quick brown fox jumps over the lazy dog.";

if(strpos($var1, 'jumps') !== false){
    echo ("Yes");
}else{
    echo ("No");
}






//-------------------- Question #4 -----------------------//

echo "<br><br><h2> Question #4 </h2><br>";

echo "<h5> 4) Write a PHP script to extract the file name from the following string.<br>
   Sample String : 'www.example.com/public_html/index.php'<br>
   Expected Output : 'index.php' </h5>";



$var2 ="www.example.com/public_html/index.php";
list($link, $folder, $file) = explode("/", $var2);
echo $file; 






//-------------------- Question #5 -----------------------//    

echo "<br><br><h2> Question #5 </h2><br>";

echo "<h5> 5) Write a PHP script to extract the user name from the following email ID.<br>
Sample String : 'Orange@example.com'<br>
Expected Output : 'Orange </h5>";



$var3 ="Orange@example.com";

list($name, $extend) = explode("@", $var3);
echo $name; 








//-------------------- Question #6-----------------------//

echo "<br><br><h2> Question #6 </h2><br>";

echo "<h5> 6) Write a PHP script to get the last three characters of a string.<br>
Sample String : 'Orange@example.com'<br>
Expected Output : 'com' </h5>";




$var4 ="Orange@example.com";
list($name, $extend) = explode(".", $var4);
echo $extend;







//-------------------- Question7 #-----------------------//

echo "<br><br><h2> Question #7 </h2><br>";

echo "<h5> 7) Write a PHP script to generate simple random passwords [do not use rand() function] from a given string.<br>
Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'<br>
Note : Password length may be 6, 7, 8 etc. <br>
Expected OutPut: 254ABCc </h5> ";




$var5 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

echo substr(str_shuffle($var5), 0, 7);







//-------------------- Question8 #-----------------------//

echo "<br><br><h2> Question #8 </h2><br>";

echo "<h5>8) Write a PHP script to replace the first 'the' of the following string with 'That'.<br>
Sample date : 'the quick brown fox jumps over the lazy dog.'<br>
Expected Result : That quick brown fox jumps over the lazy dog. </h5>";





$var6 = "the quick brown fox jumps over the lazy dog.";

$var7 = explode(" ",$var6);

$var7[0] = "That";

print_r(join(" ",$var7));







//-------------------- Question 9 #-----------------------//

echo "<br><br><h2> Question #9 </h2><br>";

echo "<h5> 9) Write a PHP script to find the first character that is different between two strings.<br>
String1 : 'football'<br>
String2 : 'footboll'<br>
Expected Result : First difference between two strings at position 5: a vs o </h5>" ;




$var8 = "football";
$var9 = "footboll";

$var10 = str_split($var8);
$var11 = str_split($var9);

for($i = 0;$i<count($var10);$i++)
{
    if($var10[$i] !== $var11[$i])
    {
        echo("First difference between two strings at position $i: ".$var10[$i]. "  vs  " .$var11[$i]);
        
    }
}





//-------------------- Question 10 #-----------------------//

echo "<br><br><h2> Question #10 </h2><br>";

echo "<h5>10) Write a PHP script to put a string in an array.
Sample strings : Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.;
Expected Result (using var_dump()) : array(4) { [0]=> string(30) winkle, twinkle, little star, [1]=> string(26) How I wonder what you are. [2]=> string(27) Up above the world so high, [3]=> string(26) Like a diamond in the sky. }</h5> ";




$var14 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

$var13 = explode("\n",$var14);
echo var_dump($var13) . "<br>";

print_r($var13);






//-------------------- Question 11 #-----------------------//

echo "<br><br><h2> Question #11 </h2><br>";
echo "<h5> 11) Write a PHP script to print the next character of a specific character.<br>
Sample character : 'a'<br>
Expected Output : 'b'<br>
Sample character : 'z'<br>
Expected Output : 'a' </h5> ";




$var15 = "v";

$var16 = chr((ord($var15)+1));

if(ord($var16)>=122)
    $var16 = "a";

echo $var16;






//-------------------- Question12 #-----------------------//

echo "<br><br><h2> Question #12 </h2><br>";

echo "<h5>12) Write a PHP script to remove a part of a string from the beginning.<br>
Sample string : 'orange@example.com'<br>
Expected Output : 'example.com' ,</h5>";



$var12 = "orange@example.com";
list($name, $extend) = explode("@", $var12);

echo $extend;






//-------------------- Question13 #-----------------------//

echo "<br><br><h2> Question #13 </h2><br>";

echo "<h5>13)Write a PHP script to insert a string at the specified position in a given string.<br>
Original String : 'The brown fox'<br>
Insert 'quick' between 'The' and 'brown'.<br>
Expected Output : 'The quick brown fox'<br></h5> ";



$var00 = "The brown fox";

$var17 = explode( " ",$var00);
$first = array_shift($var17);
$add = array_unshift($var17,$first,"quick");
print_r(join(" ",$var17));






//-------------------- Question14 #-----------------------//

echo "<br><br><h2> Question #14 </h2><br>";

echo "<h5>14) Write a PHP script to get the first word of a sentence.<br>
Original String : 'The quick brown fox'<br>
Expected Output : 'The'<br></h5>";



$var18 = explode(" ",$var00);
print_r ($var18[0]);






//-------------------- Question15 #-----------------------//

echo "<br><br><h2> Question #15 </h2><br>";

echo "<h5> 15)Write a PHP script to remove all leading zeroes from a string.<br>
Original String : '000547023.24'<br>
Expected Output : '547023.24' </h5>";



$var19 = "0000547023.24";
$var20 = str_split($var19);

for($i=0;$i<count($var20);$i++)
{
    if($var20[$i] == 0)
    {
        unset($var20[$i]);        
    }else
    {
        break;
    }
}

print_r(join("",$var20));

//---OR-------->
$var20 = ltrim($var19,'0');
print_r($var20);






//-------------------- Question16 #-----------------------//

echo "<br><br><h2> Question #16 </h2><br>";

echo "<h5>16) Write a PHP script to remove part of a string.<br>
Original String : 'The quick brown fox jumps over the lazy dog'<br>
Remove 'fox' from the above string.<br>
Expected Output : 'The quick brown jumps over the lazy dog'</h5>";



$var21 = "The quick brown fox jumps over the lazy dog";
$txt= "fox";
$var22 = explode(" ",$var21);
for($i=0;$i<=count($var22);$i++)
{
    if($var22[$i] == $txt)
    {
        unset($var22[$i]);
    }
}
print_r(join(" ",$var22));






//-------------------- Question17 #-----------------------//

echo "<br><br><h2> Question #17 </h2><br>";

echo "<h5>17) Write a PHP script to remove trailing slash from a string.<br>
Original String : 'The quick brown fox jumps over the lazy dog///'<br>
Expected Output : 'The quick brown fox jumps over the lazy dog'</h5>";



$var23 = "The quick brown fox jumps over the lazy dog///";
$txt2 = rtrim($var23,'/');

echo $txt2;





//-------------------- Question18 #-----------------------//

echo "<br><br><h2> Question #18 </h2><br>";

echo "<h5>18) Write a PHP script to get the characters after the last '/' in an url.<br>
Sample URL : 'http://www.example.com/5478631'<br>
Expected Output : '5478631'<br></h5>";



$var24 = "http://www.example.com/5478631";
echo  substr(strrchr($var24, "/"), 1);





//-------------------- Question19 #-----------------------//

echo "<br><br><h2> Question #19 </h2><br>";

echo "<h5> 19)Write a PHP script to replace Special characters from the following string.<br>
Sample String : '\"\1+2/3*2:2-3/4*3'<br>
Expected Output : '1 2 3 2 2 3 4 3' </h5> ";
 
$var25 = "1+2/3*2:2-3/4*3";
$Regix  = array("/",":","*","-","+");
 echo  str_replace($Regix, " ", $var25);;





 
//-------------------- Question20 #-----------------------//

echo "<br><br><h2> Question #20 </h2><br>";

echo "<h5>20)Write a PHP script to select first 5 words from the following string.<br>
Sample String : 'The quick brown fox jumps over the lazy dog'<br>
Expected Output : 'The quick brown fox jumps' </h5>";
;


$var26 = "The quick brown fox jumps over the lazy dog";

$var27  =explode(" ",$var26);
print_r (join(" ", array_splice($var27,0,5)));





//-------------------- Question21 #-----------------------//

echo "<br><br><h2> Question #21 </h2><br>";

echo "<h5> 21) Write a PHP script to remove comma(s) from the following numeric string.<br>
Sample String : '2,543.12'<br>
Expected Output : 2543.12</h5>";

$var28 = "2,543.12";
echo str_replace(',', '', $var28);




//--------------------Last Question22 #-----------------------//

echo "<br><br><h2> Question #22 </h2><br>";

echo "<h5> 22) Write a PHP script to print letters from 'a' to 'z' </h5>";

    for($i=97;$i<=122;$i++)
    {
        echo chr($i).' , ';
    }
echo "<br><br>"

    //--------------------The End-----------------------//
 //--------------------Suheib Alabed-----------------------//
?>



