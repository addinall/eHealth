<!DOCTYPE html>
<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:		eblog.php
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
//				This module implements a small blog in the syste.
//				I had a look at a few blogs available, but they were
//				all HUGE!  We use some fairly standard HTML built-ins,
//				but jazz them up just a tad with some javascript!
//
//
//				A new web development technique for creating interactive 
//				web applications, dubbed AJAX, has emerged. In this new 
//				model, the single-page web interface is composed of 
//				individual components which can be updated/replaced 
//				independently. With the rise of AJAX web applications 
//				classical multi-page web applications are becoming legacy 
//				systems. 
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

require_once("eheader.php");	// DOCTYPE, logo, CSS, js and menu live in here
//require_once("objects.php");	// classes to drive this application live here
//require_once("db.php");			// database routines high level

//$database = new Connection() ;	// connect to the data base (has it's own failure routines)
//load_blogs() ;					// suck blogs into memory

$message = 'Enter your new blog...';

$start_blog = 1 ;				// start to display at which BLOG entry


//-----------------------------------
function display_blogs( $start_from )
{

global $blogs ;						// stack of blog entries, sorted newest to last

        $start_from = 0;
	$end_at = $start_from + 4 ;		// 4 is a magic number!  Four BLOG entries just happen to fit
									// nicely on the screen I designed

        $blogs[ 0 ] = "This is the first blog in the database.  Written by Mark.  Just to see if the formatting is working in the CSS file.";
        $blogger = "addinall";

	$entries = count( $blogs ) ;	// how big is the stack?

	for ( $counter = $start_from ;
		  $counter < $end_at ;
		  $counter++ )
	{
		if ($counter >= $entries)
		{
			break;					// reached the end of the blog array
		}							// JMP END

		print("	<blockquote>
			   	<p> " .
			   	$blogs[ $counter ] .
				"</p>
				$blogger 	
				</blockquote> " );	// the fancy look and feel of this stuff
									// is defined in the CSS file as per normal

	}
}

?>




  <div id="contentleft">
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eHealth</span> BLOG</h1>
    <img class="imgleft" src="images/info.png" title="Press this button for a NEW BLOG entry" 
			alt="Press this button for a NEW BLOG entry." />
	
	<strong> 
	Every application requires a BLOG.  So be it.  I suppose it is a little better that sitting on telephone support deep buring somewhere in a NOC!  All the BLOGS on the Open Source Market are huge, so I decided just to write this little simple one, keeping the code footprint under about 30 KB and making it easy to read and maintain.  Work in progress so bear with me for a few weeks. 
	</strong>	
	</p>

    <p><em>Click the Pen for a NEW BLOG.</em></p>


	<img src="images/blog.jpg" 
	style="border: inset;" alt="The Blog"  width="450" class="blogtoggle" id="blogtoggle"/>

<!--  Warning, if you are debugging my code, this div is hidden by javascript in eHealth.js -->


	<div id="blog">
		<div id="blog_entry">	
			<form method="post" class="blog_box" action="" >
				<textarea name="blogger" id="blogger" onfocus="this.value='';return false;">
<?php print $message; ?>
				</textarea>
				<br>
				<label for="name" id="name_label">Name</label>  
    			<input type="text" name="name" id="name" size="30" value="" class="text-input" />  
    			<label class="error" for="name" id="name_error">This field is required.</label>  				
				<br>
				<input type="submit" class="blog_button" value="BLOG IT" />
			</form>
		</div>
	</div>

<!-- Start of the BLOG entries -->

		<div id="blog_entries">

			<?php display_blogs( 1 ) ; ?>

		</div>
	</div>
<!-- END OF CONTENT LEFT DIV -->



<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">

	<?php require_once("erhside.php"); ?>

<p>
<strong><em>BLOG of the WEEK</em></strong>
</p>
<p>
I am going to leave this blog simple.  I visit a few blogs in WebWurld and they are all getting to look like a full blown applications, with registration, email verification, identity verification, newsletter opt-in/out, response notifications, multi-level quotations, cookies, session management, CAPTCHA ( Completely Automated Public Turing test to tell Computers and Humans Apart) verification.......A few times I have tried to make a blog entry and just given up in frustration.  Who has the time to screw around?
</p>  
  
</div>
</div>
<?php require_once("efooter.php");  ?>
</body>
</html>
