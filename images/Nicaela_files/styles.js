$(document).ready(function(){
	$("#desktopHeader div").hover(expandBackground);
	$("#scrollIcon").click(scrollDownPage)

	function expandBackground(){
		$("#initialBackground").toggleClass("active").promise().done(function(){
			$("#scrollIcon").show("slow");
		});				
	}

	function scrollDownToPage() {
		var goTo = $($(this).attr('href')); // selects element that was clicked
		var offset = goTo.offset().top; //grabs position of element
		$("body").animate({ scrollTop: offset}, 1000); // scroll to the link
		$('#line').animate({ height: 1000,
		  top: offset }, 5000);
		}

});