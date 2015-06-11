<?php
echo '

	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Grab Google CDN\'s jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="js/jquery-1.7.1.min.js"><\/script>\')</script>
	
	<!-- scripts concatenated and minified via build script -->
	<script src="js/custom.js"></script>
	
	<!-- superfish -->
	<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script  src="js/superfish-1.4.8/js/superfish.js"></script>
	<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
	<!-- ENDS superfish -->
	
	<script src="js/tweet/jquery.tweet.js" ></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nivo.slider.js" ></script>
	<script src="js/css3-mediaqueries.js"></script>
	<script src="js/tabs.js"></script>
	<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
	<!-- end scripts -->
	
	<!-- Twitter Feed Footer -->
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>
	<script language="javascript" src="/tweet/jquery.tweet.js" type="text/javascript"></script>
	
	<script type=\'text/javascript\'>
    $(document).ready(function(){
        $(".tweet").tweet({
            username: "lavaplayground",
            join_text: "auto",
            avatar_size: 32,
            count: 3,
            auto_join_text_default: "we said,",
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
      });
    });
	</script>
	
	<!-- Audo js -->
	<script>var _gaq=[[\'_setAccount\',\'UA-20257902-1\'],[\'_trackPageview\']];(function(d,t){ var g=d.createElement(t),s=d.getElementsByTagName(t)[0]; g.async=1;g.src=\'//www.google-analytics.com/ga.js\';s.parentNode.insertBefore(g,s)}(document,\'script\'))</script>
    <script src="js/audiojs/audio.min.js"></script>
	    <script>
      audiojs.events.ready(function() {
        audiojs.createAll();
      });
    </script>
	
	<!-- Twitter JS -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


	' ;
?>

	