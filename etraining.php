<!DOCTYPE html>
<?php
// vim: set tabstop=4 shiftwidth=4 expandtab autoindent smartindent :
// CAPTAIN  SLOG
//
//  FILE:       etraining.php
//  SYSTEM:     eHealth 
//  AUTHOR:     Mark Addinall
//  DATE:       24 June 2009
//  SYNOPSIS:   Everyone is talking about eHealth, with the NBN
//              on its way.  And as usual, no-one is doing anything
//              about it.  Well, IBM are.  So, I thought I would
//              spend some time coding an experimental demonstration
//              that shows, and discusses some of the subjects
//              considered as part of the eHealth bag of goods
//              that is about to transform the world.
//
//              This particular sub-system emulates an interactive training
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
    <h1>Welcome to <span style="font-weight:bold; color:#C4DA64;">eTraining</span> Demonstration</h1>
    <p><img class="imgleft" src="images/info.png" alt="" /><strong> 
eTraining is being touted as one of the world-changing technologies to be introduced with the NBN, and all of the Web Application developers being <em>STIMULATED</em> by the NBN.  All well and good.  I hope this page generates some interest.
    </p>

    <p>
<!-- stick training tool in here -->
<center><h2>MRI Interactive Training Model</h2></center>
                <strong>
                <p>Move the cursor around the Brain for descriptions as you travel. When you see a glove - 'Click' to do something.  Roam around the larynx for an interesting text (well, I think so).</p>
                </strong>
                <img src="images/brainmap.jpg" 
                style="border: inset;" alt="BrainMap" usemap="#brain" /></a>
                <div align="justify" style="color:blue">
                <map name="brain"> 
                <area   shape="polygon"
                        coords="365,156,340,154,341,188,363,201"
                        title="Occipital Lobe.  Primary visual area."
                        alt="Occipital Lobe.  Primary visual area."
                        onMouseOver='brain_lesson("<em> <u>The occipital lobe</u> is the visual processing center of the mammalian brain containing most of the anatomical region of the visual cortex. The primary visual cortex is Brodmann area 17, commonly called V1 (visual one). Human V1 is located on the medial side of the occipital lobe within the calcarine sulcus; the full extent of V1 often continues onto the posterior pole of the occipital lobe. V1 is often also called striate cortex because it can be identified by a large stripe of myelin, the Stria of Gennari. Visually driven regions outside V1 are called extrastriate cortex. There are many extrastriate regions, and these are specialized for different visual tasks, such as visuospatial processing, color discrimination and motion perception.</em>")'

                href="javascript:alert('Do some more AJAX with the Occipital Lobe. This can be part of training. Fetch a test exam perhaps....')"/>

<!--  TEST COMMENT -->


                <area   shape="polygon"
                        coords="279,141,298,142,303,156,274,178"
                        title="Temporal (Hearing). Area of the Brain that controls hearing."
                        alt="Temporal (Hearing). Area of the Brain that controls hearing."
                        onMouseOver='brain_lesson("<em><u>The superior temporal gyrus</u> includes an area (within the Sylvian fissure) where auditory signals from the cochlea (relayed via several subcortical nuclei) first reach the cerebral cortex. This part of the cortex (primary auditory cortex) is involved in hearing. Adjacent areas in the superior, posterior and lateral parts of the temporal lobes are involved in high-level auditory processing. In humans this includes speech, for which the left temporal lobe in particular seems to be specialized.</em> ")'

                href="javascript:alert('Do some more AJAX with the Temporal (hearing) Lobe. Perhaps a quick reference.')"/>


<!--  TEST COMMENT -->

                <area   shape="polygon"
                        coords="327,83,298,118,309,139,356,118"
                        title="Parietal. Multi modal processing."
                        alt="Parietal. Multi modal processing."
                        onMouseOver='brain_lesson("<em> <u>The parietal lobe</u> plays important roles in integrating sensory information from various parts of the body, knowledge of numbers and their relations, and in the manipulation of objects. Portions of the parietal lobe are involved with visuospatial processing. Although multisensory in nature, the posterior parietal cortex is often referred to by vision scientists as the dorsal stream of vision (as opposed to the ventral stream in the temporal lobe). This dorsal stream has been called both the where stream (as in spatial vision) and the how stream (as in vision for action).</em>")'

                href="javascript:alert('Do some more AJAX with the Parietal Lobe.  Exam time and place reminders perhaps.')"/>

