<?php include "includes/header0.php"; ?>
  
<title>Next Function Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Next | Dash-Intel" />
<meta name="metatitle" content= "Next function in Power BI | Dash-Intel"/>
<meta name="description" content= "Next function in Power BI returns a single column of dates shifted forward by one day, month, quarter or year.">
   
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
                <h5><em>NEXT</em> functions</h5>
                <p>Returns a single column table of dates shifted forward by one day, month, quarter or year.</p>
                <h6>Example Formulas:</h6>
                <p>Find revenue for next day, month, quarter and year.</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                   NextDayRevenue = CALCULATE(SUM(TransactionData[Revenue]),NEXTDAY(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   NextMonthRevenue = CALCULATE(SUM(TransactionData[Revenue]),NEXTMONTH(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   NextQuarterRevenue = CALCULATE(SUM(TransactionData[Revenue]),NEXTQUARTER(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   NextYearRevenue = CALCULATE(SUM(TransactionData[Revenue]),NEXTYEAR(CalenderDate[Date]))
	            </pre><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiN2YwN2QxZDAtMTVhZC00YWFjLTg1MTAtM2M5MGIzNDNmOTBiIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
                <p>Tip create an additional column which compares the <a href="">relative percentage difference</a>.</p>
             
                
  
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
