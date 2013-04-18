<!DOCTYPE html>
<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:		egenomics.php
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
//				This module gives some bioinformatics/genomics
//				examples using well known sources and resources,
//				BLAST, genome banks etc.
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

require_once("eheader.php");

?>

  <div id="contentleft">
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eGenomics</span> Demonstration and Discussion</h1>
    <p><img class="imgleft" src="images/info.png" alt="" /><strong> 
eHealth is being touted as one of the world-changing technologies to be introduced with the NBN, and all of the Web Application developers being <em>STIMULATED</em> by the NBN.  All well and good.  The fiction is that is that advanced bioinformatics is waiting for the NBN to happen, the fact is, the area is going ahead in leaps and bounds and has been for more than a decade. We will have a little look around in this module at some of the information available.</strong>
	</p>

    <p>
				<p>Move the cursor around the highlighted areas for a very quick tour of the genomics world. Click to go visiting.
				<image src="images/dna3.jpg" alt="Genome picture" title="" 
				style="border: inset;" alt="genome map" usemap="#genome" width="450"/>
				<div align="justify"> 
				</p>
				<p>
			Biology today is being transformed by an explosive growth of data emerging from laboratories worldwide. The challenge is to transform data into knowledge, knowledge that will lead to a better understanding of the biological processes underlying both health and disease. The quest for this knowledge drives NCBI investigators to develop new methods for integrative, computer-based data analysis to mine massive and complex datasets. Once developed, these software tools may then be used by the research community to answer specific scientific questions.
NCBI's Web-based approach for disseminating its resources to the research and medical communities has enabled scientists worldwide to integrate seemingly disparate data and to shape more biologically meaningful views of this information, which has, in turn, generated new knowledge.	
				</p>
	</div>


	<map name="genome"> 
		<area	shape="polygon"
				coords="144,206,91,293,180,390,231,310"
				title="NCBI Pub Med Tutorial"
				alt="NCBI Pub Med Tutorial"
				href="http://www.ncbi.nlm.nih.gov/Education/pmc/pmc.html"
				onMouseOver="TagToTip('Span1', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
										SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
										FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
										CLOSEBTN, true, TITLE, 'Pub Med NCBI', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
				/>
				<!-- onMouseOut="UnTip()" -->
				<span id="Span1"><img src="images/dna4.jpg" height="290" width="250" style="padding:10px" 
									align="left"><strong>NCBI - Pub Med</strong> This link will take you to vist NCBI and see a tutorial on how to link back from Pub Med through the various NCBI tools. PubMed Central (PMC) is a digital archive of life sciences journal literature, was launched in January 2001 and offers a new model for electronic scientific communication and data retrieval. The value of PubMed Central, in addition to its role as an archive, lies in what can be done when data from diverse sources are stored in a common format in a single repository. PMC currently provides free and unrestricted access to the full text of 104 life sciences journals, with more forthcoming.

 				</span>
				<!--end tooltip content -->
	
		<area	shape="polygon"
				coords="299,135,184,208,304,273,310,149"
				title="Human Genome"
				alt="Human Genome"
				href="http://www.ornl.gov/sci/techresources/Human_Genome/home.shtml" 
				onMouseOver="TagToTip('Span2', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
										SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
										FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
										CLOSEBTN, true, TITLE, 'Human Genome', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
				/>
				<!-- onMouseOut="UnTip()" -->
				<span id="Span2"><img src="images/dna5.jpg" height="280" width="250" style="padding:10px" 
									align="left"><strong>Human Genome Project</strong> Begun formally in 1990, the U.S. Human Genome Project was a 13-year effort coordinated by the U.S. Department of Energy and the National Institutes of Health. The project originally was planned to last 15 years, but rapid technological advances accelerated the completion date to 2003. Project goals were to identify all the approximately 20,000-25,000 genes in human DNA, determine the sequences of the 3 billion chemical base pairs that make up human DNA, store this information in databases, improve tools for data analysis, transfer related technologies to the private sector, and address the ethical, legal, and social issues (ELSI) that may arise from the project.
</span>
				<!--end tooltip content -->
	
		<area	shape="polygon"
				coords="242,323,208,397,252,423,333,245"
				title="Folding@home"
				alt="Folding@home"
				href="http://folding.stanford.edu/" 
				onMouseOver="TagToTip('Span3', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
										SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
										FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
										CLOSEBTN, true, TITLE, 'Folding@Home', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
				/>
				<!-- onMouseOut="UnTip()" -->
				<span id="Span3"><img src="images/dna6.jpg" height="280" width="250" style="padding:10px" 
									align="left"><strong>Folding@Home</strong> One of the author's favorites.  For years thousands ofpeople around the planet have been doing REAL science without an NBN. You can help scientists studying these diseases by simply running a piece of software.
Folding@home is a distributed computing project -- people from throughout the world download and run software to band together to make one of the largest supercomputers in the world. Every computer takes the project closer to our goals. Folding@home uses novel computational methods coupled to distributed computing, to simulate problems millions of times more challenging than previously achieved.
</span>
				<!--end tooltip content -->
	
	</map>
			
</div>
<!-- END OF CONTENT LEFT DIV -->



<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">
	
	<?php require_once("erhside.php"); ?>	
	
	
	<p>
	This small tour hopefully has sparked an interest for on-line bioinformatics!  All of this development has been going on for a few decades WITHOUT super high speed networks for all.  As you can see from your visit today, the most current scientific information and data is available to anyone in the world with an internet account.  The account NEED NOT be 100 Mbps or even 12 Mbps.  It works fine on the author's machine at 1.4 Mbps.  Spending more money on science is a GOOD thing.  Wasting $50 BILLION on a network no-one wants or needs is a crying shame, when we have hundreds of underfunded science projects begging for money.	
	</p>
  </div>
</div>
<?php require_once("efooter.php");  ?>
</body>
</html>