<!--  TEST COMMENT -->
                <area   shape="polygon"
                        coords="269,62,263,91,288,103,306,71"
                        title="Sensory Cortex.  Pain, heat, other sensations"
                        alt="Sensory Cortex.  Pain, heat, other sensations"
                        onMouseOver='brain_lesson("<em><u>The sensory cortex</u> is an umbrella term for the primary and secondary cortexes of the different senses: the visual cortex on the occipital lobes, the auditory cortex on the temporal lobes, the somatosensory cortex on the postcentral gyrus, the olfactory cortex on the entorhinal and pyriform cortexes, and the gustatory cortex laterally on the postcentral gyrus.  All sensory areas are located behind the lateral and central fissure, that is, more at the back of the brain.  Note that the central sulcus (or fissure) divides the primary motor cortex (in the precentral gyrus) from the sensory cortex (in the postcentral gyrus).  The posterior parietal cortex (somatosensory cortex) is involved in somatic sensation, visual stimuli, and movement planning.  Wernicke&#39s area is named after Carl Wernicke, a German neurologist and psychiatrist who, in 1874, hypothesized a link between the left posterior section of the superior temporal gyrus and the reflexive mimicking of words and their syllables that associated the sensory and motor images of spoken words. He did this on the basis of the location of brain injuries that caused aphasia. Receptive aphasia in which such abilities are preserved is now sometimes called Wernicke&#39s aphasia. In this condition there is a major impairment of language comprehension, while speech retains a natural-sounding rhythm and a relatively normal syntax. Language as a result is largely meaningless (a condition sometimes called fluent or jargon aphasia). However, it is now known that Wernicke&#29s aphasia is not caused by damage to the Wernicke&#39s area.</em>")'

                href="javascript:alert('Do some more AJAX with the Sensory Cortex.  A cross reference to a list of conditions associated with this area.')"/>

<!--  TEST COMMENT -->
                <area   shape="polygon"
                        coords="208,82,237,80,240,100,202,108"
                        title="Motor Cortex.  Movement"
                        alt="Motor Cortex.  Movement"
                        onMouseOver='brain_lesson("<em> <u>The motor cortex</u> can be divided into five main areas: the primary motor cortex (or M1), responsible for generating the neural impulses controlling execution of movement and the secondary motor cortices, including the posterior parietal cortex, responsible for transforming visual information into motor commands, the premotor cortex, responsible for motor guidance of movement and control of proximal and trunk muscles of the body and the supplementary motor area (or SMA), responsible for planning and coordination of complex movements such as those requiring two hands.  Other brain regions outside the cortex are also of great importance to motor function, most notably the cerebellum and subcortical motor nuclei.</em>")'

        href="javascript:alert('Do some more AJAX with the Motor Cortex.  A link to statistical data regarding the occurence of conditions associated with this area..')"/>

                <area   shape="polygon"
                        coords="134,112,170,105,175,121,111,148"
                        title="Frontal Lobe. Judgement, foresight, voluntary movement."
                        alt="Frontal Lobe. Judgement, foresight, voluntary movement."
                        onMouseOver='brain_lesson("<em> <u>The frontal lobe</u> is an area in the brain of mammals. It is located at the front of each cerebral hemisphere and positioned anterior to (in front of) the parietal lobes and above and anterior to the temporal lobes. It is separated from the parietal lobe by the primary motor cortex, which controls voluntary movements of specific body parts associated with the precentral gyrus.  The frontal lobe reaches full maturity around age 25, marking the cognitive maturity associated with adulthood. Arthur Toga, UCLA, found increased myelin in the frontal lobe white matter of young adults compared to that of teens. A typical onset of schizophrenia in early adult years correlates with poorly myelinated and thus inefficient connections between cells in the fore-brain.  The frontal lobe contains most of the dopamine-sensitive neurons in the cerebral cortex. The dopamine system is associated with reward, attention, long-term memory, planning, and drive. Dopamine tends to limit and select sensory information arriving from the thalamus to the fore-brain. A report from the National Institute of Mental Health says a gene variant that reduces dopamine activity in the prefrontal cortex is related to poorer performance and inefficient functioning of that brain region during working memory tasks, and to slightly increased risk for schizophrenia.</em> ")' 

                href="javascript:alert('Do some more AJAX with the Frontal Lobe.  A cross reference to latest areas of research.')"/>


                <area   shape="polygon"
                        coords="169,146,185,146,187,162,167,177"
                        title="Brocas Area. Speech"
                        alt="Brocas Area. Speech"
                        onMouseOver='brain_lesson("<em> <u>Broca&#39s area</u> is a region of the brain responsible for speech production.  The importance of Broca&#39s area in producing language has been recognized since Paul Pierre Broca reported impairments in two patients he encountered. They had lost the ability to speak after injury to the posterior inferior frontal gyrus of the brain. Since then, the approximate region he identified has become known as Broca&#39s area, and the deficit in language production as Broca&#39s aphasia. Broca&#39s area is now typically defined in terms of the pars opercularis and pars triangularis of the inferior frontal gyrus, represented in Brodmann&#39s cytoarchitectonic map as areas 44 and 45. Studies of chronic aphasia have implicated an essential role of Broca&#39s area in various speech and language functions. Further, functional MRI studies have also identified activation patterns in Broca&#39s area associated with various language tasks.</em>")'

                href="javascript:alert('Do some more AJAX with Brocas Area.  A link to the local expert.')"/>


