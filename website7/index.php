<?php
	$path = 'dir0/dir1/myfile.php';
	$file = 'file1.txt';

	// Return filename
	// echo basename($path);

	// Return filename without extension
	// echo basename($path, '.php');

	// Return the dir name from path
	// echo dirname($path);
	
	// Check if file/folder exists
	// echo file_exists($file);

	// Get abs path
	// echo realpath($file);
	
	// Checks to see if file exists. Cannot check for folders.
	// echo is_file($file);

	// Check if writable
	// echo is_writable($file);

	// Check if readable
	// echo is_readable($file);
	
	// Get file size
	// echo filesize($file);
	
	// Create a directory
	// mkdir('testing');

	// Delete an empty directory
	// rmdir('testing');
	
	// Copy file
	// echo copy('file1.txt', 'file2.txt');

	// Rename a file
	// rename('file2.txt', 'myfile.txt');
	
	// Delete File
	// unlink('myfile.txt');
	
	// Write from file to string
	// echo file_get_contents($file);
	
	// Write string to file
	// echo file_put_contents($file, 'Goodbye World');

	// Append string to exisiting file
	// $current = file_get_contents($file);
	// $current .= ' Goodbye World';
	// file_put_contents($file, $current);

	// Open File For Reading
	// $handle = fopen($file, 'r');
	// $data = fread($handle, filesize($file));
	// fclose($handle);
	// echo $data;

	// Open File For Writing
	$handle = fopen('file2.txt', 'w');
	$txt = "John Doe\n";
	fwrite($handle, $txt);
	$txt = "Steve Smith\n";
	fwrite($handle, $txt);
	fclose($handle);
?>