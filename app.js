
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 86){
          $("#banner").addClass("shrink");
          $('#search').addClass("appear");
		}
		else
		{
            $("#banner").removeClass("shrink");
            $("#search").removeClass("appear");
		}
	});