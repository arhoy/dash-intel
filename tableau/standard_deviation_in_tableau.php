<?php include "../includes/header/header0.php"; ?>
  
<title>Standard Deviation | Tableau</title>
<meta name="title" content= "Standard Deviation in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Standard Deviation| Dash-Intel" />
<meta name="description" content="Standard Deviation summary in Tableau.">

   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<body>

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
         <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Standard Deviation </h2>
                
   <p>To find the standard deviation for a measure in tableau, right click on the measure and select <em>standard deviation</em>:</p>
         
                        <img src="tableau-images/Stats.PNG" alt="stats_calculations">
            
                  
                      <p><strong>Note:</strong> The standard deviation calculates the dispersion or spread of data. When data points are close together, the standard deviation is low. When data points are more spread out, the standard deviation is high.
                      
                      
                       <p><strong>How does tableau calculate standard deviation?</strong> By default tableau uses the formula for the standard deviation a sample size. This is often called the <em>sample standard deviation</em> for short and is an unbiased estimate for the population standard deviation.</p>
                      
                      <p><strong>Note: </strong>For those with an Excel bacgkround, tableau uses Excel's STDEV.S by default.</p>
                      <p><strong>Formula:</strong></p>
                       <div class="key_equation">
                        <equation class = "key_equation">$$ s = \sqrt{\frac{\sum_{i=1}^N (x_i - \overline{x})^2}{N-1} }$$</equation>
                        </div>
                        <p><strong>Relationship between the variance and standard deviation: </strong>Standard deviation is the square root of variance.</p>
        </div>
       
        
        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>

       </div>   