<!--  TEST COMMENT -->
                <area   shape="polygon"
                        coords="97,181,128,181,130,192,116,205"
                        title="Frontal Lobe (Smell)"
                        alt="Frontal Lobe (Smell)"
                        onMouseOver='brain_lesson("<em> In mammals, the <u>main olfactory system</u> detects odorants that are inhaled through the nose, where they contact the main olfactory epithelium, which contains various olfactory receptors. These can distinguish a new odor from the background environmental odors and determine the concentration of the odor.  These olfactory receptors are connected to bipolar olfactory receptor neurons in the olfactory epithelium, which transduce receptoractivation into electrical signals in neurons. The signals travel along the olfactory nerve, which belongs to the peripheral nervous system. This nerve terminates in the olfactory bulb, which belongs to the central nervous system.  [edit] Central Axons from the olfactory sensory neurons converge in the olfactory bulb to form tangles called glomeruli (singular glomerulus). Inside the glomulerus, the axons contact the dendrites of mitral cells and several other types of cells. Mitral cells send their axons to a number of brain areas, including the anterior olfactory nuclues piriform cortex, the medial amygdala, and the entorhinal cortex.</em>")'

                href="javascript:alert('Do some more AJAX with The Frontal Lobe.  Perhaps get a list of patients from an HL7 Store who are undergoing treatment.')"/>


