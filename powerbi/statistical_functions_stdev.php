<?php include "includes/header0.php"; ?>
  
<title>Standard Deviation in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Standard Deviation | Dash-Intel" />
<meta name="metatitle" content= "Using standard deviation function in Power BI | Dash-Intel"/>
<meta name="description" content= "Standard deviation functions in power bi calculate the dispersion of data points. STDEVX.S calculates the standard deviation of an expression evaluated over a table">
   
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
<?php include "includes/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
      
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
                <h4 class = custom_h4> Statistical Functions</h4>
                <h5><em>Standard Deviation</em> functions</h5>
                <p>Standard deviation is used to measure the amount of spread or dispersion in a data set. 
                There are two types: <em>population standard deviation</em> and <em>sample standard deviation</em>. The population standard deviation is a fixed value (i.e specific number) that can be calculated when the entire population of the data you are interested in is available. The sample standard deviation is needed when you only have a sample of data from a specific population. For example, if you want to predict how people will vote in the next national election, you need to use the sample standard deviation (as you will not be able collect info on every single voter).
                </p>
                <p>This demo illustrates the different standard deviation functions you can write in Power BI. On how to summarize data quickly see <a href="modeling_summarizing.php" target="_blank">summarizing data in Power BI.</a></p>
                
                <p>There are four types of standard deviation functions:</p>
                <ul>
                    <li>STDEV.P(column)</li>
                    <li>STDEV.S(column)</li>
                    <li>STDEVX.P(table,expression)</li>
                    <li>STDEVX.S(table,expression)</li>
                </ul>
                
                
            <h5>STDEV.P</h5>
             <p>Function returns population standard deviation for values in a column.</p>
             <h6>Example Formula in Power BI</h6>
                <pre class="brush:dax; title: ; notranslate" title="">
                  stDev_pop = STDEV.P(TransactionData[Revenue])
	           </pre>
            <h5>STDEV.S</h5>
            <p>Function returns sample standard deviation for values in a column.</p>
             <h6>Example Formula in Power BI</h6>
               <pre class="brush:dax; title: ; notranslate" title="">
                 stDev_sample = STDEV.S(TransactionData[Revenue])
	            </pre>
               
             <h5>STDEVX.P</h5>
             <p>Function returns population standard deviation for an expression evaluated row by row over table.</p>
             <h6>Example Formula in Power BI</h6>
                <pre class="brush:dax; title: ; notranslate" title="">
                 stDevX_pop = STDEVX.P(TransactionData,TransactionData[Revenue]-TransactionData[Cost])
	            </pre>
             <h5>STDEVX.S</h5>
             <p>Function returns sample standard deviation for an expression evaluated row by row over table.</p>
             <h6>Example Formula in Power BI</h6>
                <pre class="brush:dax; title: ; notranslate" title="">
                 stDevX_sample = STDEVX.S(TransactionData,TransactionData[Revenue]-TransactionData[Cost]) 
	            </pre>
              
              <h5>Example:</h5>
              <p>Calculate the sample standard deviation of daily sales for each month:</p>
              <h5>Answer:</h5>
              <p>Define the following measure in Power BI:</p>
                <pre class="brush:dax; title: ; notranslate" title="">
                 STDEV of Sales = STDEVX.S(CalenderDate,CALCULATE(SUM(TransactionData[Revenue])))
	            </pre>
	            <p>Afterward select as values the  <em>date column</em> in your <a href="modeling_calendar.php" target="_blank">calendar date</a> table and the measure create above. Remove the day field in the <em>Values</em> section so it only contains year, quarter and month.</p>
	            <div class="image-container">
	                <img src="images/stdev1.PNG" alt="standard deviation of sales">
	            </div>
	           
              
               
            
               
            
            
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
