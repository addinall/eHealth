<!DOCTYPE html>
<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//	FILE:		elinks.php
//	SYSTEM:		eHealth	
//	AUTHOR:		Mark Addinall
//	DATE:		05 Jan 2011
//	SYNOPSIS:	Everyone is talking about eHealth, with the NBN
//				on its way.  And as usual, no-one is doing anything
//				about it.  Well, IBM are.  So, I thought I would
//				spend some time coding an experimental demonstration
//				that shows, and discusses some of the subjects
//				considered as part of the eHealth bag of goods
//				that is about to transform the world.
//
//
//				Build a tag cloud with some usable content.
//				I was getting sick of tag clouds that did nothing
//				And I had a look at some open source stuff, which
//				didn't really do any of the things I wanted so
//				I spent a few days writing this one.
//
//				Generic, but first used in my eHealth project
//
//				This is the format of my string pairs
//				As a result of a Web Crawler and some ed() trickery.
//
//				Australian Bureau of Statistics - http://www.abs.gov.au/
//
// 				So,
// 				In that instance we end up with
//
// 				push( Australian, 	http://www.abs.gov.au )
// 				push( Bureau, 		http://www.abs.gov.au )
// 				of is IGNORED
// 				push( Statistics, 	http://www.abs.gov.au )
//
// 				so when the good user HOVERS over a new improved
// 				Addinall folksonomy TAG cloud, through some javascript
// 				and CSS trickery is presented with a multiple choice
// 				jump box based on the number of urls are stuffed
// 				into the stack('word')
//
//					STUFF   more stuff
//				Party BIGGER<-(pointer)
//				  smaller	+-----------------------+
//							|http://www.metoo.org   |
//							|http://www.andhim.com  |
//							|http://perlmonks.org   |
//							+-----------------------+
//
// 				neat, hey?
//
//				The routine is fussy about the format of the input.  But as always, feel free
//				to muck around with it.
//
//				released under GNU Free Documentation License
//				http://www.gnu.org/licenses/fdl.html
//				please retain this header
//
// 				*****  set tabstops to 4 to be able to read this  *******
//				:set tabstops=4
//				don't know how you do that in editors other than vi
//
// DATE       |    CHANGE                     |    WHO
// 05/01/2011 | Initial creation              |  MA
//


require_once("eheader.php");

?>


  <div id="contentleft">
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eLinks</span> A new kind of TAG Cloud</h1>
    <p><img class="imgleft" src="images/info.png" alt="" /><strong> 
Don't you hate TAG clouds that look pretty but take you no-where, or no-where sensible?  Well, here is a better way of doing it (I think anyway).
	</strong>
	</p>

	<br><br>
    <p><img src="images/clouds.jpg" alt="clouds"  
	style="border: inset;"  width="450"/></p>

<?php

//---------------
class tag_cloud {

// keep it all OOD/OOP as usual.  Nice and tidy
// and not half and half OOD as is in fashion
//
// this implementation uses the wz.tooltip javascript
// pop-up library to function.  Any tooltip library
// will work.  Some are simpler than this one.  I
// already use this library for some of the fancier
// bits in the application so I stuck with it.
// to change the library you need to change the code
// but not the logic in the method build cloud.
// many of the jQuery tooltip libraries would be
// good for this.  I tried the jToolbox effort and
// couldn't get it to do anything.  documentation
// and the implementation sucks.
//
// the calculations for the size of the words in the TAG
// cloud is simple. size = number of entries.  If it
// is larger than 10, then make it 10.
// which maps a size of 1..10.  more than enough.
// I change the shade of the color along with the size
// inversely.  The smaller the font, the more saturated the
// color.  this keeps things nice and simple.  some TAG
// cloud implementations look like they are calculating
// phase transitions.  not to mention being 30,000 lines long....

private $cloud_array = array();										// the STACK
private $word_count = 0;											// N number of words
private $url_count = 0;												// N number of TOTAL URLs
private $HTML;														// dynamic HTML for the tag cloud
private $debug;														// used for trace and test

	//----------------------------------------
	function tag_cloud($the_file, $testing) {
		// constructor

		if ($the_file == NULL) {
			return ;												// empty files are pointless
		}

		$this->debug = $testing;									// we can put regression testing methods
																	// INSIDE the object as it should be
		if ($fp = fopen($the_file, 'r')) {							// can we open the file?
			if (! feof($fp)) {										// and i isn't empty
				do {
						$data = fgets($fp);							// read line by line /n
						if (preg_match('/-/',$data)) {				// exploding when - does not exist is bad
																	// it generates an index error
							list($word_portion, $url) =				// seperate the TAGS from the URL 
								explode('-', $data);				// based on a '-'
							$words = explode(' ', $word_portion);	// explode the remaining string
																	// into an array of words
							foreach($words as $word) {				// process EACH word
								$this->add_word($word, $url);		// in the list
							}										// end for
						}											// end if '-'
				} while (! feof($fp));								// stop at FEOF of course
			}														// end if not eof
		}															// end if file open
	}																// function close

