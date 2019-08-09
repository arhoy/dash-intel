<?php include "includes/header0.php"; ?>

<title>Calculate function in Power BI Example | Dash-Intel</title>
<meta name="title" content= "Using Calculate function in Power Bi | Dash-Intel" />
<meta name="metatitle" content= "Applying Calculate in Power Bi | Dash-Intel" />
<meta name="description" content="Example of Calculate function in Power BI. Define the following measures to evaluate revenue from different sources.">

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
                <h4 class = custom_h4>Calculate Function:</h4><br>
                
                
            <h5>Example Formulas:</h5>
            <p>Write the following measures in the formula bar:</p>
            
         <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue from All_Regions = CALCULATE(
                              
                               SUM(TransactionData[Revenue]),
                               ALL(TransactionData[Region])
                               )
	        </pre>
           <pre class="brush:dax; title: ; notranslate" title="">
                     All_Ad_Revenue = CALCULATE(
                                
                                 SUM(TransactionData[Revenue]),
						         ALL(Advertising)
						         )    
	        </pre>
           <pre class="brush:dax; title: ; notranslate" title="">
                     Total Revenue = CALCULATE(
                                
                                 SUM(TransactionData[Revenue]),
						         ALL(TransactionData)
						         )    
	        </pre>
            
            
        <h5>Power BI Demo:</h5>
  
       <figure class = "custom_graph_figures">        
                <div class="video-container">
                  <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMWVkOWEwODQtMmVkMC00Mzk3LTlhODQtZTg1NTE2NzQyZmFlIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
               
                </figcaption>
       </figure> 
       <h5>Explanation:</h5>
          <ul>
              <li>The revenue column in green is effected by all filters as expected.</li>
              <li><em>Revenue from All_regions</em> overwrites only one of the slicers. That being the region slicer. Note it is still effected by the state slicer.</li>
              <li><em>All_Ad_Revenue</em> is overwrites all column slicers assoicated with the advertising table. Those being ad source and ad budget columns.</li>
              <li><em>Total Revenue</em> returns all the revenue regardless of the slicers applied.</li>
          </ul>
            <br>
           
       
    
          

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
