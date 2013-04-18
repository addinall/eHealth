<!DOCTYPE html>
<!--
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//  FILE:       index.php
//  SYSTEM:     eHealth 
//  AUTHOR:     Mark Addinall
//  DATE:       24 June 2010
//  SYNOPSIS:   Everyone is talking about eHealth, with the NBN
//              on its way.  And as usual, no-one is doing anything
//              about it.  Well, IBM are.  So, I thought I would
//              spend some time coding an experimental demonstration
//              that shows, and discusses some of the subjects
//              considered as part of the eHealth bag of goods
//              that is about to transform the world.
//
//              This new index file was researched and written
//              for a number of reasons, the primary
//              reason being the requirementto
//              load as few pages as possible.
//              Here we are.  As you can see using the
//              JQuery route, we have simplified the
//              structure of the application.
//              The look and feel is completely
//              handled by the CSS so change away....
//              I have managed to keep formatting away
//              from HTML, so far.  The lists of objects
//              are going to be a challenge....
//
//              The descision to code a single-page, AJAX driven website
//              was made to address a WAN speed issue.  Quite a 
//              lot of the participating stores are on slow dial-up
//              links, further slowed by VPN security.  The network needs re-doing
//              but that is not going to happen for a few years at least.
//              The typical usage for this system is to turn the machine on in the
//              morning, logon, and never leave the site until bedtime.
//              So this software architecture seems ideal as opposed to swapping
//              pages up and down a skinny pipe.
//
//              A new web development technique for creating interactive 
//              web applications, dubbed AJAX, has emerged. In this new 
//              model, the single-page web interface is composed of 
//              individual components which can be updated/replaced 
//              independently. With the rise of AJAX web applications 
//              classical multi-page web applications are becoming legacy 
//              systems. If until a coupe of years ago, the concern 
//              revolved around migrating legacy systems to web-based 
//              systems, today we have a new challenge of migrating web 
//              applications to single-page AJAX applications. Gaining an 
//              understanding of the navigational model and user interface 
//              structure of the source application is the first step in the 
//              development or migration process. In this system, we explore 
//              how moern engineering techniques can help build moern 
//              web applications. The approach, we use a multi-tabbed web
//              application to provide rich content from a single page.
//
//              UPDATE.  OK, this suite was once implemented as a single
//              page using javascript DOM jumps to get to placeholders.
//              I worked well enough but the file size was horrid.
//              It also became less clear where specific functionality
//              lived, so I split it more along the lines of a traditional
//              web 2.0 suite.  We still keep AJAX and other tricky
//              stuff, but separated into a half dozen pages.  The pages
//              are quite small and we will set caching TRUE to keep the
//              images in a local cache.  No session management has
//              been added apart from some GOOGLE analytics.
//
//              Google analytics removed.
//              Start the converstion of the demonstration into HTML5
//              CSS3.
//
//              A new navigation method is required.  I am going to extend
//              the speed dial concept on the right side of the app to a navigation
//              bar on the left side of the app.  Big chunky buttons fit
//              well into the iPod, Android, Windows 8 presentation paradigms.
//              This index page validates HTML5.  Still more work to do on the rest.
//
//
// DATE       |    CHANGE                     |    WHO
// 24/04/2010 | Initial creation              |  MA
// 01/01/2011 | Version 2                     |  MA
// 20/05/2011 | This document was successfully| 
//            | checked as XHTML 1.0          |
//            | Transitional!                 |  MA
// 03/06/2012 | This document was successfully|  MA
//              validated as HTML5
//
//
// set tabstops to 4 to be able to read this.
//
-->


<?php

require_once "eheader.php";

?>

  <div id="contentleft">
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eHealth</span> Demonstration</h1>
    <p><img class="imgleft" src="images/info.png"  alt="" /><strong> 
Everyone is talking about eHealth, with the NBN on its way.  And as usual, no-one is doing anything about it.  Well, IBM are.  So, I thought I would spend some time coding an experimental demonstration that shows, and discusses some of the subjects considered as part of the eHealth bag of goods that is about to transform the world.</strong>
    </p>


    <div id="gallery">

        <a href="#" class="show">
        <img src="images/xray.jpg" alt="X Rays" width="440" height="380"    title="Technology - Explore the world of Information Technology in support of the life sciences.  A partnership in innovation. "/>
        </a>
    
        <a href="#">
        <img src="images/antibody.jpg" alt="Antibodies" width="440" height="380"    title="Antibodies - Use technology to visualise, manipulate and construct antibodies in-silico. "/>
        </a>
    
        <a href="#">
        <img src="images/image006.jpg" alt="Lab Work" width="440" height="380"   title="Prediction - Using technology to accuratley predict the result of bioengineering operations."/>
        </a>

    
        <a href="#">
        <img src="images/dna2.jpg" alt="DNA" width="440" height="380"   title="Genome Databanks - Thousands of organisms have already been mapped.  Have access to genomic data in real-time."/>
