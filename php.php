<!-- --------------------------------------------------------------------------- VARIABLE
 1. VARIABLE -->
<?php
$variable = 1;
print_r();
?>

<!-- --------------------------------------------------------------------------- OUTPUTTING
2. OUTPUTTING -->
<?php
$num = 5;
print_r($num);
// 5
?>

<!-- --------------------------------------------------------------------------- STRING
 3. STRING -->
<?php
$string = "string";
print_r($string);
// string
?>

<!-- --------------------------------------------------------------------------- ARRAY
 4. ARRAY -->
<?php
$array = ["word1", "word2", "word3", " word4"];
print_r($array);
//[0] => word1
//[1] => word2
//[2] => word3
//[3] =>  word4
?>

<!-- --------------------------------------------------------------------------- OBJECT
 5. OBJECT -->
<?php
$keyValueArray = ["name" => "Brett", "age" => 30];
print_r($keyValueArray);
//[name] => Brett
//[age] => 30
?>

<!-- --------------------------------------------------------------------------- TYPEOF
 6. TYPEOF -->
<?php
$num = 5;
print_r(gettype($num));
// interger

$string = 'string';
print_r(gettype($string));
// string

$boolean = true;
print_r(gettype($boolean));
// boolean

$array = ['dog', 'cat'];
print_r(gettype($array));
// array

$object = ["name" => "Brett", "age" => 30];
print_r(gettype($object));
// array

?>

<!-- --------------------------------------------------------------------------- ToString
 7. TOSTRING, convert an integer to a string -->
<?php
$number = 24;
$number = (string)$number;
print_r($number);
print_r(gettype($number));
// 24
// string
?>

<!-- --------------------------------------------------------------------------- to Integer
 8. To Integer, convert a string to an integer -->
<?php
$string = "24";
$string = (int)$string;
print_r($string);
print_r(gettype($string));
// 24 
// integer
?>

<!-- --------------------------------------------------------------------------- JOIN array to string
 9. JOIN, convert an array to string -->
<?php
$array = ["word1", "word2", "word3", "word4"];
$array = implode(" ", $array);
print_r($array);
print_r(gettype($array));
//word1 word2 word3  word4
//string
?>

<!-- --------------------------------------------------------------------------- SPLIT string to array
 10. SPLIT, convert a string to an array -->
<?php
$sentence = "How are you doing today?";
$sentence = explode(" ", $sentence);
print_r($sentence);
//[0] => How
//[1] => are
//[2] => you
//[3] => doing
//[4] => today?
?>

<!-- --------------------------------------------------------------------------- Push to an array
 11. PUSH -->
<?php
$newWord = "new word";
$sentence[] = $newWord;
print_r($sentence);
//[0] => new word
?>
<!-- // or -->
<?php
$newWord = "word";
$sentence = [];
array_push($sentence, $newWord);
print_r($sentence);
//[0] => word
?>

<!-- --------------------------------------------------------------------------- ARRAY_SPLICE INSERT
 12.a SPLICE, insert item into specific index position -->
<?php
$array = ["word1", "word2", "word3", " word4"];
array_splice($array, 2, 0, 'hello');
print_r($array);
//[0] => word1
//[1] => word2
//[2] => hello
//[3] => word3
//[4] =>  word4
?>

<!-- --------------------------------------------------------------------------- ARRAY_SPLICE REMOVE
 12b. SPLICE remove specific element from array by index position -->
<?php
$array = ["word1", "word2", "word3", " word4"];
array_splice($array, 2, 1);
print_r($array);
//[0] => word1
//[1] => word2
//[2] => hello
//[3] => word3
//[4] =>  word4
?>

<!-- --------------------------------------------------------------------------- ARRAY_SPLICE INDEX
 12c. SPLICE INDEX, assigns the spliced item. -->
 <?php
$array = ["word1", "word2", "word3", " word4"];
$array = array_splice($array, 2, 1);
print_r($array);
//[0] => word3
?>

<!-- --------------------------------------------------------------------------- ARRAY_SHIFT
 13. ARRAY_SHIFT, removes the first item of an array. -->
<?php
$array = ["word1", "word2", "word3", " word4"];
array_shift($array);
print_r($array);
//[0] => word2
//[1] => word3
//[2] =>  word4
?>

<!-- --------------------------------------------------------------------------- ARRAY_POP
 13. ARRAY_POP, removes the last item of an array. -->
<?php
$array = ["word1", "word2", "word3", " word4"];
array_pop($array);
print_r($array);
//[0] => word1
//[1] => word2
//[2] => word3
?>

<!-- --------------------------------------------------------------------------- ARRAY_KEYS
 14. ARRAY_KEYS, get the keys of a key value array. -->
<?php
$keyValueArray = ["name" => "Brett", "age" => 30];
$keys = array_keys($keyValueArray);
print_r($keys);
//[0] => name
//[1] => age
?>

<!-- --------------------------------------------------------------------------- ARRAY_MERGE
 15. ARRAY_MERGE, joining arrays. -->
