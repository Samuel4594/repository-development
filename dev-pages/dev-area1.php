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
        <link href="override-style.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
        <style>
        #overlay {
                        position: fixed;
                        display: none;
                        z-index: 10;
                        height: 100%;
                        width: 100%;
                        background-image: url(../images/white-transparency.png);
        }
        #overlay #overlay-content {
                        background-color: #fff;
                        position: absolute;
                        z-index: 10;
                        left: 0%;
                        top: 0%;
                        min-height: 60%;
                        width: 50%;
                        box-shadow: 10px 10px 10px #888888;
                        border-radius:10px;
                        /*background-image: url(../images/popup-title-bg.png);*/
                        background-repeat: repeat-x;
                        background-position: left top;
                        /*border: 1px solid #fff;*/
        }
        #overlay #overlay-content #overlay-title {
                        position: relative;
                        float: left;
                        width: 100%;
                        color: #000000;
                        font-size: 1.2em;
                        line-height: 2em;
                        text-align: center;
        }
        #overlay #overlay-content #overlay-text {
                        background-color: #transparent;
                        position: relative;
                        clear: both;
                        float: left;
                        width: 96%;
                        color: #000000;
                        font-size: 1em;
                        line-height: 1.4em;
                        text-align: center;
                        padding: 2%;
                        max-height: 450px;
                        overflow: auto;
        }
    </style>

  </head>
  <body>
      <div id="overlay">
                <div id="overlay-content">
               <div id="headbar">
                <div id="close">X</div>
               </div> 
            <div id="overlay-title">Test Title</div>
            <div id="overlay-text">

                <h3><u>Heres a list of things to take a look at <?php echo "hello"; ?>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- end of popup overlay !-->

    <a title="Accident Location" class="show-overlay" id="accidentLocation">Location (click to view)</a>
      
    
    <script>
        $(".show-overlay").click(function(e) {
                                $("#overlay").show();
                                $("#overlay #overlay-content #overlay-title").text($(this).attr("title"));
                                var pageValues = $(this).attr("id").split(":");
                                
                                var callPage = pageValues[0];
                                var callValues = pageValues[1];
                                
                                $.post( "pages/popup-call.php", { 
                                                callPage: callPage,   
                                                callValues: callValues
                                })

                                .done(function( data ) {
                                                $("#overlay #overlay-content #overlay-text").html(data);
                                });
                });
                $("#close").click(function(e) {
							$("#overlay").hide();
								   
	});
    </script>
    
  </body>
</html>
