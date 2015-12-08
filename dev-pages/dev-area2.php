<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Wright-Devs - Development Area</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
        <link href="assets/css/clock.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
  </head>
  <body>

        <h3><u>Overflow</u></h3>
        </br>
        
        <?php
      
        for($i=1; $i<=10; $i++) {
          
        ?>
      
        <h3 class="timeslot-<?php echo $i; ?>"><?php echo (($i < 13) ? $i . "AM" :  (($i > 12) ? $i - 12 : $i - 11) . "PM") ?></h3>
        
        <?php
        
        }
      
        ?>
      
  </body>
</html>
