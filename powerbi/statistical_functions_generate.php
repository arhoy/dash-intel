<?php include "includes/header0.php"; ?>
  
<title>Generate Function in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Generate Function | Dash-Intel" />
<meta name="metatitle" content= "Generate function in Power BI | Dash-Intel"/>
<meta name="description" content= "The generate function in power bi is used to return a table of cartesian products.">
   
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
                <h5><em>GENERATE</em> functions</h5>
                <p>Returns a table of Cartesian products</p>
         
                <h6>Syntax</h6>
                <div>
                    <p>GENERATE(table,table)</p>
                </div>
                
                <h6>Example Formula:</h6>
              <p>In the Power BI formula bar write:</p>
               <pre class="brush:dax; title: ; notranslate" title="">
                  
                generate_all = GENERATE(BusinessTable,AdTable)   
	            </pre><br>
              
               <h6>Power BI Demo:</h6>
               <p>Using Generate on the AdTable and BusinessTable</p>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
               <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZmM3OTVmYjctNDk0MC00ZGYzLWE4YzctYmYzNTRhNmJjYWMzIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
                </div>
                <figcaption class = "custom_figcaption">
                </figcaption>
               </figure>
               <p>The demo shows generate returning a table with both all rows from the Ad Source table and all rows from the Business Type table. </p>
               
            
                
  


            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
