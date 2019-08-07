<?php include "includes/header0.php"; ?>
  
<title>Closing Balance in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Closing Balance | Dash-Intel" />
<meta name="metatitle" content= "Using the confidence function in Power BI | Dash-Intel"/>
<meta name="description" content= "Closing balance is a time intelligence function in power bi which returns the last record for the given period.">
   
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
                <h5><em>Closing Balance</em> functions</h5><br>
                
                <p>Useful for an <a href="">account balance</a>. Will get the last record for the given month, quarter or year depending on the function used.</p>
                <p>At least two paramters: An expression and a date column.</p>
                <h6>Example Formulas:</h6>
                
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                  
                  closingBalanceMonth = CLOSINGBALANCEMONTH(SUM(TransactionData[Revenue]),CalenderDate[Date])
                   
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                  
                  closingBalanceQuarter = CLOSINGBALANCEQUARTER(SUM(TransactionData[Revenue]),CalenderDate[Date])
                   
	            </pre>
               
                <pre class="brush:dax; title: ; notranslate" title="">
                  
                  closingBalanceYear = CLOSINGBALANCEYEAR(SUM(TransactionData[Revenue]),CalenderDate[Date])
                   
	            </pre>
               <br>
                <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiOGVkNTMyNjEtNjFkYi00M2UwLTg4OTktOTYxZTA3YmNjODM3IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
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
               <p>Note: If the last date, the closing balance date, has no values for the expression used, it will return blank. For example closing balance month is empty in February since there was no revenue data for Feb 29th 2016 in this sample data.
               </p><br>
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
