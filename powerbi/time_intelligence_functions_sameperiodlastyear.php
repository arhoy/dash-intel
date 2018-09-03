<?php include "includes/header0.php"; ?>
  
<title>Same Period Last Year Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Same period last year | Dash-Intel" />
<meta name="metatitle" content= "SAMEPERIODLASTYEAR function in Power BI | Dash-Intel"/>
<meta name="description" content= "SAMEPERIODLASTYEAR function in Power BI returns a single column of dates shifted back to the previous year. Use to compare data from the previous year.">
   
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
                <h5><em>SAMEPERIODLASTYEAR</em> function</h5>
                <p>Returns a single column table of dates shifted back one year.</p>
                <h6>Example Formula:</h6>
                <p>Find revenue for last year.</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                   SamePeriodLastYear_revenue = CALCULATE(SUM(TransactionData[Revenue]),SAMEPERIODLASTYEAR(CalenderDate[Date]))
	            </pre><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiM2E1ZjE1ZDUtZTFhZi00MzJlLTliOTgtMDE5YWY5Y2MzZDI2IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
                <p>This does the exact same thing as <em>DATEADD((CalenderDate[Date]),-1, YEAR)</em></p>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
