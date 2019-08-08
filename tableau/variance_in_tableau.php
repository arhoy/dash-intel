<?php include "includes/header0.php"; ?>
  
<title>Variance | Tableau</title>
<meta name="title" content= "Variance in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Variance| Dash-Intel" />
<meta name="description" content="Variance summary in Tableau.">

   
   
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
          <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Variance </h2>
                
           <p>To find the variance for a measure in tableau, right click on the measure and select <em>variance</em>:</p>
         
                        <img src="tableau-images/Stats.PNG" alt="stats_calculations">
                 
                  
                      <p><strong>Note:</strong> The variance calculates the dispersion or spread of data. When data points are close together, the variance is low. When data points are more spread out, the standard deviation is high.
                      
                      
                       <p><strong>How does tableau calculate variance?</strong> Variance is the standard deviation squared. 
                        
                      
                      <p><strong>Note: </strong>For those with an Excel bacgkround, tableau uses Excel's VAR.S by default.</p>
                      <p><strong>Formula:</strong></p>
                       <div class="key_equation">
                        <equation class = "key_equation">$$ var = \frac{\sum_{i=1}^N (x_i - \overline{x})^2}{N-1}$$</equation>
                        </div>
        </div>               
        <?php include "includes/footer_0.php"; ?>
        
        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>

       </div>   

