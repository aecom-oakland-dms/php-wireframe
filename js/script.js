$(document).ready(function() {
	
/**
 * Global functions
 * 
 */
// Random number generator
$.fn.rand = function(){
  return this.eq(Math.floor(Math.random()*this.length));
};


// Random element order
// Usage: $("#parent").randomize(".child");
$.fn.randomize = function(childElem) {
	return this.each(function() {
		var $this = $(this),
				elems = $this.children(childElem),
				i;
		elems.sort(function() { 
			return (Math.round(Math.random())-0.5); 
		});  
		$this.remove(childElem);  
		for(i=0; i < elems.length; i++){
			$this.append(elems[i]);
		}
	});    
};


/*
 * Animation/Interaction Controls
 * 
 */
// Colorbox
$('a.thumbnail').colorbox({href:"./inc/popup_photo.php"});
$("#feedbackText a.thumbnail").colorbox({href:"./inc/popup_photo.php"});
$("div.thumbnail img").colorbox({href:"./inc/popup_photo.php"});


// Map-based Feedback
$("#feedbackMap").click(function() {
	$("#feedbackMap").removeClass("span12").addClass("span8");
	$("#feedbackMap img").attr("src", "http://placehold.it/800x515&text=google map");
	$("#myPin").removeClass("icon-2x").addClass("icon-4x");
	$("#feedbackText").show("fast");
});
$("#feedbackBtn").click(function() {
	$("#feedbackMap").removeClass("span8").addClass("span4");
	$("#feedbackMap img").attr("src", "http://placehold.it/375x500&text=google map");
	$("#feedbackComments").show("fast");
	$("#feedbackArrow2").show("fast");
});
$("#feedbackArrow1").click(function() {
	$("#feedbackMap").removeClass("span4").removeClass("span8").addClass("span12");
	$("#feedbackMap img").attr("src", "http://placehold.it/1200x510&text=google map");
	$("#myPin").removeClass("icon-4x").addClass("icon-2x");
	$("#feedbackText").hide();
	$("#feedbackComments").hide();
	$("#feedbackArrow2").hide();
});
$("#feedbackArrow2").click(function() {
	$("#feedbackMap").removeClass("span4").addClass("span8");
	$("#feedbackMap img").attr("src", "http://placehold.it/800x515&text=google map");
	$("#feedbackComments").hide();
	$("#feedbackArrow2").hide();
});


// Add Feedback Form
$("#tab1 button").click(function(){
	event.preventDefault();
	$('#myTab a[href="#tab2"]').tab('show');
});
$("#tab2 button").click(function(){
	event.preventDefault();
	$('#myTab a[href="#tab3"]').tab('show');
});


// GeoLocation Check
$('#geoLocation').modal('show')


// Document Commenting
$("#annotationPins .pin").toggle(function() {
	$(this).children("i:first").removeClass("icon-comment").addClass("icon-comment-alt");
	$(this).children("div:first").show();
}, function() {
	$(this).children("i:first").removeClass("icon-comment-alt").addClass("icon-comment");
	$(this).children("div:first").hide();
});
$("#annotationHide").click(function() {
	$("#annotationHide").toggle();
	$("#annotationShow").toggle();
	$("#annotationPins .pin").toggle();
});
$("#annotationShow").click(function() {
	$("#annotationHide").toggle();
	$("#annotationShow").toggle();
	$("#annotationPins .pin").toggle();
});

$("#docCollapse").hide();
$("#docExpand").click(function(event){
	event.preventDefault();
	$("#docExpand").hide();
	$("#docCollapse").show();
	$("#docComments #comments").animate({
		left: "-350px",
		width: "600px"
	});
});
$("#docCollapse").click(function(event){
	event.preventDefault();
	$("#docExpand").show();
	$("#docCollapse").hide();
	$("#docComments #comments").animate({
		left: "0px",
		width: "250px"
	});
});


// Comments
$(".comment").shorten({showChars: 200});


// News Page
$("#tab1").randomize(".media");
$("#tab2").randomize(".media");
$("#tab3").randomize(".media");
	
});