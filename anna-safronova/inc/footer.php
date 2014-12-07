	<!-- ======== footer ========= -->
	<footer>
		<p>Copyright © 2014 UIBrush.</p>
	</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.panelslider.min.js"></script>
<script>
	$(document).ready(function() {
		$('#right-panel-link').panelslider({side: 'right', clickClose: true, duration: 200 });

    	$('#menu li').click(function() {
	      $.panelslider.close();
	      console.log( "ready!" );
	    });
	    
	});   

	var str=location.href.toLowerCase();	

	$("#menu li a").each(function(index, item) {
		if (str.indexOf(this.href.toLowerCase()) > -1) {
			$("a.current").removeClass("current");
			$(this).addClass("current");
		}
	});



</script>
</body>
</html>