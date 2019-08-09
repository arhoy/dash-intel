<?php include "includes/header0.php"; ?>
  
<title>Median Function in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Median Function | Dash-Intel" />
<meta name="metatitle" content= "Using the median function in Power BI | Dash-Intel"/>
<meta name="description" content= "The median is the 50th percentile or middle value. Power BI has a median and medianx function to easily compute the median of a column or expression.">
   
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
               <div class="whitebox">
                <h4 class = custom_h4> Statistical Functions</h4>
                <h5><em>Median</em> functions</h5>
                <p>The median is the middle value or the 50th percentile of a data set. To quickly calculate the median in Power BI without DAX formulas refer to <a href="modeling_summarizing.php">this section</a> on summarizing data.
                </p> 
                <p>There are two types of median functions</p>
                <ul>
                    <li>MEDIAN(column)</li>
                    <li>MEDIANX(table,expression)</li>
                </ul>
                 </div>
                 
                <div class="smokebox">
                <h5>MEDIAN</h5>
                <h6>Example Formula:</h6>
                <p>Find the median revenue of sales:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                  median_revenue = MEDIAN(TransactionData[Revenue])
	            </pre>
	            
	            <h5>MEDIANX</h5>
	            <p>Use when you want to find the median of an expression</p>
	            <h6>Example 1:</h6>
	            <p>Find the median for the profit:</p>
	              <pre class="brush:dax; title: ; notranslate" title="">
                median_x = MEDIANX(TransactionData,TransactionData[Revenue]-TransactionData[Cost])
	            </pre><br>
                 
                <h6>Example 2:</h6> 
	           <p>Find the median for profit given that the profit is less than $100.</p>
	           <pre class="brush:dax; title: ; notranslate" title="">
                 median_profit | profit &lt; 100 = MEDIANX(
                         FILTER(TransactionData,(TransactionData[Revenue] -TransactionData[Cost])&lt;100),
                         TransactionData[Revenue]-TransactionData[Cost])
	           </pre>
               <div>
	               <ul>
	                   <li>A filter function is used to return a temporary table that contains only profit values under $100</li>
	                   <li>The last row is the <em>expression</em> that gets returned.</li>
	               </ul>
	           </div>
	        </div>
            
	            <h6>Power BI Demo:</h6>
	            <p>The functions used above are plotted in Power BI to compare</p>
	             <figure class = "custom_graph_figures">        
                <div class="video-container">
           
              <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiODBlZjc2YTAtZmQ0Ny00MzU3LWI2NGYtYmVmNTZiMzg5ODg1IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure>
               

        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
