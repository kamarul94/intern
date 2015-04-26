<script src="asset/js/jquery-2.1.3.js"></script>

<script>
	$(document).ready(function() {

		var a = 0;

		$("div").click(function() {
			$(this).html("");
			$(this).css("background-repeat", "no-repeat");
			$(this).css("background-color", "#fff");

			for (i=0; i<50; i++) {
				$(this)<?php
					for ($i = 1; $i <= 2; $i++) {
						echo ".animate({opacity: 1.0, marginLeft: a+=1}, 100, function(){
							$(this).css(\"background-image\", \"url('asset/image/a".$i.".png')\");
						})";
					}
				?>;
			}
		});
    });
</script>

<div style="height:500; width:500; background-color:#0f0"></div>