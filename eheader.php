<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//	FILE:		eheader.php
//	SYSTEM:		eHealth	
//	AUTHOR:		Mark Addinall
//	DATE:		24 June 2009
//	SYNOPSIS:	Everyone is talking about eHealth, with the NBN
//				on its way.  And as usual, no-one is doing anything
//				about it.  Well, IBM are.  So, I thought I would
//				spend some time coding an experimental demonstration
//				that shows, and discusses some of the subjects
//				considered as part of the eHealth bag of goods
//				that is about to transform the world.
//
//				STANDARD HEADER FILE.  lOGO AND MENU.
//
// DATE       |    CHANGE                     |    WHO
// 24/09/2010 | Initial creation              |  MA
//
//
// set tabstops to 4 to be able to read this.
//

?>


<head>

<meta charset="utf-8" />
<title>eHealth Demonstration - Addinall</title>


<!-- now get a MINIMAL occurence of the Javascript library -->
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>

<!-- now load our custon eHealth routines (small) -->
<script type="text/javascript" src="js/eHealth.js"></script>


<!-- load and initialise shadow box -->

<link rel="stylesheet" type="text/css" href="js/shadow/shadowbox.css" />
<script type="text/javascript" src="js/shadow/shadowbox.js"></script>
<script type="text/javascript">
	Shadowbox.init();
</script>

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<script type="text/javascript" src="js/wz_tooltip.js"></script>
<!-- the above script does not like living in the header -->
<!-- it wants to be the first line on the BODY -->



<div id="header">
  <h1><a href="#/"><img src="images/blank.png" alt="" /></a> eHealth <span style="font-weight:bold; color:#73868C;">Demonstration</span>   mark addinall</h1>
</div>
<div id="container">
  <div id="navcontainer">
    <ul id="nav">
      <li id="nav-1"><a href="index.php">Home</a></li>
      <li id="nav-2"><a href="ehealth.php">eHealth</a></li>
      <li id="nav-3"><a href="etraining.php">eTraining</a></li>
      <li id="nav-4"><a href="ebi.php">eBI</a></li>
      <li id="nav-5"><a href="egenomics.php">eGenomics</a></li>
      <li id="nav-6"><a href="eblog.php">eBlog</a></li>
      <li id="nav-7"><a href="elinks.php">eLinks</a></li>
    </ul>
  </div>
