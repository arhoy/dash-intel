<?php include "includes/header0.php"; ?>

<title>Calculate function in Power BI Example | Dash-Intel</title>
<meta name="title" content= "Using Calculate function in Power Bi | Dash-Intel" />
<meta name="metatitle" content= "Applying Calculate in Power Bi | Dash-Intel" />
<meta name="description" content="Using the calculate function to evaluate percentages.">
   
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
                     % of Large Transactions By Ad Source = DIVIDE(
                     
	                CALCULATE(SUM(TransactionData[Revenue]),TransactionData[Revenue] > 10000),
	                CALCULATE(SUM(TransactionData[Revenue]),TransactionData[Revenue] > 10000, ALL(Advertising[Ad Source])),
	                0) 
	               </pre>
                
        <h5>Power BI Demo:</h5>
       <figure class = "custom_graph_figures">        
                <div class="video-container">
                  <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDljZTA1ZDItN2UwNS00MmFjLWIzN2QtNDU2ODlhYTljZDIyIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
       </figure> 
       
       <h5>Explanation:</h5>
       <p>
           Shows how to combine three important functions in DAX using one expression. This works because with the <em>ALL</em> function the denominator is not effected by the filter.
       </p>
       
       
    
          

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
