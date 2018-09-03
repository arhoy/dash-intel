<?php include "includes/header0.php"; ?>
  
<title>Example of Switch Function | Dash-Intel</title>
<meta name="title" content= "Switch Function for range of values  | Dash-Intel" />
<meta name="metatitle" content= "Switch function example for range of values | Dash-Intel"/>
<meta name="description" content= "Power BI switch function example. Use the switch function with a measure to evaluate a range of ROI values. See graph below.">
   
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
                <h4 class = custom_h4>Calculate Function:</h4><br>
                
                
            <h5>Example Formulas:</h5>
            <p>Write the following measures in the formula bar:</p>
            
             <pre class="brush:dax; title: ; notranslate" title="">
              ROI = DIVIDE(
                    SUM(TransactionData[Revenue])-SUM(TransactionData[Cost]),
                    SUM(TransactionData[Cost]),0)
	         </pre>
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
	 
        
            
        <h5>Power BI Demo:</h5>
  
       <figure class = "custom_graph_figures">        
                <div class="video-container">
                  <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNDViYmVmZGItZjQ3MS00ZmNjLWIyNzMtNmUxNGQ5MGU4YzIxIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
               
                </figcaption>
       </figure> 
       <h5>Explanation:</h5>
       <p>
           This sample report shows how the switch function works. By selecting a specific business type, a different ROI message will result based on the ROI over the last 4 months.
       </p>
   
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
