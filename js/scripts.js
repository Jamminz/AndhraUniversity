$("#page1").css("height",$(window).height());
$("#page2").css("height",$(window).height());
$("#page3").css("height",$(window).height());
$("#page4").css("height",$(window).height());
$("#notesPage").css("height",$(window).height());
$("#differentColour").css("height",$(window).height()/2);
$(".sortMyTable").css("height",$(window).height()/2);
$(".plainBackground").css("height",$(window).height());
$("#diaryEntry").css("height",$(window).height()/2);


$("#diaryEntry").keyup(function() {
	
	
	
	$.post("../studentportal/diaryUpdate.php", {diary: $("textarea").val()} );
	
	
	
	
});