	//-------------------------------
	function add_word($word, $url) {
		// push one one the stack

		$in_word = trim($word) ;									// did a bunch of white space get sent? clean it..
		if ($in_word == '') {
			return ;												//  NULL urls are OK, NULL words are of little use
		}
		$in_url = trim($url) ;										// trim whiteness away from the URL 
		if ($in_url == '') {										// is it blank? if so, give it a value
			$in_url = '#' ;											// NULL urls are OK, NULL words are of little use
		}															// so point to this URL
		if(! preg_match("(\band\b|\bor\b|\bthe\b|\bof\b|\bon\b|\bThe\b|\bLtd\b|\in\b|\bfor\b|\&)",	
																	// exclude common words, and, or, on, the ... 
									$in_word)) { 					// from being built in the TAG cloud
			$this->cloud_array[$in_word][] = $in_url ;				// push winners on the stack 
		}
	}


	//-----------------------------
	function build_cloud() {

		// this function takes the stack and allocates the size of
		// the tags and the colour (from a few pre-defined color schemes
		// both based on word frequency.  If the user does not specify
		// a color, he she or it gets (in the tradition of Henry Ford,
		// BASIC BLACK (I may chuck in some grey...
		//
		// if we got this far we can assume (dangerous ;-) that we
		// have some sort of a word => url tree in memory so to
		// calculate some of the variables required, we need to
		// dope some totals first

		if ($this->debug) {											// turn on if changing code
			print_r($this->cloud_array);							// or data format
			print("$this->word_count ==== $this->url_count<br> \n");	
		}

		$this->word_count = count($this->cloud_array);				// dope number of unique words
		$this->url_count = count($this->cloud_array,
											COUNT_RECURSIVE );		// dope TOTAL elements words + URLs
		$this->url_count = $this->url_count - $this->word_count;	// so get the real number doped

	
		$this->HTML = '' ;											// dynamically generated HTML
		$span_counter = 0 ;											// for each <spanx>...</span>

																	// right here is where I start the output,
																	// or rather constructing it
																	// print ("<div='some_popup'>.$my_url_values.....
																	// it operates in two ways.  Draws a TAG cloud on the fly
																	// or saves it for a cut and paste into a page
		$this->HTML = "<div id=\"tagcloud\">";						// empty div just for now 
																	// it is going to make up the links page
		$this->HTML .= "<ul> ";										// we have our formatting as an unordered list 
																	// this way we can dynamically create our
																	// code, but stay true to the Zen tradition
																	// of having CSS do ALL formatting.  Clever hey?

			
		foreach($this->cloud_array as $word => $urls) {				// iterate through our top level index TAG word
			$span_counter++;										// each word has a unique <span>
			$rank = 0;												// zero frequency counter
			foreach($urls as $url) {								// this is awful, but I can't find an
				$rank++;											// internal COUNT function
			}														// I'm open to suggestions
																	// start building the (rather complex) HTML
			if ($rank > 10) {
				$rank = 10 ;										// can't see it, but....
			}

			$this->HTML = $this->HTML .
				"
				<li class=\"tagrank-$rank\">							
				<a href='#' class=\"tagrank-$rank\"  
				onMouseOver=\"TagToTip('Span$span_counter', WIDTH, '-350', BGCOLOR, '#ffffff', SHADOW, true, 
										SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
										FADEIN, '400', FADEOUT, '400', FONTSIZE, '12pt', CLICKCLOSE, true,
										CLOSEBTN, false, DURATION, '8000', FONTCOLOR, '#000000', FONTWEIGHT, 'bold')\" 
				>$word</a></li>

				<span id='Span$span_counter'>";
																	// OK, that is the lead in HTML per TAGWORD,
																	// now we generate code for each link associated
																	// with each tag word
			if ($this->debug) {
				print $this->HTML ;
			}

			foreach($urls as $url) {								// iterate through secondary associated stack, urls
				$this->HTML = $this->HTML . 
					"<a href='$url'>$url</a><br> ";					// build a choice LINK in the popup for each URL
																	// identified by the URL
			}
			$this->HTML = $this->HTML . "</span>";					// and close this word span
		}
		$this->HTML = $this->HTML . "</ul>";						// and close the CSS unordered list	
		$this->HTML = $this->HTML . "</div>";						// and close the CSS tagcloud <div>	
	}

	//---------------------------------
	function show_cloud($out_file='') {

		// as with all of my stuff, no DIRECT formatting is going to take place here.
		// in good Zen tradition, the look and feel of the TAG cloud is definded
		// in the CSS style statements

		if ($out_file != '') {				// this object was designed to either
			$fh = fopen($out_file,'w');		// generate the TAG cloud on the fly, or
			fwrite($fh, $this->HTML);		// generate it and store it for later
			fclose($fh);					// us. we may want to sore it in a DBMS
		}									// or share it somewhere.....

		print $this->HTML ;					// Hello World!

	}

}



