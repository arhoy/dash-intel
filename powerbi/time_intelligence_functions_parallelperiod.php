<?php include "includes/header0.php"; ?>
  
<title>PARALLELPERIOD Power BI | Dash-Intel</title>
<meta name="title" content= "PARALLELPERIOD function in power bi | Dash-Intel" />
<meta name="metatitle" content= "parallel period Power BI | Dash-Intel"/>
<meta name="description" content= "Parallel period function returns a single column table of dates shifted forward by one day, month, quarter or year.">
   
   
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
                <h4 class = custom_h4> Time Intelligence Functions</h4><br>
                <h5><em>PARALLELPERIOD</em> function</h5>
                <p>Returns a single column table of dates that are shifted (offset) by a specified time period either forward or backward in time.</p>
                <h6>Example Formulas:</h6>
                <p>Use with <a href="">CALCULATE</a> to return revenue from two months ago and revenue next month in the current context.
                </p>
                <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue_Two_Months_Ago = CALCULATE(SUM(TransactionData[Revenue]),PARALLELPERIOD(CalenderDate[Date],-2,MONTH))
	            </pre>
                 <pre class="brush:dax; title: ; notranslate" title="">
                  Revenue_Next_Month = CALCULATE(SUM(TransactionData[Revenue]),PARALLELPERIOD(CalenderDate[Date],1,MONTH))
	            </pre><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
             <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZjc0NTM3ZmQtY2ZiZC00OGU3LWE4MzItYTIxZGFiOTFlNDI3IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
               
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure><br>
               
              <h6>How to Make:</h6>
               <ul>
                   <li>In Power BI Desktop create a new measure using the formulas above.</li>
                   <li>Under visualizations select table</li>
                   <li>Select or Add in the date column (i.e CalenderDate[Date]) from the <a href="modeling_calendar.php">calendar date table</a>.</li>
                   <li>Select or Add in the new measures to the values section</li>
               </ul><br>
               <h6>Additional Comments:</h6>
               <p>
                   <em>PARALLELPERIOD</em> always returns full periods at the given level of granularity. It only works on YEAR, QUARTER and MONTH level.
               </p>
               <h6>Related Formulas or Functions:</h6>
               <ul>
                   <li><a href="">DATEADD</a></li>
               </ul>
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
