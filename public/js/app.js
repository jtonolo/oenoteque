
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 96){
          $("#banner").addClass("shrink");
          $('#search').addClass("appear");
		}
		else
		{
            $("#banner").removeClass("shrink");
            $("#search").removeClass("appear");
		}
	});