$cloud = new tag_cloud('tagdata',false);	// start the TAG engine
$cloud->build_cloud();						// I like blue clouds
$cloud->show_cloud();						// pop it out to the world

?>



<p>
Well, that was my take on TAG clouds, invented here, right now, by me!  Whaddya think?  Good idea, or as worthless as the rest of the TAG clouds in Web space?  I don't mind really as this is the first time I have ever bothered to give them any thought.  Usually they are VERY useless.  While I am here, some credits.
</p>
<p>
The original grey theme for the web page, including great buttons came from <a href="http://www.freecsstemplates.org/">FreeTemplates.org</a>.
</p>
<p>
The tool-tip pop-up is courtesy of wz_tooltip.  No link.  The web page has gone, and the word on the net is that the author is deceased.  If that is the case, much sadness, if urban legend, many apologies.
</p>
<p>
Art work sources from <a href="http://http://www.google.com/imghp?hl=en&tab=wi">Google Images</a>. I tried to find art that looked in the public domain.  If I am using your artwork and you are miffed, send me an abusive mail and I'll fix it.
</p>
<p>
The Shadowbox came from <a href="http://shadowbox-js.com/usage.html.">Shadow Box</a>.  A great bit of kit.
</p>
<p>
The CMS used is Chameleon.  I wrote that and it doesn't have a home page at the moment because it is messy again!
</p>
<p>
Thanks to David Landgren, Pete Caffin and Prof.  Tomasso for having a look at the work from time to time.  Cheers.
</p>
I hope this has been fun to have a look at.  I had fun writing it!  My points (Obli Do):
<ol>
<li>AJAX type techniques can be used without making a code base bigger than Ben Hur.  And if you use AJAX, not EVERY bit of data needs to be handled in that manner.</li>
<li>Australia does not require 100Mbps to the household to do eHealth, eTraining, eWork or mostly eAnything.</li>
<li>Bio-informatics is alive and well.  Mostly because people have been working in the field for a decade, for free.  BioPerl is a very good example.</li>
<li>Nice looking web pages don't need FLASH!</li>
<li>CSS ROCKS!  (although an easier way to debug it would be a very, very, very good thing.  I will think about this.)</li>
</ol>
<p>
That's - IT (QLD)
</p>



</div>
<!-- END OF CONTENT LEFT DIV -->




<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">
	
	
	<?php require_once("erhside.php"); ?>
	
	
	<p>
	What do you think of the newer way of describing and accessing TAG clouds?  In any reasonably complex document (including web pages) a key word will refer to more than one other document or URL.  The author has been thinking about this for a litle while, and with the advent of HTML 5 and an increase in the emphasis on meta-data and ontologies, this method of building a TAG cloud may become useful.  Tell me what you <a href="mailto:addinall@addinall.net">THINK</a>.	
	</p>
Tagging is the process of labeling data with related keywords. The basic idea of tag clouds is to represent tags according to their meaning, their weight and their frequency relatively to other tags. This is done with appropriate font sizes and colors. The more important a tag is, the bigger and louder it appears (or at least should appear).

Tag clouds are often considered as one of the typical design elements in Web 2.0. However it’s possible that the concept is recently loosing its popularity. Over the last years many sites used the technique, because they wanted to look "smashy", although they really weren't. This resulted in unusable and boring designs, supported by the quick'n'dirty-tagging. The best example are probably Technorati's tag clouds which have a number of repetitions, sometimes have spam and basically consist of mainstream and irrelevant terms.
</p>
<p>
This is a BETTER TAG Cloud I think....  I made it VERY transparent as a request came from my dear mate Prof.  Tomato.  I don't like it, but this is still early beta.  What does everyone else think? Transparent was crap.  It went away.

</p>
</div>
</div>

<?php
require_once('efooter.php')
?>
</div>
</body>
</html>

