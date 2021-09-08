<?php
	//PHP processing area

$currentDate; 	//define a new variable

//MM-DD-YYYY

$date = date_create();	//create current DateTime object

$ouputDate = date_format($date,"m-d-Y");

$midTermDate = date_create("2021-10-20");	//midterm DateTime object

/*
algorithm for date handling/displaying
1. what date do you need to use?
2. what format will you need to use or display?
3. where will you display it?
4. Create a date object.	-date_create()
5. format the date object.	-date_format()
6. display where needed.	- necho ?
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Unit-4 Funtions and Dates</h2>
	<p>Today is <?php echo $ouputDate; ?> </p>
	<p>Your Midterm exam will be <?php echo date_format($midTermDate, "l F jS Y"); ?>.</p>
</body>
</html>