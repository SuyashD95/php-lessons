<?php
	# Array - Variable that holds multiple values
	/*
		- Indexed
		- Associative
		- Multi-dimensional
	 */
	
	
	// Indexed
	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford']; # It is equivalent to array() function to declare and define an array.
	$cars[3] = 'Chevy';
	$cars[] = 'BMW'; # Use empty brackets to append the new value to the end of the array 

	// echo $people[1];
	// echo $ids[2];
	// echo $cars[4];

	# Use the count function to calculate the length of the array.
	/*
		Syntax:         count(array,mode);

		Parameter	    Description
		array	    	Required. Specifies the array
		mode	    	Optional. Specifies the mode. Possible values:
						0 - Default. Does not count all elements of multidimensional arrays
						1 - Counts the array recursively (counts all the elements of multidimensional arrays)

		Return Value:	Returns the number of elements in the array
	 */
	// echo count($cars);
	
	# We can use the print_r() function to list all the elements of an array. This is mainly used for debugging purposes.
	/*
		The print_r() function is a built-in function in PHP and is used to print or display information stored in a variable.

		Syntax:print_r( $variable, $isStore )
		
		Parameters: This function accepts two parameters as shown in above syntax and described below.

			$variable: This parameter specifies the variable to be printed and is a mandatory parameter.
			$isStore: This an option parameter. This parameter is of boolean type whose default value is FALSE and is used to store the output of the print_r() function in a variable rather than printing it. If this parameter is set to TRUE then the print_r() function will return the output which it is supposed to print.
		
		Return Value: If the $variable is an integer or a float or a string the function prints the value of the variable. If the variable is an array the function prints the array in a format which displays the keys as well as values, a similar notation is used for objects. If the parameter $isStore is set to TRUE then the print_r() function will return a string containing the information which it is supposed to print.
 	*/
	// print_r($cars);
	
	# We can also use the var_dump() function to list all the elements' data types and values.
	/*
		Syntax: void var_dump ($expsn)
		
		Parameters: The function takes a single argument $expsn that may be one single variable or an expression containing several space separated variables of any type.

		Return Type: This function has no return type.
	 */
	// var_dump($cars);
	

	// Associative arrays
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	$people['Jill'] = 42;
	// print_r($people);
	

	// Multi-Dimensional (Arrays within an array)
	$cars = array(
		array('name' => 'Honda', 'total Cars' => 20, 'cars Sold' => 10),
		array('name' => 'Toyota', 'total Cars' => 30, 'cars Sold' => 20),
		array('name' => 'Ford', 'total Cars' => 23, 'cars Sold' => 12)
	);
	echo print_r($cars);
?>