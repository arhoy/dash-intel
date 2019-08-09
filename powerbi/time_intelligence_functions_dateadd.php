<?php include "includes/header0.php"; ?>
  
<title>Date Add in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Date Add | Dash-Intel" />
<meta name="metatitle" content= "Date Add in Power BI | Dash-Intel"/>
<meta name="description" content= "DATEADD function is a powerful time intelligence function that lets you offset a time period so you can compare previous periods.">
   
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
                <h5><em>DATEADD</em> function</h5>
                <p>
                    <em>DATEADD</em> is a flexible and powerful DAX function. DATEADD takes in a date columnm, the offset, and the time interval for the offest. The offset is the number of intervals to go forward or back in time.
                </p>
                <h6>Example Formulas:</h6>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   Rev Previous_Month = CALCULATE(SUM(TransactionData[Revenue]),DATEADD(CalenderDate[Date],-1,MONTH))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                Rev Previous_Quarter = CALCULATE(SUM(TransactionData[Revenue]),DATEADD(CalenderDate[Date],-1,QUARTER))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   Rev Previous_Year = CALCULATE(SUM(TransactionData[Revenue]),DATEADD(CalenderDate[Date],-1,YEAR))
	            </pre><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMzg1ZjgxYzYtZDU0NS00ZGUxLTg4ZGYtYjdhNGJmYmI1YmJiIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
               <p>This is useful to compare how sales between differ between different months or quarters. You can add in an extra column to compare the relative percentage differences.</p>
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
