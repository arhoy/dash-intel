<?php include "includes/header0.php"; ?>

<title>Calculate function in Power BI Example | Dash-Intel</title>
<meta name="title" content= "Using Calculate function in Power Bi | Dash-Intel" />
<meta name="metatitle" content= "Applying Calculate in Power Bi | Dash-Intel" />
<meta name="description" content="Example of Calculate function in Power BI. Define the following measure to evaluate transaction data.">

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
                <h4 class = custom_h4>Calculate Function:</h4><br>
                
                <h5>Example Formulas:</h5>
                <p>Write the following measures in the formula bar:</p>
                
                        <pre class="brush:dax; title: ; notranslate" title="">
            Large Transactions = CALCULATE(
                                     SUM(TransactionData[Revenue]),
	                                 TransactionData[Revenue] > 10000
	                            )
                </pre>
                <pre class="brush:dax; title: ; notranslate" title="">
                 Large Transactions &amp; Mid_Budget = CALCULATE(
                                                 SUM(TransactionData[Revenue]),
	                                             TransactionData[Revenue] > 10000, 
	                                             Advertising[Ad Budget] = "medium" 
	                                            )
	            </pre>
               <pre class="brush:dax; title: ; notranslate" title="">
                  Large Transactions &amp; mid_or_small Spend  = CALCULATE(
                                                     
                     SUM(TransactionData[Revenue]),
	                 TransactionData[Revenue] > 10000, 
	                 Advertising[Ad Budget] = "medium" || Advertising[Ad Budget] = "small"
	                 )
                 </pre>
                
                
                
                <h5>Power BI Demo:</h5>
                
  
       <figure class = "custom_graph_figures">        
                <div class="video-container">
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNDJjY2QwMzItMTliNi00ZTMwLTg5MjktMTliMzJmZTllN2Y1IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
               
                </figcaption>
       </figure> 
       
       <h5>Explanation:</h5>
       <p>
           Since there is a filter on ad budget from the CALCULATE function, the slicer on the report has no effect on the measure. The ad source slicer does change all three measures however, since there was no filter on the ad source column in CALCULATE.
       </p>
    
          

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
