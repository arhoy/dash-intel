<?php include "includes/header0.php"; ?>
  
<title>Dates in Period in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Dates in Period | Dash-Intel" />
<meta name="metatitle" content= "Dates in Period | Dash-Intel"/>
<meta name="description" content= "Dates in period returns a single column of dates specified by a start date, an offset and a time interval for he offset. DATESINPERIOD lets you create dynamic reports such as getting revenue from the last full week.">
   
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
                <h4 class = custom_h4> Time Intelligence Functions</h4><br>
                <h5><em>DATESINPERIOD</em> function</h5>
                <p>Returns a single column table of dates specified by a start date, an offset, and the time interval for the offset.</p>
                <h6>Example Formulas:</h6>
                <p>Use with <a href="">CALCULATE</a> to return revenue from the previous 7 Days.</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue Last Full Week = CALCULATE(SUM(TransactionData[Revenue]),
                   DATESINPERIOD(CalenderDate[Date],FIRSTDATE(CalenderDate[Date])-7,7,DAY))
	            </pre><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNWE0MDhjNDUtODJiNC00ODRhLTk2NmQtMDJhYjcwMzQyNTg2IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
               <p><em>Revenue Last Full Week</em> returns the last 7 days of revenue. For example on Jan 8th, it returns the sum of revenue from Jan 1st to Jan 7th. On Jan 9th, it returns the sum of revenue from Jan 2nd to January 8th and so on.</p>
               <p>It does not return anything on January 1st 2016, since there is no data from Dec 25th 2015 to Dec 31st 2015.</p><br>
               
            <h6>Related Functions and formulas:</h6>
            <ul>
                <li><a href="">Last 30 Days Revenue</a></li>
            </ul><br>
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