4
        </a>
    
        <a href="#">
        <img src="images/mol_svcs.jpg" alt="BI" width="440" height="380"   title="Business Intelligence - Record experimental results in a data warehouse.  Use the techniques of BI to explore hidden data trends."/>
        </a>
        
        <a href="#">
        <img src="images/blue2.jpg" alt="SciFi" width="440" height="380"   title="Science Fiction - A few short years ago, computing and medicine together lived only in Science Fiction.  Today techniques go beyond imagination."/>
        </a>
    
        <a href="#">
        <img src="images/skull.jpg" alt="Skull" width="440" height="380"   title="Information sharing - Share diagnostics with consultants in a timely and secure manner.  Avoid potentially fatal delays in examining test results."/>
        </a>
    
        <a href="#">
        <img src="images/cpu.jpg" alt="AI" width="440" height="380"   title="Artificial Intelligence - Processing power has brought machine based preliminary diagnostics.  Explore the future of AI."/>
        </a>
    
        <a href="#">
        <img src="images/mri.jpg" alt="Records" width="440" height="380"   title="Records Management - Have instant access to all types of records relating to a patient, or a condition.  Powerful cross referencing aiding diagnostics."/>
        </a>
    
        <a href="#">
        <img src="images/lappy.jpg" alt="Portable" width="440" height="380"   title="Portability - Access complete patient records when on the move. Have access to medical and scientific libraries from all around the world, from anywhere."/>
        </a>
    
        <a href="#">
        <img src="images/green.jpg" alt="Matrix" width="440" height="380"   title="Digitised Health - Starting in the 21st century, Digital Health comes of age. Information Technology and Life Sciences working in partnership for better outcomes."/>
        </a>
    

        <a href="#">
        <img src="images/spooky.jpg" alt="Virtual body" width="440" height="380"   title="Computer Assisted Surgery - Explore new techniques on a virtual patient.  Ask a BOT to find and display a technique."/>
        </a>
    
        <a href="#">
        <img src="images/Imaging.jpg" alt="Image" width="440" height="380"   title="Medical Imaging - ADSL 2+ network speed has become common.  The price of storage is now trivial.  Electronic Image Management has come of age."/>
        </a>
    
        <a href="#">
        <img src="images/nuke.jpg" alt="Nuke" width="440" height="380"   title="Nuclear Medicine - Greater accuracy.  Less exposure for patients and practicioners. Computer controlled nuclear medicine."/>
        </a>
    
        <a href="#">
        <img src="images/skull2.jpg" alt="Graphics" width="440" height="380"   title="Image Manipulation - Not happy with the result?  Instead of re-testing, have the computer fix the image.  Save time and money and minimise exposure."/>
        </a>
    
        <a href="#">
        <img src="images/head11.jpg" alt="head graph" width="440" height="380"   title="Teaching Aides - Have the most up to date scientific data and aides on hand."/>
        </a>
    
    
        <a href="#">
        <img src="images/skull3.jpg" alt="Emergency" width="440" height="380"   title="Emergency Medicine - Have the diagnostics get to emergency before the patient.  Prepare for the patient coming in to triage."/>
        </a>
    
        <div class="caption">
            <div class="content">
                    </div>
                    </div>
        </div>
        <!-- END of GALLERY -->
<div>
                <p>
                eHealth, associated Life Sciences and Bioinformatics applications are generally multi-server dependants and will have to communicate with several information repositories to carry out any analysis. These applications remain computationally intensive and time consuming as they engage lots of data transfer. Hence they face a major bottleneck when ported as web applications. Browser based web applications normally feature the classical request-response approach. If the response becomes late, as it is expected to happen in the case of long running Diagnostic or Bioinformatics programs, Apache (IE) may get tired and a request timeout error might occur. Alternate approaches like Client-Pull models that involve polling strategy with the unpredictable amount of page refreshes, only tend to intensify the network traffic. Hence a technology that is intelligent enough to support the varied exhaustive Bioinformatics processes becomes highly essential. In this web application, we propose how AJAX can afford a laconic framework within the eHealth applications to reduce the page refresh nuisance and provide a better user experience.
                </p>
                <p>
                This system is intended to be a working model to demonstrate the use of Javascript, Javascript frameworks (YUI, JQuery etc) and AJAX in developing a rich content applications for the field of eHealth, Bioinformatics and allied medical and scientific research. This is important as is reported, the people who ark likely to benifit fron the NBN are the people who are going to be limited with 12 Mbps as opposed to the "Super Fast" offering being rolled out in cities.  So remote eHealth has network bandwidth restrictions. 
                </p>
                <p>
Number crunching and data storage and modelling has been going on for some time.  We are experiencing the start of an increase in the application of Biomedical Informatics.  
                </p>
                <p>
                From Wiki:<i> Biomedical informatics is the broad discipline concerned with the study and application of computer science, information science, informatics, cognitive science and human-computer interaction in the practice of biological research, biomedical science, medicine and healthcare. Other fields, including bioinformatics, translational research informatics, clinical research informatics, clinical informatics and public health informatics, medical informatics are commonly cast as sister domains of or subdomains within biomedical informatics </i>.
                </p>
                <p>
                It was inevitable the life sciences and computer science would become close allies in both research and operation.  Both can be data hungry, both make heavy use of statistical method.  
                </p>
                <p>
                The techniques described can be transported to other research or commercial systems.
                </p>
    </div>
</div>
<!-- END OF CONTENT LEFT DIV -->



<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">
    <?php require_once "erhside.php"; ?>
    <p>
    In HTML 5 parlance, this small column is an aside.  It contains some social web information/links etc., or it can comment on the main text over there.  TAG clouds have become popular to stick all over a page.  I don't like them.
    </p>
</div>
</div>
<?php require_once "efooter.php";  ?>
</body>
</html>
