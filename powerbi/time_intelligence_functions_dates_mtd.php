<?php include "includes/header0.php"; ?>

<title>Month to date in Power BI | Dash-Intel</title>
<meta name="title" content= "Month to date in Power BI| Dash-Intel" />
<meta name="metatitle" content= "Power BI month to date | Dash-Intel"/>
<meta name="description" content= "DATESMTD returns the month to date for an expression. Graphing this over a period of 12 month you can see a sawtooth graph as shown below.">

   
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
                <h5><em>DATESMTD, DATESQTD, DATESYTD</em> function</h5>
                <p>Returns a single column table of dates for month, quarter or year to date.</p>
                <h6>Example Formulas:</h6>
                <p>Use with <a href="">CALCULATE</a> to evaluate month-to-date, quarter-to-date and year-to-date revenue</p>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue_Month_to_Date = CALCULATE(SUM(TransactionData[Revenue]),DATESMTD(CalenderDate[Date]))
	            </pre>
                <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue_Quarter_to_Date = CALCULATE(SUM(TransactionData[Revenue]),DATESQTD(CalenderDate[Date]))
	            </pre>
                <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue_Year_to_Date = CALCULATE(SUM(TransactionData[Revenue]),DATESYTD(CalenderDate[Date]))
	            </pre>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                   
                    <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZTZlYjAwZDYtYTMzZC00NDk5LTllZDItNTcxODYzOTM3ZDU2IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                
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
			   
			   
			   
			   <h6>Related Functions and formulas:</h6>
            <ul>
                <li><a href="">TOTALMTD</a></li>
                <li><a href="">TOTALQTD</a></li>
                <li><a href="">TOTALYTD</a></li>
            </ul><br>
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
