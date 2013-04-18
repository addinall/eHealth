
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:		eHealth.js
//	SYSTEM:		eHealth	
//	AUTHOR:		Mark Addinall
//	DATE:		24 June 2010
//	SYNOPSIS:	Everyone is talking about eHealth, with the NBN
//				on its way.  And as usual, no-one is doing anything
//				about it.  Well, IBM are.  So, I thought I would
//				spend some time coding an experimental demonstration
//				that shows, and discusses some of the subjects
//				considered as part of the eHealth bag of goods
//				that is about to transform the world.
//
//				A new web development technique for creating interactive 
//				web applications, dubbed AJAX, has emerged. In this new 
//				model, the single-page web interface is composed of 
//				individual components which can be updated/replaced 
//				independently. With the rise of AJAX web applications 
//				classical multi-page web applications are becoming legacy 
//				systems. 
//
//				This file contains the ehealth custom javascript routines.
//				Gallery, brain lesson, blog input and the database AJAX
//
//
//------------+-------------------------------+------------
// DATE       |    CHANGE                     |    WHO
//------------+-------------------------------+------------
// 24/09/2010 | Initial creation              |  MA
//------------+-------------------------------+------------
//
//
// set tabstops to 4 to be able to read this.
//

//
// first we will code the gallery slideshow
// this uses JQuery and CSS
// perhaps not as FLASH as FLASH, but a lot lighter
// on CPU and bandwidth

//-----------------
function gallery() {
	
	// if no IMGs have the show class, grab the first image
	// the show class is set in this function

	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	// Get next image, if it reached the end of the slideshow, 
	// rotate it back to the first image
	
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? 
				$('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	// Get next image caption
	
	var caption = next.find('img').attr('title');	
	
	// Set the fade in effect for the next image, show class has higher z-index
	
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	// Hide the current image
	
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	// Set the opacity to 0 and height to 1px
	
	$('#gallery .caption').animate({opacity: 0.0}, 
		{ queue:false, duration:0 }).animate({height: '1px'}, 
		{ queue:true, duration:300 });	
	
	// Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
	
	// Display the content
	
	$('#gallery .content').html(caption);
	
	
}



//--------------------
function slideShow() {

// This function sets up the start conditions for the
// slideshow.  It uses the Javascript ability to alter
// CSS elements at runtime.  Neat.

	// Set the opacity of all images to 0
	
	$('#gallery a').css({opacity: 0.0});
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.3});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('title'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 8000 = change to next image after 8 seconds
	setInterval('gallery()',8000);
	
}

//----------------------------
$(document).ready(function() {	

// Javascript main() sorta ;-)	

	$("#blog").hide();
	// hide the input form for the blog editor
	
	$(".blogtoggle").click(function(){
		$("#blog").toggle();
	});


	slideShow();



});

// now to stick in some AJAX DOM stuff to manipulate
// a medical  image map and displayed content



//----------------------------------
function brain_lesson(lesson_text) {

// this changes the text under the MRI scan by replacing
// the text in <p id="lesson">

		document.getElementById("lesson").innerHTML=lesson_text ;
}






