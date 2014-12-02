	<footer>
		<p>Copyright &#169; 2014 UIBrush.</p>
	</footer>

	
</body>

<script>
	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : true, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true,
	      autoPlay : 5000,
	      pagination : false,
	      navigationText : false
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});

	$(document).ready(function() {

		$("#navbutton").click(function() {
			$("nav").slideToggle();
		});
		
	});
</script>
</html>