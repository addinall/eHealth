<!DOCTYPE html>
<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//  FILE:       ehealth.php
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
//              This particular sub-system emulates an interactive Avatar - Mediical records
//              tool.  It uses the anatomy and physiology of the Brain as an example.
//
//
// DATE       |    CHANGE                     |    WHO
// 24/09/2010 | Initial creation              |  MA
// 01/01/2010 | Version 2                     |  MA
//
//
// set tabstops to 4 to be able to read this.
//

require_once("eheader.php");

?>

  <div id="contentleft">
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eHealth</span> Demonstration</h1>
    <p><img class="imgleft" src="images/info.png" alt="" /><strong> 
eHealth is being touted as one of the world-changing technologies to be introduced with the NBN, and all of the Web Application developers being <em>STIMULATED</em> by the NBN.  All well and good.  Apologies for me being stimulated a little early (as usual ;-).  One of the technologies talked about, and in research pase with IBM Zurich and a spin-off is that of mapping HL7 clinical data onto a visual representation of the patient (an Avatar). IBM have a few tens of millions of dollars, a few supercomputers and a staff of hundreds.  I am making do with a laptop, Ubuntu,  GNU gear, some other stuff I wrote myself and copy of vi()  ;-)  In this demo you all get to see why I walk funny.</strong>
    </p>

    <p>
<!-- stick avatar tool in here -->
<center><h2>Patient Medical History</h2></center>
                <p>Move the cursor around the patient for medical history details.  These details can come from various sources.  Centralised records, individual hospitals, patient self-managed data, para-medical reports etc.  In this instance, read the patient information to get a hint where to linger with the mouse. The model uses the AJAX methodology to collect data, however, since the data is relatively static, it does an on-load load, and doesn't traverse the network after that.  If the medical practioner makes a CHANGE or a NEW transaction, appropriate data stores are updated using appropriate technologies.  HL7v3 is very much XML and the implementations of proposed techniques rely heavily on XML and SOAP.  There are many in R&D (myself included) that are investigating the use of JSON as a data model and RESTful transactions as a transport technology.  It is quicker, lighter, smaller and a LOT easier to maintain/debug.  Time will tell.</p>
                <img src="images/body3.jpg" 
                style="border: inset;" alt="human avatar" usemap="#patient" width="450"/>
                <div align="justify">
                </p>
                <p>
                eHealth in use by a local or remote medical practitioner that maps patient data onto an Avatar seems to be one of the WOW factors being propogated as a plus.  I am not convinced that a GP would want to use it.  Included here for discussion.
                </p>
                <p>
IBM researchers unveiled a prototype visualization software that allows doctors to interact with medical data the same way they interact with their patients: by looking at the human body. Created at IBM's Zurich Research Lab, the technology uses an avatar - a 3D representation of the human body - to allow doctors to visualize patient medical records in an entirely new way. Called the Anatomic and Symbolic Mapper Engine (ASME), this innovative visualization method allows a doctor to click with the computer mouse on a particular part of the avatar "body" to trigger a search of medical records to retrieve relevant information.  This is a somewhat smaller implementation!
                </p>
                <p>
                Because the industry is still in the very early stages of achieving a fully functional electronic health records (eHR) system, which would enable the sharing of information among hospitals, clinics and other providers in a way that protects individual patient privacy, most medical professionals prefer to use paper records or their own proprietary system for keeping eHRs. But what if a system could bring together all these flat and static pieces to derive a dynamic and full picture of a patient's health status in real-time? And what if the system were to provide this information in an intuitive and easy-to-use way? With ASME, IBM researchers have now presented such a system -- ASME allows navigating through a virtual map of the human body, an intuitive approach for healthcare professionals.
                </p>
                <p>
                Information can be found in <a href="http://www.ehealthnews.eu/ibm/747-ibm-research-unveils-3d-avatar-to-help-doctors-visualize-patient-records-and-improve-care">this article</a> or by visiting IBM <a href="http://www.ibm.com/search/csass/search?sn=mh&q=ehealth&lang=en&cc=us&en=utf">here</a>.
                </p>

    </div>
</div>
<!-- END OF CONTENT LEFT DIV -->



