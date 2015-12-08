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

      <h3><u>Development Area</u></h3>
      
      <?php 
        $password = "bigwill";
        $key = "1qaz2wsx3edc";
        
        echo $password . " + " . $key;
        
        echo "</br>";
        
        
        
        $encrypted = md5($key.$password.$key.$password.$key.$password.$key.$password);
        
        echo $encrypted;
        
      ?>
  </body>
</html>
