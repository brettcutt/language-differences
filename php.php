// 1. variable
<?php
$variable = 1;
print_r();
?>

// 2. logging
<?php
print_r($num);
?>

// 3. string
<?php
$string = "1";
print_r();
?>

// 4. array
<?php
$array = ["word1", "word2", "word3", " word4"];
print_r();
?>

// 5. Key value array
<?php
$keyValueArray = ["name" => "Brett", "age" => 30];
print_r($keyValueArray);
?>

// 6. integer to string
<?php
$number = 24;
$number = (string)$number;
print_r($number);
?>

// 7. type 
<?php
print_r(gettype($variable));
?>

// 8. string to integer
<?php
$string = "24";
$string = (int)$string;
print_r($string);
?>

// 9. array to string
<?php
$array = ["word1", "word2", "word3", " word4"];
$array = implode(" ", $array);
print_r($array);
?>

// 10. string to array
<?php
$sentence = "How are you doing today?";
$sentence = explode(" ", $sentence);
print_r($sentence);
?>

// 11. push to array
<?php
$newWord = "word";
$sentence[] = $newWord;
print_r($sentence);
?>
// or
<?php
$newWord = "word";
$sentence = [];
array_push($sentence, $newWord);
print_r($sentence);
?>

// 12. insert into array index position
<?php
$array = ["word1", "word2", "word3", " word4"];
array_splice($array, 2, 0, 'hello');
print_r($array);
?>

// 13. remove first element from array
<?php
$array = ["word1", "word2", "word3", " word4"];
array_shift($array);
print_r($array);
?>

// 14. remove the last element from an array
<?php
$array = ["word1", "word2", "word3", " word4"];
array_pop($array);
print_r($array);
?>

// 15. remove specific element from array
<?php
$array = ["word1", "word2", "word3", " word4"];
array_splice($array, 2,1);
print_r($array);
?>
// or
<?php
$array = ["word1", "word2", "word3", " word4"];
unset($array[2]);
print_r($array);
?>

// 16. get keys of key value array
<?php
$keyValueArray = ["name" => "Brett", "age" => 30];
$keys = array_keys($keyValueArray);
print_r($keys);
?>

// 17. join arrays
<?php
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
$array3 = array_merge($array1, $array2);
print_r($array3);
?>

// 18. sort array
<?php
$sortNum = [3, 6, 8, 9];
sort($sortNum);
print_r($sortNum);
?>
//or
<?php
$sortWords = ['How', 'Are', 'doing', 'today?', 'you'];
sort($sortWords);
print_r($sortWords);
?>

// 19. reverse array
<?php
$array = ["word1", "word2", "word3", " word4"];
$array = array_reverse($array);
print_r($array);
?>

// 20. length
<?php
$array = ["word1", "word2", "word3", " word4"];
$array = count($array);
print_r($array);
?>

// 21. if statment
<?php
if (1 + 1 == 2) {
    print_r('correct');
};
?>

// 22. if in array
<?php
$animals = ['dog', 'cat', 'mouse', 'rabbit'];

if (in_array('hare', $animals)) {
   print_r("hare");
} else if (in_array('dog',$animals)) {
   print_r('dog');
};
?>

// 23. forloop
<?php
for ($i = 0; $i < 100; $i++) {
    print_r($i);
}
?>

//24. forEach
<?php
$animals = ['dog', 'cat', 'mouse', 'rabbit'];
foreach($animals as $item) {
    print_r($item ."\n");
}
?>

// 25. math random
<?php
$numbers = [3, 6, 8, 4, 9, 5, 1, 2];
$numbers = $numbers[array_rand($numbers)];
print_r($numbers);
?>

// 26. math max
<?php
$numbers = [3, 6, 8, 4, 9, 5, 1, 2];
$numbers = max($numbers);
print_r($numbers);
?>

//27. index of
<?php
$string = 'This is a string';
$firstIndex = stripos($string, "i");
print_r($firstIndex);
?>

// 28. last index of
<?php
$string = 'This is a string';
$lastIndex = strripos($string, "i");
print_r($lastIndex);
?>

//29. string to uppercase
<?php
$string = "hello";
$string = strtoupper($string);
print_r($string);
?>

// 30. string to lowercase
<?php
$string = "HELLO";
$string = strtolower($string);
print_r($string);
?>

// 31. repeat a string
<?php
$string = "hello ";
$string = str_repeat($string, 3);
print_r($string);
?>

// 32, concat method
<?php
$data1 = "the color is";
$data2 = "red";
$result = $data1 . ' ' . $data2;
print_r($result);
?>
// or
<?php
$data1 = "the color is";
$data2 = "red";
$result = "$data1 $data2";
print_r($result);
?>
// or
<?php
$data1 = "the color is";
$data2 = "red";
$result = "{$data1} {$data2}";
print_r($result);
?>

