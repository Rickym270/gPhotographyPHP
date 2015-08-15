
<!--========================= FOOTER ===========================-->
<footer class="footer" id="footerid">
	<hr></hr>
	<div class= "container">
<center>
	<div class="footerCenter">
		<i class="icon icon-facebook">&#xe800;</i>
		<i class="icon icon-instagram">&#xe801;</i>
		<i class="icon icon-vimeo">&#xe802;</i>
	</div>
		<p class="text-muted">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; <?php echo date('Y');?> Gomez Photography
		</p>
		</p>
</center>
</div>
</footer>     

<!-- ===============Bootstrap core JavaScript=================-->
<!-- Placed at the end of the document so the pages load faster-->
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../js/ie-emulation-modes-warning.js"></script>
<script src="../../assets/js/docs.min.js"></script>
<!--== IE10 viewport hack for Surface/desktop Windows 8 bug ===-->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script> 
	$('.dropdown-menu input').click(function(e) {
		e.stopPropagation();
	});
</script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
<?php if ($section == "Galleries") {
  echo '<script type="text/javascript" src="/js/modernizr.js"></script>';
  echo '<script type="text/javascript">
			$(document).ready(function(){
				if (Modernizr.touch) {
					// show the close overlay button
					$(".close-overlay").removeClass("hidden");
					// handle the adding of hover class when clicked
					$(".thumbnail").click(function(e){
						if (!$(this).hasClass("hover")) {
							$(this).addClass("hover");
						}
					});
					// handle the closing of the overlay
					$(".close-overlay").click(function(e){
						e.preventDefault();
						e.stopPropagation();
						if ($(this).closest(".thumbnail").hasClass("hover")) {
							$(this).closest(".thumbnail").removeClass("hover");
						}
					});
				} else {
					// handle the mouseenter functionality
					$(".thumbnail").mouseenter(function(){
						$(this).addClass("hover");
					})
					// handle the mouseleave functionality
					.mouseleave(function(){
						$(this).removeClass("hover");
					});
				}
			});</script>';
}
?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#dimViewPort").hide();
    $(".thumbnail").on("click",function(){
    	$("#dimViewPort").fadeIn("slow");
    });

  	$("#dimViewPort").mouseup(function(e){
  		var container = $("#myCarouselGal");

  		if(!container.is(e.target) && container.has(e.target).length===0){
  			$("#dimViewPort").hide();
  		}
  	});

  	$(document).keyup(function(e){
  		if(e.keyCode ==27){
  			$("#dimViewPort").hide();
  		}
  	});

  });

  $("#dimViewPort").keydown(function(eventObject){
  	if (eventObject.which == 37){
  		$("#left").click();
  	}else if(eventObject.which ==39){
  		$("#right").click();
  	}
  });


  
</script>
  </body>i
</html>