<!DOCTYPE html> 
<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//	FILE:		ebi.php
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
//				This module discusses the use of BI techniques as can
//				be applied to various data in Life Sciences fields.
//
//
// DATE       |    CHANGE                     |    WHO
// 24/09/2010 | Initial creation              |  MA
//
//
// set tabstops to 4 to be able to read this.
//

require_once("eheader.php");

?>

  <div id="contentleft">
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eBI</span> Discussion</h1>
    <p><img class="imgleft" src="images/info.png" alt="" /><strong> 
	This section brings up a discussion regarding the use of Business Intelligence methods, techniques and philosophies as can be adapted to various data from the collection of life Sciences.</strong>
	</p>

    <p>


<center><h2>Business Intelligence - Life Science</h2></center>
				<img src="images/bi.jpg" 
				style="border: inset;" alt="BI person"  width="450"/>
				</p>
			
	<div class="caption">
		<div class="content" align="justify">
			<p>
			This page will attempt to explain some of the history of, the importance of and the implementation of Data Warehousing and Business Intelligence Systems without using too much jargon.  In this field, a lot of new names have been introduced to describe some old, but useful concepts.  Here we will define Data Warehousing, the difference between Data Warehousing and Business Intelligence, some different models of Data Warehousing Architecture.  We will discuss Business Intellegence and the various forms it may take within an organisation, from Data Mining through to Process Automation, with a bent on the use withing the life sciences.
			</p>
			<p>
<strong>What is Data - Data Warehousing - Business Intelligence?</strong>  First I would like to separate these three definitions, as more often than not, they are being used interchangeably.  All organizations have data, be stored, transient, or more often than not, a mixture of both. Business Intelligence does quite often include a Data Warehouse, although it need not.  Conversely, an organization can own a Data Warehouse without deriving much, if any Business Intelligence from the repository.
			</p>
			<p>
<h2>Data We all use it.  What is it?</h2>