<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">

    <?php require_once("erhside.php"); ?>


    <map name="patient"> 
        <area   shape="polygon"
                coords="233,84,251,87,235,97,249,98"
                title="Dental trauma."
                alt="Dental trauma."
                href="#" 
                onMouseOver="TagToTip('Span1', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
                                        SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
                                        FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
                                        CLOSEBTN, true, TITLE, '#2376984 - SCG', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
                />
                <!-- onMouseOut="UnTip()" -->
                <span id="Span1"><img src="images/dental.jpg" height="280" width="250" style="padding:10px" 
                                    align="left"><strong>Addinall.  Nov 2002</strong> Fractured mandible as the result of a climbing accident.  Posteroanterior radiographic view showing a left angle fracture.  He presented with a minimally displaced condylar fracture and was treated with analgesics, soft diet, and close observation. . Additionally, this patient required mandibular exercises to prevent trismus.  <em>Solid bony repair has been achieved. Has on-going dental health issues as a result of this damage.</em></span>
                <!--end tooltip content -->
    
    
        <area   shape="polygon"
                coords="242,120,273,152,259,153,237,128"
                title="Left Clavicle trauma."
                alt="Left Clavicle trauma."
                href="#" 
                onMouseOver="TagToTip('Span2', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
                                        SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
                                        FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
                                        CLOSEBTN, true, TITLE, '#112777 - 1MILHOSP', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
                />
                <!-- onMouseOut="UnTip()" -->
                <span id="Span2"><img src="images/clav.jpg" height="280" width="250" style="padding:10px" 
                                    align="left"><strong>Addinall.  Aug 1977</strong> Fractured (L) clavicle as the result of a rugby accident.  Posteroanterior radiographic view showing a left angle fracture.  The fracture was reduced using a Hagel pin operation after the displacement was seen to be too large to effect bone union.  <em>Solid bony repair has been achieved.  However, some malformation is present and activities such as carrying a rucksack still causes pain. </em></span>
                <!--end tooltip content -->
    
    
        <area   shape="polygon"
                coords="107,270,127,276,100,321,89,323"
                title="Right hand trauma."
                alt="Right hand trauma."
                href="#" 
                onMouseOver="TagToTip('Span3', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
                                        SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
                                        FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
                                        CLOSEBTN, true, TITLE, '#112777 - 1MILHOSP', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
                />
                <!-- onMouseOut="UnTip()" -->
                <span id="Span3"><img src="images/finger2.jpg" height="280" width="250" style="padding:10px" 
                                    align="left"><strong>Addinall.  Jan 2001</strong> Fractured (R) 3rd intermediate phalange as the result of a karate session.  Radiographic investigation has shown prior damage to several of the phalanges of this hand.  Karate and rugby football were given as the most likely cause.  The fracture was surgically reduced and containes due to the severity of this incident.  <em>Solid bony repair has been achieved.  Patient presents with chronic discomfort. </em></span>
                <!--end tooltip content -->
    
    
        <area   shape="polygon"
                coords="200,514,221,518,228,541,198,549"
                title="Right ankle trauma."
                alt="Right ankle trauma."
                href="#" 
                onMouseOver="TagToTip('Span4', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
                                        SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
                                        FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
                                        CLOSEBTN, true, TITLE, '#7456884 - SCGP', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
                />
                <!-- onMouseOut="UnTip()" -->
                <span id="Span4"><img src="images/ankle2.jpg" height="280" width="250" style="padding:10px" 
                                    align="left"><strong>Addinall.  Nov 2002</strong> Open reduction and internal fixation of bimalleolar fracture (R).  The patient was delivered to the Sir Charles Gardener Perth by the Royal Flying doctor Service presenting with fractures to both legs as a result of a climbing accident.  The patient fell a distance of ~15M and took the impact on both heels.  <em>Solid bony repair has been achieved.  Patient presents with chronic pain, acute pain episodes, loss of sensation due to associated nervous system damage and resultant ataxia.  On-going deformation is noticeable. </em></span>
                <!--end tooltip content -->
    
    
        <area   shape="polygon"
                coords="257,500,275,504,280,522,261,534"
                title="Left ankle trauma."
                alt="Left ankle trauma."
                href="#" 
                onMouseOver="TagToTip('Span5', WIDTH, '-450', BGCOLOR, '#CDEAFC', SHADOW, true, 
                                        SHADOWCOLOR, '#333333', FOLLOWMOUSE, false, OPACITY, '90', 
                                        FADEIN, '400', FADEOUT, '600', FONTSIZE, '10pt', CLICKCLOSE, true,
                                        CLOSEBTN, true, TITLE, '#7456896 - SCGP', TITLEFONTCOLOR, 'white', DURATION, '25000')" 
                />
                <!-- onMouseOut="UnTip()" -->
                <span id="Span5"><img src="images/ankle.jpg" height="280" width="250" style="padding:10px" 
                                    align="left"><strong>Addinall.  Nov 2002</strong> Open reduction and internal fixation of bimalleolar fracture (L).  The patient was delivered to the Sir Charles Gardener Perth by the Royal Flying doctor Service presenting with fractures to both legs as a result of a climbing accident.  The patient fell a distance of ~15M and took the impact on both heels.  <em>Solid bony repair has been achieved.  Patient presents with chronic pain, acute pain episodes, loss of sensation due to associated nervous system damage and resultant ataxia.  On-going deformation is noticeable. </em></span>
                <!--end tooltip content -->
    
    
    
    </map>
            
    <div align="left" style="color:blue">
            <p id="lesson">
                        <em><u>Patient</u>  </em> <br />
                        Mark Addinall, Dr. <br />
                        <em><u>Details</u>  </em> <br />
                        Male.  Age 52. <br />
                        <font color='red'><strong><em><u>ALLERGIES</u>  </em> <br />
                        IODINE <br /></STRONG></font>
                        <em><u>Presentation</u>  </em> <br />
                        Mark presents with severe toothache, minor arthritic pain - (L) shoulder, arthritic pain and muscle cramps (R) hand, both ankles painful, chronic 2/10 with acute periods 6-7/10.  Loss of feeling and resultant ataxia.  Night cramps (L) foot. <br />
                        <em><u>Current condition(s)</u>  </em> <br />
                        Occasional acute arthritis as a result of multiple fractures (L+R) ankle, surgically reduced seven years ago.  Some balance issues due to lower extremity nerve damage as a result of the same accident (climbing incident).  Some dental trauma as a result of this fall. <br />
                        <em><u>Current treatment(s)</u>  </em> <br />
                        NIL<br />
                        <em><u>Alchohol use</u>  </em> <br />
                        Light <br />
                        <em><u>Tobacco use</u>  </em> <br />
                        Light <br />
                        <em><u>Proscribed drugs</u>  </em> <br />
                        NIL <br />
                        <em><u>Recreational drugs</u>  </em> <br />
                        NIL <br />
                        <em><u>Marital status</u>  </em> <br />
                        Single (Divorced) <br />
                        <em><u>Blood Group</u>  </em> <br />
                        AB Positive <br />
            </p>

                </div>

  </div>
</div>
<?php require_once("efooter.php");  ?>
</body>
</html>
