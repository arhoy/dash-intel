<?php include "includes/header0.php"; ?>
  
<title>End of Month Power BI | Dash-Intel</title>
<meta name="title" content= "End of Month | Dash-Intel" />
<meta name="metatitle" content= "End of month | Dash-Intel"/>
<meta name="description" content= "End of month function in power bi returns the last day of the month, quarter or year.">
   
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
                <h5><em>ENDOF</em> functions</h5>
                <p>Returns the last day of the month, quarter or year. </p>
                <h6>Example Formulas:</h6>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   EndOf_Month = CALCULATE(SUM(TransactionData[Revenue]),ENDOFMONTH(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   EndOf_Quarter = CALCULATE(SUM(TransactionData[Revenue]),ENDOFQUARTER(CalenderDate[Date]))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   EndOf_Year = CALCULATE(SUM(TransactionData[Revenue]),ENDOFYEAR(CalenderDate[Date]))
	            </pre>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
               <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZGNiN2EzZjktMzg0ZS00MGFkLTgxN2EtZjY4MDczNzYyNTUxIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
                   Useful for an <a href="">account balance</a>. Returns the last day of revenue in the current context. 
               </p>
               <p>
                   If there is no data for a particular date, it will return blank instead of the last value. For instance, the second row in <em>EndOfMonth</em> is blank because there is no data for Feb 29th 2016 in this data set.
               </p>
               
                <h6>Related Functions and formulas:</h6>
            <ul>
                <li><a href=""></a></li>
            </ul><br>
                
  
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