<?php
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
$array3 = array_merge($array1, $array2);
print_r($array3);
// [0] => a
// [1] => b
// [2] => c
// [3] => d
// [4] => e
// [5] => f
?>

<!-- --------------------------------------------------------------------------- SORT
 16. SORT, sort an array by alphabetical or numeric order -->
<?php
$sortNum = [3, 6, 8, 9];
sort($sortNum);
print_r($sortNum);
// [0] => 3
// [1] => 6
// [2] => 8
// [3] => 9
?>
//or
<?php
$sortWords = ['How', 'Are', 'you', 'doing', 'today?'];
sort($sortWords);
print_r($sortWords);
// [0] => Are
// [1] => How
// [2] => doing
// [3] => today?
// [4] => you
?>

<!-- --------------------------------------------------------------------------- REVERSE
 17. REVERSE, reverses the order of an array. -->
<?php
$array = ["word1", "word2", "word3", " word4"];
$array = array_reverse($array);
print_r($array);
// [0] =>  word4
// [1] => word3
// [2] => word2
// [3] => word1
?>

<!-- --------------------------------------------------------------------------- LENGTH
 18. LENGTH, get the amount of characters in a string or elements in an array -->
<?php
$array = ["word1", "word2", "word3", " word4"];
$array = count($array);
print_r($array);
// 4
?>

<!-- --------------------------------------------------------------------------- IF STATMENT
 19. IF STATEMENT -->
<?php
if (1 + 1 == 2) {
    print_r('correct');
} else {
    print_r('incorrect');
}
// correct
?>

<!-- --------------------------------------------------------------------------- IN_ARRAY (INCLUDES)
 20. IN_ARRAY -->
<?php
$animals = ['dog', 'cat', 'mouse', 'rabbit'];

if (in_array('hare', $animals)) {
   print_r("hare");
} else if (in_array('dog',$animals)) {
   print_r('dog');
};
// dog
?>

<!-- --------------------------------------------------------------------------- FORLOOP
 21. FORLOOP -->
<?php
for ($i = 0; $i < 100; $i++) {
    print_r($i);
}
// 012345678910....
?>

<!-- --------------------------------------------------------------------------- FOREACH
22. FOREACH -->
<?php
$animals = ['dog', 'cat', 'mouse', 'rabbit'];
foreach($animals as $item) {
    print_r($item ."\n");
}
// dog
// cat
// mouse
// rabbit
?>

<!-- --------------------------------------------------------------------------- ARRAY_RAND
 23. ARRAY_RAND, get a random element from an array by its index position. -->
<?php
$numbers = [3, 6, 8, 4, 9, 5, 1, 2];
$numbers = $numbers[array_rand($numbers)];
print_r($numbers);
?>

<!-- --------------------------------------------------------------------------- MATH MAX
24. MATH MAX, get the max number in an array -->
<?php
$numbers = [3, 6, 8, 4, 9, 5, 1, 2];
$numbers = max($numbers);
print_r($numbers);
// 9
?>

<!-- --------------------------------------------------------------------------- MATH MIN
25. MATH MIN, get the max number in an array -->
<?php
$numbers = [3, 6, 8, 4, 9, 5, 1, 2];
$numbers = min($numbers);
print_r($numbers);
// 1
?>

<!-- --------------------------------------------------------------------------- first INDEXOF
27. INDEX, get the first index position of an element in an array or character(s) i -->
<?php
$string = 'This is a string';
$firstIndex = stripos($string, "i");
print_r($firstIndex);
// 2
?>

<!-- --------------------------------------------------------------------------- LAST INDEXOF
 28. LASTINDEXOF, get the last index position of an element in a string or an array -->
<?php
$string = 'This is a string';
$lastIndex = strripos($string, "i");
print_r($lastIndex);
// 13
?>

<!-- --------------------------------------------------------------------------- TOUPPERCASE
29. UPPERCASE, convert a string to uppercase -->
<?php
$string = "hello";
$string = strtoupper($string);
print_r($string);
// HELLO
?>

<!-- --------------------------------------------------------------------------- TOLOWERCASE
 30. TOLOWERCASE, convert a string to lowercase -->
<?php
$string = "HELLO";
$string = strtolower($string);
print_r($string);
// hello
?>

<!-- --------------------------------------------------------------------------- REPEAT
31. REPEAT, repeat a string -->
<?php
$string = "hello ";
$string = str_repeat($string, 3);
print_r($string);
// hello hello hello
?>

<!-- --------------------------------------------------------------------------- CONCATENATION METHOD
 32, CONCATENATION METHOD -->
<?php
$data1 = "the color is";
$data2 = "red";
$result = $data1 . ' ' . $data2;
print_r($result);
?>
<!-- // or -->
<?php
$data1 = "the color is";
$data2 = "red";
$result = "$data1 $data2";
print_r($result);
?>
<!-- // or -->
<?php
$data1 = "the color is";
$data2 = "red";
$result = "{$data1} {$data2}";
print_r($result);
?>

