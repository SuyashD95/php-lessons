<?php
	// Single Line Comment
	# Single line comment
	/*
		Multi-line
		Comment
	 */
	

	# VARIABLES
	/*
		- Prefix $
		- Start with a letter or an underscore
		- Only letters, numbers and underscores
		- Case sensitive
	 */
	
	# DATA TYPES
	/*
		String
		Integers
		Floats
		Booleans (true or false)
		Arrays
		Objects
		NULL
		Resource (Not an actual data type)
	 */
	$output = 'Hello World';

	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;

	// To concatenate two strings, we use period (.), instead of the plus symbol (+).
	$string1 = 'Hello';
	$string2 = 'World';
	$greeting = $string1 .' '. $string2 . '!';

	// There is another method to contenate strings. But, if we use double quotes (""), then all the variables inside the quotes will be parsed.
	//  $greeting2 = '$string1 $string2'' --> $string1 $string2
	$greeting2 = "$string1 $string2";   # --> Hello World

	$float1 = 4.4;
	$bool1 = true;

	// We use define() function to instantiate Constants in PHP.
	/*
		Syntax
		define(name,value,case_insensitive)

		Parameter	        Description
		name                Required. Specifies the name of the constant
		value	            Required. Specifies the value of the constant
		case_insensitiv     Optional. Specifies whether the constant name should be case-insensitive. Possible values:
		                        TRUE - Case-insensitive
		                        FALSE - Default. Case-sensitive
	 */
	define('GREETING', 'Hello Everyone!', false);

	// We use echo() function to output one or more strings.
	echo GREETING;
?>