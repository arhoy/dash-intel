<?php include "includes/header0.php"; ?>
   
<title>Exponential Distribution Function in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Exponential Distribution | Dash-Intel" />
<meta name="metatitle" content= "Exponential distribution in Power BI | Dash-Intel"/>
<meta name="The exponential distribution is used to model the time between events (ex. how much longer you need to wait for the event to occur).">


<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include_once("../includes/utils/analyticstracking.php") ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "../includes/header/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
      
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
                <h4 class = custom_h4> Statistical Functions</h4><br>
                <h5><em>EXPON.DIST</em> function</h5>
                
                <h6>Definition:</h6>
                <p>
                    An exponential distibution is used to model the time between events occuring or the wait time for an event. It assumes that events are independent of each other. It also has a key property of being memoryless.
                    Some applications include time until an electronic component breaks, or waiting time until the next phone call at a customer service center.
                </p>
                
                <h6>Syntax:</h6>
                <div class="latex">
                    ${EXPON.DIST(x, \lambda ,cumulative)}$  
                    
                </div><br>
                <p>Where ${\lambda}$ is the rate, related to ${1 \over mean}$. <br> 
                If cummulative is set to True, the the cummulative distribution function is returned. The formula for this is:
                ${1 -  e^{-x \lambda}}$
                
                </p>
                <p>
                If cummuulative is set to False, the probability density function is returned. The formula for this is :
                ${\lambda e^{-x \lambda}}$
                </p>
                <h6>Example Formulas:</h6>
               <p>In the Power BI formula bar define the following measures:</p>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   prob density = EXPON.DIST(1,2,false)
	            </pre>
	            <p>
	                This returns the following formula:
	            </p>
              
               <pre class="brush:dax; title: ; notranslate" title="">
                  cummulative distribution = EXPON.DIST(1,2,True)
            
	            </pre><br>
	       <h6>Example:</h6>
            <p>
                The lifetime of a lightbulb follows a exponential distribution with a mean value of 0.5 years. Find the probability that the light bulb dies in the first year:
            </p>     
            <h6>Answer:</h6>
            <div class="latex">     
            
            ${\lambda  =  {1 \over 0.5} =  {2} }$ <br>
            ${x = 1 }$ <br>
            To find the probability of dying within the first year, use the cummulative formula in Power BI. <br>
            This should return  ${1 -  e^{(-1)(2)} = 0.86}$ <br>
            There is an 86% chance the light bulb will die within the first year.
            
            </div>     
            
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
