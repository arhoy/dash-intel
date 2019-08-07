<?php include "includes/header0.php"; ?>
  
<title>DATESBETWEEN Power BI | Dash-Intel</title>
<meta name="title" content= "DATESBETWEEN function power bi | Dash-Intel" />
<meta name="metatitle" content= "Dates between in Power BI | Dash-Intel"/>
<meta name="description" content= "Datesbetween function is used to evaluate an expression between two dates.">
   
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
                <h5><em>DATESBETWEEN</em> function</h5>
                <p>Use with <a href="">CALCULATE</a> to evaluate an expression between a fixed or dynamic date range.</p>
                <h6>Example Formulas:</h6>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   Static_Dates_Between = CALCULATE(SUM(TransactionData[Revenue]),
                   DATESBETWEEN(CalenderDate[Date],DATE(2016,01,01),DATE(2017,12,31)))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   Dynamic_Last_Dates = CALCULATE(SUM(TransactionData[Revenue]),
                   DATESBETWEEN(CalenderDate[Date],DATE(2016,01,01),LASTDATE(CalenderDate[Date])))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   All_Revenue = CALCULATE(SUM(TransactionData[Revenue]),ALL(CalenderDate))
	            </pre>
               <p class = "alert alert-danger" role = "alert">
                <strong>Warning:</strong> Power BI could crash if you use two dynamic date ranges in a table with the <em>DATESBETWEEN</em> function. 
               </p><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMGM0NzhlNGQtMDljZS00MzhiLTg3NDUtZGI1MzFlZjQxNzlkIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure> <br>
               
                      <h6>How to Make:</h6>
               <ul>
                   <li>In Power BI Desktop create a new measure using the formulas above.</li>
                   <li>Under visualizations select table</li>
                   <li>Select or Add in the date column (i.e CalenderDate[Date]) from the <a href="modeling_calendar.php">calendar date table</a>.</li>
                   <li>Select or Add in the new measures to the values section</li>
               </ul><br>
               
                <h6>Additional Comments:</h6>
               <p>
                   Using fixed dates as shown in the <em>Static_Dates_Between</em> formula will give you the same value for all the rows. (it is the same value in any context). However, <em>Dynamic_Last_Dates</em> changes with respect to the rows in the table. Essentially a <a href="">Running Total</a> is created.
                </p>
                
               <p>
               To return all revenue dynamically, use the <a href="">ALL</a> function around the calendar table as shown in the <em>All_Revenue</em> formula.</p>
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
