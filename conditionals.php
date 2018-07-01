<?php
	# CONDITIONAL
	
	/*
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	 */
	
	# IF-ELSE-IF
	// $num = 6;

	// if($num == 5) {
	// 	echo '5 passed';
	// } 
	// elseif($num == 6) {
	// 	echo '6 passed'
	// }
	// else {
	// 	echo 'did not pass';
	// }
	
	# NESTING IF
	
	$num = 6;

	// if($num > 4) {
	// 	if($num < 10) {
	// 		echo "$num passed";
	// 	}
	// }
	

	/*
		LOGICAL OPERATORS

		and - && or AND (Both needs to be true) (&& is preferred over using AND)
		or -  || or OR (One of them or both, needs to be true) (|| is preferred over using OR)
		xor - XOR (Exclusive OR - Only one needs to be true but not both)
	 	not - ! (true if $x is not true)
	 */
	
	// if($num > 4 AND $num < 10) {
	// 	echo "$num passed";
	// }
	
	# SWITCH
	
	$favColor = 'blue';

	switch($favColor) {
		case 'red':
			echo 'Your favourite color is red';
			break;
		case 'blue':
			echo 'Your favourite color is blue';
			break;
		case 'green':
			echo 'Your favourite color is green';
			break;
		default:
			echo 'Your favourite color is something else';
	}
?>