Pronunciation: 'dA-t&, 'da- also 'dä-<br>
Function: noun plural but singular or plural in construction<br>
Usage: often attributive<br>
Etymology: Latin, plural of datum<br>
1 : factual information (as measurements or statistics) used as a basis for reasoning, discussion, or calculation<br>
2 : information output by a sensing device or organ that includes both useful and irrelevant or redundant information and must be processed to be meaningful<br>
3 : information in numerical form that can be digitally transmitted or processed<br>
</p>
<p>
It is worth keeping in mind when considering Business systems that seemingly disparate types and forms of data may be considered in a unique way to look for non-trivial correlations.  Data may be transitory or permanent.  If transitory, the availability of the data can range from microseconds to decades.  Data may be stored in volatile memory, on disk, on tape, on paper. Data may be stored in conflicting byte order.  It may be stored in conflicting word sizes.  It may (and quite often is) stored in differing character sets.  It is important when considering implementing Business Intelligence tools and functionality to consider all of the available types of data and how best to make that data available to the various processes.  Some of the data that may be available off-line or in a 'difficult' format may be vitally important to the descision making processes.  Without such consideration the implementation of BI may be a waste of time and effort.
</p>
<h2>Data Warehousing</h2>
According to Stanford - <em><strong>A Data Warehouse is a repository of integrated information, available for queries and analysis. Data and information are extracted from heterogeneous sources as they are generated. This makes it much easier and more efficient to run queries over data that originally came from different sources.</strong> </em>
</p>
<p>
This is indeed true, but not all of the truth.  The Stanford definition covers what is currently in vogue as being a model for a Data Warehouse.  I will risk being forward and  analyze the definition critically, and if found wanting, correct the Stanford definition.  <em><strong>A Data Warehouse is a repository.</strong></em>  This is essentially true.  The repository can be persistent or dynamic.  Persistent Data Warehouse storage may reside in a custom built database (Oracle, DB2 etc), Dynamic Data Warehouse storage may exist in memory in the form of Views and the level of persistence is decided by the DBA.  Next, <em><strong>Integrated information, available for queries and analysis</strong></em>.  The information may indeed be integrated, however, the information in a Data Warehouse may be a subset of a larger data store, re-organized (indices, data formats etc) to facilitate the timeliness and accuracy of information queried.  An example, an organization with a single very large IMS legacy data set has defined a meta-data schema that will deliver a required Business Intelligence result.  The Data Warehouse to support this implementation could then be a subset of the IMS data moved into an Oracle database on a near line machine, in accordance to the meta-data definitions.  The Data Warehouse is then a more efficient subset of the total data set. <em><strong>Data and information are extracted from heterogeneous sources</strong></em>, they can be, and quite often are, but as described in the previous example the data source need not be heterogeneous, it may often be homogeneous.  Then we examine, <em><strong>As they are generated</strong></em>. This may not be true, in fact, on most occasions it will not be true.  The requirement for the transactional latency between the operational data sets and the Data Warehouse will be stated  as a requirement of the Business Intelligence goals.  A Business Intelligence query formulated for real time or near real time (such as power grid balancing) may need transactional synchronization, but most applications will be readily served with co-ordinated snapshots.  This warrants some discussion later in this section regarding what has become a rather fuzzy term, OLAP. The goal of course is <em><strong>This makes it much easier and more efficient to run queries over data</strong></em>.  Quite correct.  This service now named Data Warehousing is a collection of techniques that encompass efficient architectures, data design and tool implementations, and it should be remembered that the most modern tool is little substitute for efficient data shaping.  And lastly <em><strong>that originally came from different sources.</strong></em> .  Being a created repository, the Data Warehouse data set(s) will be distinct from the operational data store.
</p>
<p>
Following the principal that less is more” the definition of Data Warehousing can be considered as 
</p>
<p>
<em><strong>A Data Warehouse is a repository of selected information,from one or more data sources, made available for timely and accurate queries and analysis. - Mark Addinall 2002,2008,2010,2011</strong></em>
</p>
<p>
<h2>Business Intelligence</h2>
<p>
Of the hundreds of definitions available for this term, many of which lean heavily on the provision of applications, and again OLAP, the definition I most prefer is:
</p>
<p>
<em><strong>Business intelligence (BI) deals with a systematic process for collecting, analyzing, and managing internal and external information and knowledge to improve an organization’s decision making process.</strong></em>
</p>
<p>
<em>This definition is fairly similar to the definition of competitive intelligence, established by the Society of Competitive Intelligence Professionals (www.scip.org). Whether talking about business or competitive intelligence, a key ingredient must exist—that is, knowledge management. Knowledge management is determining how to best leverage knowledge internally and externally in an organization, and how to create value out of the organization’s intangible assets. Specifically, knowledge management is the process of identifying, capturing, sharing, applying, disseminating, and creating knowledge in the organization’s context.  - Dr. Jay Liebowitz</em>
</p>
<p>
This definition outlines the tangible systemics for the set of processes, procedures and applications that are today described as BI.  To identify the techniques required to formulate effective organizational Knowledge Management.
</p>
<p>
If the organization will benefit from implementing a BI, what information is required? Where? When?  In what format?  How will it be requested?  The answers to these questions will play a large part in defining a functional specification.  Answering these basic questions will (or should) determine if you do indeed want to go down the path of building a Business Intelligence system.
</p>
<h2>Ad-Hoc queries and reports</h2>
<p>
Many BI implementations allow ad-hoc queries over a multi-dimensional dataset.  The more sophisticated may use a natural language interface; <em>Show me who has been diagnosed with TB in the last 30 days in the Northern Territory include occupation"</em>.  Strangely, this method of formulating queries started to gain some popularity starting in the 1980's and seemed to have lost momentum with the vendors, who favor a spreadsheet type of interface to ad-hoc queries (Cognos et al).
</p>
<h2>Automated Alerting</h2>
<p>
Some BI implementations have adopted the practice of generating alerts when a business  (or process) threshold has been reached.  This technology has been used for many years in the fields of Network Management (Route not available), Security (Intrusion Detection Systems), Process Control (Pressure Increase) and Stock Fluctuation.
</p>
<h2>Data Mining</h2>
<p>
Finally we should quickly look at Data Mining.  These are non-trivial techniques used to discover previously unknown correlations between elements in data.  This gets confused a great deal with OLAP and multi-dimensional analysis when discussed in the media or the marketplace.  Data mining is being used more and more in complex areas such as the analysis of separations from the public health systems.  The correlations discovered using Data Mining can be confirmed using OLAP and,
Statistical analysis.  Using known statistical methods (Chi-square analysis etc) to confirm causative relationships of discovered or predicted correlations.
Predictive Analysis.  These techniques blur along the lines of Data Mining and Statistical analysis.  Predictive analysis has been used for many years in areas such as Statistical Process Control.
</p>
<p>
So we see that a Business Intelligence System when implemented is a mixture of one or more methods and technologies that are well established (Automated alerting), some in their infancy (Data Mining), existing data sets, new meta-data descriptions and potentially a Knowledge base containing business driven triggers.
</p>
<p>
Because the industry is still in the very early stages of achieving a fully functional electronic health records (eHR) system, which would enable the sharing of information among hospitals, clinics and other providers in a way that protects individual patient privacy, most medical professionals prefer to use paper records or their own proprietary system for keeping eHRs. But what if a system could bring together all these flat and static pieces to derive a dynamic and full picture of a patient's health status in real-time? And what if the system were to provide this information in an intuitive and sophisticated way?
</p>
			</div>
		</div>
	</div>
<!-- END OF CONTENT LEFT DIV -->



<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">

	<?php require_once("erhside.php"); ?>

This page is far too large.  Even after cutting out some five hundred words from my origional text.  The subject is broad and complex in nature and is in it's infancy even as we enter 2011.  BI techniques can be applied to: <br />
<em><strong>
Diagnostics<br />
Epidemiology<br />
Treatment outcomes<br />
Treatment contra-indications<br />
Hospital management<br />
</strong></em>
</p>
<p>
And many, many more areas within the Life Sciences.  The subject is book size and can't be covered in a web page.  With luck, this brief discussion will provide the stimulation for more though on how we can implement and use these techniques and technologies.
</p>
  </div>
</div>
<?php require_once("efooter.php");  ?>
</body>
</html>
