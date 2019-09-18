<?php include "includes/header0.php"; ?>
  
<title>Sample function in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI SAMPLE | Dash-Intel" />
<meta name="metatitle" content= "SAMPLE in Power BI | Dash-Intel"/>
<meta name="description" content= "The SAMPLE function in power bi returns a table which is a random subset of another table.">
   
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
                <h4 class = custom_h4> Statistical Functions</h4><br>
                <h5><em>SAMPLE</em> function</h5>
                <p>Returns a table that is a random subset from another table.</p>
                
                 <h6>Example Formula:</h6>
                 <p>In POWER BI formula bar create a new table:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                    sample_table = SAMPLE(10,TransactionData,TransactionData[Revenue])
	            </pre>
	            
	            <p>This returns a sample of 10 rows from the TransactionData table.</p>
              
    

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
