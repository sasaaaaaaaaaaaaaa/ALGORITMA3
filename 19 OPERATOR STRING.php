<?php
$text = "Hello World!";
echo strlen($text); // Outputs: 12
$text = "Hello World!";
echo str_word_count($text); // Outputs: 2
$text = "Hello World!";
echo strrev($text); // Outputs: "!dlroW olleH"
echo strtoupper("Hello World!"); // Outputs: "HELLO WORLD!"
echo strtolower("Hello World!"); // Outputs: "hello world!"
echo ucwords("hello world!"); // Outputs: "Hello World!"
echo lcfirst("Hello"); // Outputs: "hello"
$text = " Hello World! ";
echo "[" . trim($text) . "]"; // Outputs: "[Hello World!]"
echo "[" . ltrim($text) . "]"; // Outputs: "[Hello World! ]"
echo "[" . rtrim($text) . "]"; // Outputs: "[ Hello World!]"

$text = "Hello World!";
echo strpos($text, "World"); // Outputs: 6
echo strrpos($text, "o"); // Outputs: 7

$text = "Hello World!";
echo str_replace("World", "PHP", $text); // Outputs: "Hello PHP!"

$text = "Hello World!";
echo substr($text, 0, 5); // Outputs: "Hello"
echo substr($text, 6); // Outputs: "World!"

echo strcmp("Hello World!", "Hello World!"); // Outputs: 0
echo strcasecmp("hello world!", "HELLO WORLD!"); // Outputs: 0

$text = "Hello";
print_r(str_split($text, 2)); // Outputs: Array ( [0] => He [1] => ll [2] => o )
