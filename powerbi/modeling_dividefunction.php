<?php include "includes/header0.php"; ?>
  
<title>Divide Function in Power Bi | Dash-Intel</title>
<meta name="title" content= "Divide Function in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Using the divide function in Power BI | Dash-Intel" />
<meta name="description" content="The divide function eliminates the risk of zero division error. Create a new measure and state the numerator, denominator and alternate result.">
   
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
                <h4 class = custom_h4> Divide Function</h4>
                
                  <p>The divide function eliminates the risk for zero division error. The three arguments of the divide function are:</p>
                  <ul>
                      <li>numerator</li>
                      <li>denominator</li>
                      <li>alternate result</li>
                  </ul>
                  <p>
                      For example to find ROI:
                 </p>
                 
                     <div class = "dax_formula" lang="latex">
                       
                    </div>
                     <pre class="brush:dax; title: ; notranslate" title="">
                         ROI = DIVIDE(
                                 SUM(TransactionData[Total Profit]),
                                 SUM(TransactionData[Cost (total)]),0)            
	                </pre>
                     
                 <p> Note: this must be made as a new <a href="modeling_measure+calculated+columns.php">Measure</a> rather than a <em>calculated column.</em></p>
       
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
