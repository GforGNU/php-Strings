

<?php 
// //substring function
// $x = "This is a sentence";
// echo substr($x, 0); // This is a sentence 
// echo substr($x, 0,4); // this
// echo "</br>";
// echo substr($x, -8); // sentence
// echo "</br>";
// echo substr($x, 5, -9); // is a 


// //replace function
// $examples = array(
//     "My name is Lojain",
//     "I am 27 years old",
//     "I live in Madaba"
// ); 

// $search = array(
//     "Lojain",
//     "27",
//     "Madaba"
// );

// $replace = array(
//     "Marya",
//     "24",
//     "Amman"
// );

// $replaced = str_replace($search, $replace, $examples);

// print_r ( $replaced );

// echo "</br>";



// //trim

// $trimit = 'EXTRA I like coding EXTRA';
// $trimmed = trim ( $trimit, 'EXTRA' );
// print_r ( $trimmed );


//is_string

echo "1st TASK <hr>";
$y = "This is a sentence ";
//     // a) transform a string all uppercase letters.

echo strtoupper($y);
echo "</br>";
    // b) transform a string all lowercase letters.
echo strtolower($y);
echo "</br>";
    // c) make a string's first character uppercase.
echo ucfirst($y);
echo "</br>";
    // d) make a string's first character of all the words uppercase.
echo ucwords($y);
echo "</br>";

/////////////////////////////////////
echo "2nd TASK <hr>";

// Sample string : '082307'
// Expected Output : 08:23:07

$sample = "082307";

$splitt = (str_split($sample,2));
echo implode(":", $splitt);


/////////////////////////////////
echo "</br>";
echo "</br>";
echo "3rd TASK <hr>";
// Sample string : 'The quick brown fox jumps over the lazy dog.'
// Check whether the said string contains the string 'jumps'.
$sample2 = 'The quick brown fox jumps over the lazy dog.';
$findme   = 'jumps';
$pos = strpos($sample2, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$sample2'";
} else {
    echo "The string '$findme' was found in the string '$sample2'";
    echo " and exists at position $pos";
}

/////////////////////////////////
echo "</br>";
echo "</br>";
echo "4th TASK <hr>";
  
$var_name = 32.360; 
echo strval($var_name); 
// echo gettype($var_name);

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "5th TASK <hr>";

$path = "/home/httpd/html/index.php";
$file = basename($path);         
echo $file;

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "6th TASK <hr>";

$mailid = "Ayham@example.com";
$user = strstr($mailid, "@", true);
echo $user;

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "7th TASK <hr>";

$last3ch = substr($mailid, -3); 
echo $last3ch;  

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "8th TASK <hr>";

$value1 = 65.45;
$value2 = 104.35;
$sum = $value1+$value2;

echo number_format($sum, 2);

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "9th TASK <hr>";


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

echo substr(str_shuffle($permitted_chars), 0, 10);

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "10th TASK <hr>";

$sample3 = "the quick brown fox jumps over the lazy dog";
$search = "the";
$replace = "That";
$replaced = str_replace($search, $replace, $sample3);
echo $replaced;

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "11th TASK <hr>";


$string1 = 'football';
$string2 = 'footboll';
$pos = strspn($string1 ^ $string2, "\0");

printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "12th TASK <hr>";



////////////////////////////////////
echo "</br>";
echo "</br>";
echo "13th TASK <hr>";

$path = "/home/httpd/html/index.php";
$file2 = basename($path, ".php");         
echo $file2;
//OR
echo "</br>";
$path_parts = pathinfo('/home/httpd/html/index.php');
echo $path_parts['filename'];

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "14th TASK <hr>";

$str = 'a';
echo ++$str; 
echo "</br>";
$str = 'z';
$nextstr = ++$str;
if (strlen($nextstr) > 1) {
    $nextstr = $nextstr[0];
   }
   echo $nextstr;

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "15th TASK <hr>";

$sample4 = "rayy@example.com";
$trimmed = trim ( $sample4, 'rayy@' );
print_r ( $trimmed );

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "16th TASK <hr>";

echo bin2hex($sample4);

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "17th TASK <hr>";

$sample5 = "The brown fox ";
$add = "quick ";
$newstr = substr_replace($sample5, $add, 4 , 0);
echo $newstr;

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "18th TASK <hr>";

$arr = explode(' ',trim($sample5));
echo $arr[0]; 

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "19th TASK <hr>";

$num = 00042402.44;
$trimmed2 = trim ( $num, '0' );
print_r ( $trimmed2 );

////////////////////////////////////
echo "</br>";
echo "</br>";
echo "20th TASK <hr>";
$sample6 = "the quick brown fox jumps over the lazy dog";
$search2 = "fox";
$trimmed3 = str_replace($search2, '', $sample6) ;
print_r ( $trimmed3 );



////////////////////////////////////
echo "</br>";
echo "</br>";
echo "21th TASK <hr>";
$sample6 = "the quick brown fox jumps over the lazy dog///";
$search3 = "///";
$trimmed4 = str_replace($search3, '', $sample6) ;
print_r ( $trimmed4 );

//////////////////
echo "</br>";
echo "</br>";
echo "extra TASK <hr>";

$mark = 40;

if ($mark <= 100 and $mark >= 90){
    echo "Your mark is A";
}elseif ($mark <= 89 and $mark >= 80){
    echo "Your mark is B";
}elseif ($mark <= 79 and $mark >= 70){
    echo "Your mark is C";
}elseif ($mark <= 69 and $mark >= 50){
    echo "Your mark is D";
}elseif ($mark < 50){
    echo "You failed";
}

//////////////////
echo "</br>";
echo "</br>";
echo "extra TASK <hr>";

  
//   $op1 = '5-4= $numb';
//   $op2 = '2 + $numb = 4';
//   $op3 =  '$numb / = 3';

// var $numb;

//     if ($test = $op1){
//         $numb = 5 - 4;
//     }elseif($test = $op2){
//         $numb = 2;
//     }elseif($test = $op3 ){
//         $numb = 9 / 3;
//     };
    


// $test = $op3;
// echo $numb;
// // eval("\$numb = \"$numb\";");
// // echo $numb. "\n";

function subs(int $d, int $e) {
    $z = $d - $e;
    return $z;
  }
function mul(int $d, int $e) {
    $z = $d * $e;
    return $z;
  }
  echo '5 - 4 = $z > z =' . subs(5, 4) . "<br>";
  echo '2 + $z = 4 > z =' . subs(4, 2) . "<br>";
  echo '$z / 9 = 3 > z =' . mul(9, 3);

?>