<!--  TEST COMMENT -->

                <area   shape="polygon"
                        coords="165,190,247,168,279,198,200,217"
                        title="Temporal Lobe.  Intellectual and emotional functions"
                        alt="Temporal Lobe.  Intellectual and emotional functions"
                        onMouseOver='brain_lesson("<em> <u>The temporal lobe</u> is a region of the cerebral cortex that is located beneath the Sylvian fissure on both the left and right hemispheres of the brain.  The temporal lobe is involved in auditory processing and is home to the primary auditory cortex. It is also important for the processing of semantics in both speech and vision. The temporal lobe contains the hippocampus and plays a key role in the formation of long-term memory.  The superior temporal gyrus includes an area (within the Sylvian fissure) where auditory signals from the cochlea (relayed via several subcortical nuclei) first reach the cerebral cortex. This part of the cortex (primary auditory cortex) is involved in hearing. Adjacent areas in the superior, posterior and lateral parts of the temporal lobes are involved in high-level auditory processing. In humans this includes speech, for which the left temporal lobe in particular seems to be specialized. The functions of the left temporal lobe are not limited to low-level perception but extend to comprehension, naming, verbal memory and other language functions. The underside (ventral) part of the temporal cortices appear to be involved in high-level visual processing of complex stimuli such as faces (fusiform gyrus) and scenes (parahippocampal gyrus). Anterior parts of this ventral stream for visual processing are involved in object perception and recognition.  The medial temporal lobes (near the Sagittal plane that divides left and right cerebral hemispheres) are thought to be involved in episodic/declarative memory. Deep inside the medial temporal lobes, the hippocampi seem to be particularly important for memory function - particularly transference from short to long term memory and control of spatial memory and behavior.</em>")'

                href="javascript:alert('Do some more AJAX with The Temporal Lobe.  Perhaps get a list of patients from an HL7 Store who are undergoing treatment.')"/>

                <area   shape="polygon"
                        coords="254,252,276,245,284,294,273,302"
                        title="Brain Stem. Swallowing, breathing, heartbeat, wakefulness, involuntary functions."
                        alt="Brain Stem. Swallowing, breathing, heartbeat, wakefulness, involuntary functions."
                        onMouseOver='brain_lesson("<em><u>The brainstem</u> (or brain stem) is the lower part of the brain, adjoining and structurally continuous with the spinal cord. The brain stem provides the main motor and sensory innervation to the face and neck via the cranial nerves. Though small, this is an extremely important part of the brain as the nerve connections of the motor and sensory systems from the main part of the brain to the rest of the body pass through the brain stem. This includes the corticospinal tract (motor), the posterior column-medial lemniscus pathway (fine touch, vibration sensation and proprioception) and the spinothalamic tract (pain, temperature, itch and crude touch). The brain stem also plays an important role in the regulation of cardiac and respiratory function. It also regulates the central nervous system, and is pivotal in maintaining consciousness and regulating the sleep cycle. Some taxonomies describe the brain stem as the medulla oblongata (myelencephalon) and pons (part of metencephalon), whereas others include the midbrain (mesencephalon).</em>  ")'

                href="javascript:alert('Do some more AJAX with The Brain Stem.  Perhaps get a list of patients from an HL7 Store who are undergoing treatment.')"/>


                <area   shape="polygon"
                        coords="285,235,319,273,295,294,284,289"
                        title="Cerebellum. Coordination"
                        alt="Cerebellum. Coordination"
                        onMouseOver='brain_lesson("<em> <u>The cerebellum</u> (Latin for little brain) is a region of the brain that plays an important role in the integration of sensory perception, coordination and motor control. In order to coordinate motor control, there are many neural pathways linking the cerebellum with the cerebral motor cortex (which sends information to the muscles causing them to move) and the spinocerebellar tract (which provides proprioceptive feedback on the position of the body in space). The cerebellum integrates these pathways, like a train conductor, using the constant feedback on body owning to fine-tune motor movements. Because of this updating function of the cerebellum, lesions within it are not so debilitating as to cause paralysis, but rather present as feedback deficits resulting in disorders in fine movement, equilibrium, posture, and motor learning. Initial observations by physiologists during the 18th century indicated that patients with cerebellar damage show problems with motor coordination and movement. Research into cerebellar function during the early to mid 19th century was done via lesion and ablation studies in animals. Research physiologists noted that such lesions led to animals with strange movements, awkward gait, and muscular weakness. These observations and studies led to the conclusion that the cerebellum was a motor control structure. However, modern research shows that the cerebellum has a broader role in a number of key cognitive functions, including attention and the processing of language, music, and other sensory temporal stimuli.</em>")'
                
href="javascript:alert('Do some more AJAX with The Cerebellum.  Perhaps get a list of patients from an HL7 Store who are undergoing treatment.')"/>


                <area   shape="polygon"
                        coords="273,159,272,175,283,183,290,176"
                        title="Wernickes Area"
                        alt="Wernickes Area"
                        onMouseOver='brain_lesson("<em> <u>Wernickes area</u> is one of the two parts of the cerebral cortex linked since the late nineteenth century to speech (the other is the Brocas area). It is traditionally considered to consist of the posterior section of the superior temporal gyrus in the dominant cerebral hemisphere (which is the left hemisphere in about 90% of people).  Neuroimaging suggests the functions earlier attributed to the Wernickes area occur more broadly in the temporal lobe and indeed happen also in the Brocas area.   There are some suggestions that middle and inferior temporal gyri and basal temporal cortex reflect lexical processing ... there is consensus that the STG from rostral to caudal fields and the STS constitute the neural tissue in which many of the critical computations for speech recognition are executed ... aspects of Brocas area (Brodmann areas 44 and 45) are also regularly implicated in speech processing.</em> ")'
                
href="javascript:alert('Do some more AJAX with Wernickes.  Perhaps get a list of patients from an HL7 Store who are undergoing treatment.')"/>

                <area   shape="polygon"
                        coords="107,318,130,361,245,370,225,305"
                        title="The power of speech."
                        alt="The power of speech"
                        onMouseOver='brain_lesson("<em><u>SPEECH.</u>  OK, I will make one.   <br>1.  I have a very real interest in the use of Information Technology in the support of the Life Sciences.  Alway have and always will do.  <br>2.  I have a very strong interest in AJAX, DOM and AJAXy type methods in the implementation of cross-platform, rich web applications.  <br>3.  I wear blue jeans to work.  BIG Plus.  That is worth $20,000 pa to me.  <br>4.  Location.  I live close to the city just south of the river.  I do not like commuting<br>5. Salary.  I figure a salary in the range of $65,000 - $85,000 sounds fair. Why so cheap?  I am interested in this type of work.  Other more traditional IT stuff costs more.  An initial 3 months to have a look at each other, if we agree on a yes - go ahead, a rise would be nice. The ability to salary sacrifice at all stages is a great bonus.  Figures are EXCLUDING superannuation as I have absolutely no faith in that form of legalised robbery.<br> <br>I am keen and I am sure I can engineer whatever you want for your system.  Thanks. </em>")' 
