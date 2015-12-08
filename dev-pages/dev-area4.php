<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Wright-Devs - Development Area</title>

	<!-- CSS -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="../assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
        <link href="../assets/css/clock.css" rel="stylesheet" media="screen">
        <link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/animate.css" rel="stylesheet">
        <link href="override-style.css" rel="stylesheet">
  </head>
  <body>

      <h3><u>Development Area</u></h3>
      
      <div class="container">
    
    <!-- Nav tabs -->
    <ul class="nav-times nav-tabs" role="tablist">
        <li class="active">
            <a href="#6" role="tab" data-toggle="tab">
                6 AM
            </a>
        </li>
        <?php 
            for($i=7; $i<=22; $i++){

                ?>

                <li><a href="#<?php echo $i; ?>" role="tab" data-toggle="tab">
                        <?php echo (($i < 13) ? $i . "AM " :  (($i > 12) ? $i - 12 : $i - 11) . "PM ") ?>
                    </a>
                </li>

                <?php
             }
        ?>
        
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade active in" id="6">
          <div class="col-md-many"><h4 class="app-time" id="<?php echo $i ?>"><?php echo (($i < 13) ? $i . "AM" :  (($i > 12) ? $i - 12 : $i - 11) . "PM") ?></h4></div>
      </div>
      </div>
      <div class="tab-pane fade" id="7">
          <div class="col-md-many"><h4 class="app-time" id="<?php echo $i ?>"><?php echo (($i < 13) ? $i . "AM" :  (($i > 12) ? $i - 12 : $i - 11) . "PM") ?></h4></div>
      </div>
      <div class="tab-pane fade" id="8">
          <div class="col-md-many"><h4 class="app-time" id="<?php echo $i ?>"><?php echo (($i < 13) ? $i . "AM" :  (($i > 12) ? $i - 12 : $i - 11) . "PM") ?></h4></div>
      </div>
      <div class="tab-pane fade" id="9">
          <div class="col-md-many"><h4 class="app-time" id="<?php echo $i ?>"><?php echo (($i < 13) ? $i . "AM" :  (($i > 12) ? $i - 12 : $i - 11) . "PM") ?></h4></div>
      </div>
    </div>
</div>

        <?php 
            for($i=7; $i<=22; $i++){

                ?>

                    

                <?php
             }
        ?>


<script src="custom-dev.js"></script>




  </body>
</html>
