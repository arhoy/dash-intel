<?php include "includes/header0.php"; ?>

<title>Previous Function Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Previous Function | Dash-Intel" />
<meta name="metatitle" content= "Previous function in Power BI | Dash-Intel"/>
<meta name="description" content= "Previous function in Power BI returns a single column of dates shifted backward by one day, month, quarter or year.">

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
                <h5><em>PREVIOUS</em> functions</h5>
                <p>Returns a single column tables of dates shifted back by one day</p>
                <h6>Example Formulas:</h6>
                <p>Return the previous day, month, quarter and year revenue</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                   PreviousDayRevenue = CALCULATE(SUM(TransactionData[Revenue]),PREVIOUSDAY(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   PreviousDayRevenue = CALCULATE(SUM(TransactionData[Revenue]),PREVIOUSDAY(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   PreviousQuarterRevenue = CALCULATE(SUM(TransactionData[Revenue]),PREVIOUSQUARTER(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   PreviousYearRevenue = CALCULATE(SUM(TransactionData[Revenue]),PREVIOUSYEAR(CalenderDate[Date]))
	            </pre>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                
                 <iframe 
                 width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiODU2Yjk0NDctNGI3Ni00ZmUxLTkxMmMtYzgwOTAzOTY4NDM0IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true">
                 </iframe>
                  
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
               <p>Shows <em>PREVIOUS</em> function in different contexts</p>
               <h6>Related Functions and formulas:</h6>
               <ul>
                   <li><a href="">NEXT</a></li>
               </ul>
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   
        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
