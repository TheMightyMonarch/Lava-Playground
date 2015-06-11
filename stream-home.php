

<?php
include 'header.php';
?>

<body>
<?php include_once("analyticstracking.php") ?>
	
	<!-- MAIN -->
	<title> Streams </title> 
	<div role="main" id="main">
		<div class="wrapper">
		
			<!-- page-content -->
			<div class="page-content" >			
			
			<?php

				$channels = array('SeventhValkyrie') ;
				$callAPI = implode(",",$channels);
				$arrContextOptions=array(
				"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
				),
				);
				$dataArray = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI, false, stream_context_create($arrContextOptions)), true);

				foreach($dataArray['streams'] as $mydata){

				$name      = $mydata['channel']['display_name'];
				$game      = $mydata['channel']['game'];
				$url       = $mydata['channel']['url'];       

					echo "<h2>" .$name. " - " .$game. "</h2>
							<iframe src='http://www.twitch.tv/" .$name. "/embed' frameborder='0' scrolling='no' height='450' width='620' style='display: table; margin:0 auto; -webkit-box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.75); -moz-box-shadow:0px 0px 5px 5px rgba(0, 0, 0, 0.75); box-shadow:0px 0px 5px 5px rgba(0, 0, 0, 0.75);'>
							</iframe>";
				}
				if($dataArray['streams'] == null or $dataArray['streams'] == "")
				  {
				  echo	"<h2>There are currently no live streams.</h2>";
				  echo	"<img style=\"margin: 0px 122px\" src=\"img/img-home/nostream.png\" />";
				  }
			?>
			
			
			<div class="c-1"></div>
			<div class="c-2"></div>
			<div class="c-3"></div>
			<div class="c-4"></div>	
			</div><!-- ENDS page-content -->
			
	  
	  
	  </div>
	</div>
	<!-- ENDS MAIN -->
	
	
<?php
include 'footer.php';
?>
<?php
include 'javascript.php';
?>
</body>
</html>