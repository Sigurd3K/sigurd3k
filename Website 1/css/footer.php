		<!--Scripts aan het einde laten-->
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

		<!-- Fittext scripts -->			
		<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.js"></script>
		<script type="text/javascript">
				$("gfgfhxhd").fitText();
		</script>

		<?php wp_footer(); ?>

				<script>

					var win = $(window).width();

				
				    //Initial load of page
					$(document).ready(sizeContent);
					$(document).ready(sizeContent2);

					//Every resize of window
					$(window).resize(sizeContent);
					$(window).resize(sizeContent2);
				
					//Dynamically assign height
					function sizeContent() {
						win = $(window).width();
						if (win > 992) {
							var height = $(".Bannerfoto").height() + 60;
							var HeightOfImage = height + "px";
							$(".fullfixedbottom").css("height", HeightOfImage);
						};
					}

					function sizeContent2() {
						win = $(window).width();
						if (win > 992) {
							var height = $(".Bannerfoto").height() + 60;
							var HeightOfImage = height + "px";
							$(".rowaandetop").css("height", -HeightOfImage);
						};
					}
				</script>

	</body>
</html>



<!--SNIPPETS

	<img src="FotoDCQ.png" alt="">
	opacity:0.6;

		<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>