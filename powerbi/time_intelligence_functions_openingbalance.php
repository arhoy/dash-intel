<?php include "includes/header0.php"; ?>
  
<title>Opening Balance in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Opening Balance | Dash-Intel" />
<meta name="metatitle" content= "Using the confidence function in Power BI | Dash-Intel"/>
<meta name="description" content= "Opening balance is a time intelligence function in power bi which returns the first record for the given period.">
   
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
                <h5><em>OPENINGBALANCE</em> functions</h5>
                <p>Returns the last date for the given month, quarter or year.</p>
                <h6>Formulas:</h6>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                   openingBalanceMonth = OPENINGBALANCEMONTH(SUM(TransactionData[Revenue]),CalenderDate[Date])
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   openingBalanceQuarter = OPENINGBALANCEQUARTER(SUM(TransactionData[Revenue]),CalenderDate[Date])
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                   openingBalanceYear = OPENINGBALANCEYEAR(SUM(TransactionData[Revenue]),CalenderDate[Date])
	            </pre>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiYjJhNmI4NDItNWZkMS00NDJhLWI0ZmEtNzM3Y2JkOWU4NjNjIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
                <p>Opening balance month for February displays the last day of revenue in January.</p>

                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