href="javascript:alert('Well, make me an offer!  I am not going to hang around forever!' )"/>

                </map>
            
            <p id="lesson">
            <!-- this id tag is the target for the javascript function brain_lesson.  the following text is replaced by the javascript
                 manipulating the contents of the DOM -->

                        <em>The <u>cerebrum</u> or telencephalon, together with the diencephalon, constitute the forebrain. It is the most anterior or, especially in humans, most superior region of the vertebrate central nervous system. Telencephalon refers to the embryonic structure, from which the mature cerebrum develops. The dorsal telencephalon, or pallium, develops into the cerebral cortex, and the ventral telencephalon, or subpallium, becomes the basal ganglia. The cerebrum is also divided into symmetric left and right cerebral hemispheres.</em>
            </p>

                </div>
                <!-- END of MAP TEXT -->
                </strong>
                <div align="justify">

                <p>
                eTraining, another up and coming promised paradigm shift in the way people in the Life Sciences access training information, curriculum, study aides etc. 
                </p>
                <p>
                This system is intended to be a working model to demonstrate the use of Javascript, Javascript frameworks (JQuery etc) and AJAX in developing a rich content applications for the field of training in Health, Bioinformatics and allied medical and scientific areas. This is important as is reported, the people who are likely to benifit fron the NBN are the people who are going to be limited with 12 Mbps as opposed to the "Super Fast" offering being rolled out in cities.  So remote eTraining has network bandwidth restrictions. 
                </p>
                <p>
    For example.  Apart from lectures being podcast or webcast for quite a long time without a $50 BILLION NBN, we are being led to believe that watching actual procedures remotely is the stuff of science fiction.  Here it is in use today.
                </p>
                <p>
                <iframe width="480" height="315" src="http://www.youtube.com/embed/HRki3UDYa08" frameborder="0" allowfullscreen></iframe>
                <p>
                The techniques described can be transported to other training systems.
                </p>
    </div>
</div>
<!-- END OF CONTENT LEFT DIV -->



<!-- START OF CONTENT RIGHT DIV -->

  <div id="contentright">
    
    <?php require_once("erhside.php"); ?>
    
    
    <p>
    To the left then, are a couple of small examples of potential types of training aide.  Training aides can take many different shapes and forms.  Computer based Open Learning is not new, and the concept that everyone is waiting around being spitefully un-educated until presented with a 100 Mbps network link.  The author of this site managed to struggle through a Master of Science degree without any internet connection at all.  A library card helped.  An enormous amount of educational options exist over the internet already from organizations like <a href="http://www.bioinformatics.org">Bioinformatics.org</a>.
    </p>
    <p>
    An example of a lecture from the author's on-going education spanning his traditional computer science into the hybrid into life science that has become bioinformatics.  Bioinformatics is talked about in this software prototype suite <a href="enimpl.php">elsewhere</a> however, as this is a training discussion page, click <a rel="shadowbox; height=540; width=680" href="http://mat.edu.bioinformatics.org/sample/">here</a> for an example.
    </p>
    <p>
    I hope this page has demonstrated what is available given CURRENT network topology.  This system was developed in Brisbane on a $1000 laptop using 100% FREE open source software.  The only thing that would cost in a development environment would be the time spent by the engineer/analyst.  The network link between my development machine, and the machine in the USA you are watching is around 1 Mbps.  Yep.  Not even ADSL 2+.  Twenty times slower than that. This whole application has a foot print of 2.5 MB (20 Mb) and so takes in between 20 and 40 seconds to install from Brisbane into the USA.  Is it worth $50 BILLION to make that about 8 seconds faster?  I'll leave it to you to consider.  I hope you enjoyed this page.  Thank you.  Addinall.
  </p>
  </div>
</div>
<?php require_once("efooter.php");  ?>
</body>
</html>
