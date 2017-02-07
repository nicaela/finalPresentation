$(document).ready(function(){
	$("#desktopHeader div").hover(expandBackground);
	$("#scrollIcon").click(scrollDownPage);
	$(".firstOption").click(scrollDownPage2);

	// PINK BACKGROUND EXPANDS TO FULL SCREEN

	function expandBackground(){
		$("#initialBackground").toggleClass("active").promise().done(function(){
			$("#scrollIcon").show("slow");
		});				
	}

	// WHEN CLICK ARROW, PAGE SCROLLS TO AUD OPTIONS SECTION

	function scrollDownPage() {
		var goTo = $($(this).attr('href')); // selects element that was clicked
		var offset = goTo.offset().top; //grabs position of element
		$("body").animate({ scrollTop: offset}, 1000); // scroll to the link
		$('#line').animate({ height: 1000,
		  top: offset }, 5000);
		};


	// WHEN CLICK A, B OR C, PAGE SCROLLS TO BLURBS SECTION AND BLURBS SECTION EXPANDS

	function scrollDownPage2() {
		var goTo = $($(this).attr('href')); // selects element that was clicked
		var offset = goTo.offset().top; //grabs position of element
		$("body").animate({ scrollTop: offset}, 1000); // scroll to the link
		$('#line2').animate({ height: 1000,
		  top: offset }, 5000);
		
		var targetID = $(this).attr("id");
		$("#blurbs").attr('class', targetID);
		};


		// TRIED TO GET EDUCATION TO STAY ON PAGE AS YOU SCROLLED THAT SECTION, DIDN'T WORK 

    var $education   = $("#educationTitle"), 
    	$workExp = $("#workExperience"),
        $window    = $(window),
        educationStart  = $education.offset(),
        educationEnd =$workExp.offset(),
        topPadding = 15,
        scrollPoint = $window.scrollTop();

    $window.scroll(function() {

    	if ($("#blurbs").hasClass("optionA")) {

	        if (scrollPoint > educationStart.top && scrollPoint < educationEnd.top) {
	        	console.log("hey there");
	            $education.addClass("titlefixed");
	         } 

	         else {
	     		console.log("howdy friend");
	            $education.removeClass("titlefixed")

        	} 

    	}
    });
});