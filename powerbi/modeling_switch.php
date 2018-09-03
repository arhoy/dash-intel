<?php include "includes/header0.php"; ?>

<title>The Switch Function | Dash-Intel</title>
<meta name="title" content= "Switch Function in Power BI  | Dash-Intel" />
<meta name="metatitle" content= "Using the Switch Function | Dash-Intel"/>
<meta name="description" content= "Power BI switch function can be used in place of multiple if and then statements. Use Switch for specific value or for a range of values.">
   
<?php include "includes/header.php"; ?>
<?php include "includes/css.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "includes/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
 
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
                <div class="whitebox">
                <h4 class = custom_h4> SWITCH Function</h4>
                <p>Evaluates an expression across a list of values. Returns different results depending on whether the expression matches the value.</p>
                <p>The SWITCH function can be used in place of writing multiple IF THEN statements.</p>
                </div>    
                
                <div class="smokebox">
                <h5>Using <em>SWITCH</em> for specific values</h5>
                  <p>
                      The SWITCH function makes it easy to write expressions with multiple IF THEN conditions. Rather than multiple nested IF statements, using SWITCH makes things easier and more readable. SWITCH is very similar to the
                      <a href="https://www.techonthenet.com/excel/formulas/case.php" target = "_blank"> CASE </a> statement used in VBA and many other languages. 
                 </p>
                 <p>Example: Transform product ids into product names</p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                     product_name = SWITCH(TransactionData[product_id],
                                            "Candy A", "KitKat",
                                            "Candy B", "JellyBelly",
                                            "Candy C", "Maynards"
                                            )
	            </pre> 				  
                 <p>We have some generic names such as "Candy A" under out Product ID column. (note you should not have these kind of names for you product ids!). In any case, we want to evaluate all of our rows which have the generic name "Candy A" and rename it to "KitKat". Similarly, if it is "Candy B" then "Jelly Belly" and if it is "Candy C" then "Maynards".
                 </p>
                </div>
                 
                 <div class="smokebox">
                <h5>Using <em>SWITCH</em> for a range of values</h5>
                 <p>You can also evaluate inequalities using the SWITCH function. For example, perhaps we want to have show different statements depending on the value of ROI. In POWER BI we write:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                      ROI Range = SWITCH(
                                    TRUE(), 
                                    AND([ROI]>=0, [ROI]&lt;=0.6), "Between 0% and 60%",
                                    AND([ROI]>0.60, [ROI]&lt;=0.7), "Between 60% and 70%",
                                    AND([ROI]>0.70, [ROI]&lt;=0.8), "Between 70% and 80%",
                                    AND([ROI]>0.80, [ROI]&lt;=0.9), "Between 80% and 90%",
                                    AND([ROI]>0.90, [ROI]&lt;=1.0), "Between 90% and 100%",
                                    "greater than 100%"
                                    )
	            </pre> 	
                
                
                 <ul>
                     <li>The returned result is the first value that is True.</li>
                     <li>ROI is a created <a href="modeling_measure+calculated+columns.php" target="_blank"><em>measure</em></a></li>
                 </ul>
                 
                 
                 <p>
                      We could use this to show projections. For instance, change ROI to week1 ROI. A <em>SWITCH</em> statement could then output different values base off week 1 ROI. 
                 </p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                      ROI Range = SWITCH(
                            TRUE(), 
                            AND([ROI Week 1]>=0, [ROI]&lt;=0.6),   "Projected ROI after 1 Month: Under 80%",
                            AND([ROI Week 1]>0.60, [ROI]&lt;=0.7), "Projected ROI after 1 Month: Between 80% and 95%",
                            AND([ROI Week 1]>0.70, [ROI]&lt;=0.8), "Projected ROI after 1 Month: Between 95% and 110%",
                            AND([ROI Week 1]>0.80, [ROI]&lt;=0.9), "Projected ROI after 1 Month: Between 100% and 130%",
                            AND([ROI Week 1]>0.90, [ROI]&lt;=1.0), "Projected ROI after 1 Month: Between 120% and 140%",
                                                                "Projected ROI after 1 Month: Between 125% and 160%"
                            )
	            </pre> 	
                
                <a href="modeling_switch_ex1.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a><br>
                <p> It is good practice to always specify a default value, if none of the conditions are true. In this case the default value <em>Projected ROI after 1 Month: Between 120% and 140%</em> is shown when ROI is above 100%.</p>
            </div>
                 
              <p>See also:
              <a href="https://youtu.be/5H4l5IdtAWM" target="_blank">Video on Switch Function</a>
               <p>Up Next: <a href="modeling_calendar.php">Making a Date Table.</a></p>
            
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
