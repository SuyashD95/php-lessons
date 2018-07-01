<?php
	/*
		date — Format a local time/date

		Syntax
			string date ( string $format [, int $timestamp = time() ] )

		Description
			Returns a string formatted according to the given format string using the given integer timestamp or the current time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time().
	 */

	// echo date('d');  	# Day
	// echo date('m'); 		# Month
	// echo date('M');		# Month Name
	// echo date('y');		# Year (Last two digits of the year)
	// echo date('Y');		# Year 
	// echo date('l'); 		# Day of the week
	
	// echo date('Y/m/d');
	// echo date('m-d-Y');
	
	// echo date('h');		# Hour
	// echo date('i')		# Min
	// echo date('s')		# Seconds
	// echo date('a') 		# AM or PM
	
	// Set Time Zone
	date_default_timezone_set('Asia/Kolkata');
	// echo date('h:i:sa');
	
	/*
		Unix timestamp is a long integer containing the number of seconds
		between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.  
	 */
	/*
		Common Timestamp functions:
		
		1.	mktime — Get Unix timestamp for a date

			Syntax
				int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )

			Description
				Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

				Arguments may be left out in order from right to left; any arguments thus omitted will be set to the current value according to the local date and time.

		2.	time - Return current Unix timestamp

			Syntax
				int time ( void )

			Description
				Returns the current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
	 */
	$timestamp = mktime(10, 14, 54, 9, 10, 1981);


	// echo $timestamp;
	
	// echo date('m/d/Y h:i:sa', $timestamp);
	/*
		strtotime — Parse about any English textual datetime description into a Unix timestamp

		Syntax
			int strtotime ( string $time [, int $now = time() ] )

		Parameters
			time
				A date/time string. Valid formats are explained in Date and Time Formats.

			now
				The timestamp which is used as a base for the calculation of relative dates.

		Return Values
			Returns a timestamp on success, FALSE otherwise.

		Examples
			<?php
				echo strtotime("now"), "\n";
				echo strtotime("10 September 2000"), "\n";
				echo strtotime("+1 day"), "\n";
				echo strtotime("+1 week"), "\n";
				echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
				echo strtotime("next Thursday"), "\n";
				echo strtotime("last Monday"), "\n";
			?>
	 */
	
	$timestamp2 = strtotime('7:00pm March 22 2016');
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next Sunday');
	$timestamp5 = strtotime('+2 Months');

	echo date('m/d/Y h:i:sa', $timestamp5);
?>