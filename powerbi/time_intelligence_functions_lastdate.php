<?php include "includes/header0.php"; ?>
   
<title>Last Date Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI LastDate | Dash-Intel" />
<meta name="metatitle" content= "LastDate in Power BI | Dash-Intel"/>
<meta name="description" content= "LastDate function in Power BI returns the last date in the given context.">

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
<?php include "../includes/header/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
      
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
                <h4 class = custom_h4> Time Intelligence Functions</h4><br>
                <h5><em>LASTDATE</em> functions</h5>
                <p>Returns the last date in the given context.</p>
                <h6>Formulas:</h6>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   LastDate_Calendar = FIRSTDATE(CalenderDate[Date])
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   LastDateNonBlank = CALCULATE(SUM(TransactionData[Revenue]),
                                      LASTNONBLANK(CalenderDate[Date],SUM(TransactionData[Revenue])))
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   
	            </pre><br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNjY1OGE0YjctYzM4MC00MmZjLWI0ZGUtNTk5ZDY1Yjg0MGEyIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
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
               <p>Shows how <em>LASTDATE</em> works in different contexts. Useful when you want to calculate a <a href="">Running Total</a> or need to get the last date in a database automatically.</p>
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
