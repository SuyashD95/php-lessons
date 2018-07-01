<?php
	# substr(string [, start [, end]]])
	# Returns a portion of a string
	
	// $output = substr('Hello', 1, 3);
	// $output = substr("Hello", -2);	
	// echo $output;
	
	# strlen(string)
	# Returns the length of a string
	
	// $output = strlen('Hello World');
	// echo $output;

	# strpos(string, charToFind)
	# Find the position of the first occurence of a substring
	
	// $output = strpos('Hello World', 'o');
	// echo $output;
	
	# strrpos(string, charToFind)
	# Find the position of the last occurence of a substring
	
	// $output = strrpos('Hello World', 'o');
	// echo $output;
	
	# trim(string)
	# Strips whitespace
	
	// $text = 'Hello World                         ';
	// var_dump($text);

	// $trimmed = trim($text);
	// var_dump($trimmed);
	
	# strtoupper(string)
	# Makes everything uppercase
	
	// $output = strtoupper('Hello World');
	// echo $output;

	# strtolower(string)
	# Makes everything lowercase
	
	// $output = strtolower('Hello World');
	// echo $output;
	
	# ucwords(string)
	# Capitalize every word
	
	// $output = ucwords('hello world');
	// echo $output;

	# str_replace(stringToMatch, replacementString, string)
	# Replace all occurences of a search string with a replacement
	
	// $text = 'Hello World';
	// $output = str_replace('World', 'Everyone', $text);
	// echo $output;

	# is_string(string)
	# Check if string returns 1, otherwise, returns nothing
	
	// $val = 22;
	// $output = is_string($val);

	// echo $output;

	// $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

	// foreach($values as $value) {
	// 	if(is_string($value)) {
	// 		echo "{$value} is a string<br>";
	// 	}
	// }
	
	# gzcompress(data)
	# Compress a string
	
	$string = "Shoes A.I. katana paranoid stimulate claymore mine car. Rifle shanty town refrigerator otaku car systemic chrome soul-delay receding. Free-market tiger-team semiotics bicycle hotdog rain towards drugs drone voodoo god math-sensory sentient office. Urban sub-orbital free-market apophenia tiger-team cartel crypto-camera assault dolphin order-flow tanto cardboard vehicle. Human BASE jump decay gang bicycle augmented reality futurity wristwatch tiger-team. Dome courier cyber-range-rover numinous ablative motion j-pop BASE jump smart-military-grade. Corporation physical shoes sign rifle Chiba jeans.";

	$compressed = gzcompress($string);

	// echo $compressed;

	# To uncompress, use gzuncompress(data) 
	
	$original = gzuncompress($compressed);
	echo $original;
?>