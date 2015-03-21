<?php

	extract($_POST);
	extract($_GET);

	$theData="
*** Settings ***
Library       Selenium Library

*** Testcases ***
Login Should Succeed When the Correct Username and Password are Entered
  Start Selenium Server
  Open Browser  http://localhost:8181/dlux/index.html#/login
  Maximize Browser Window
  Input Text  username admim
  Input Text  password admin
  Click Button  Login
  Page Should Contain  Topology
  Close Browser
  Stop Selenium Server                
	";

	$working_directory="./working_directory";//without ending slash

	$file="test/test.txt";
	$file1 = fopen("$working_directory/$file", "w") or die("can't open template for writing");
	fwrite($file1,$theData);
	fclose($file1);

	// Outputs all the result of shellcommand "ls", and returns
	// the last output line into $last_line. Stores the return value
	// of the shell command in $retval.
	$last_line = system('./execute.sh', $retval);

	// Printing additional info
	echo '
	<hr />Last line of the output: ' . $last_line . '
	<hr />Return value: ' . $retval;

?>