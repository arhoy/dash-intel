<?php include "includes/header0.php"; ?>
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI vs Tableau: </h2>
               <h4 class = "section_gauges">Comparing Categories</h4><br>
                    <p>
                     One of the ways <a href="https://www.tableau.com/compare-tableau-power-bi" target="_blank">Tableau claims</a> Power BI falls short is saying you cannot compare several categories. The picture they give shows a table with rows and columns (a matrix). While those data bars within a table cannot currently be created in Power BI, conditional formating can still be used if needed to obtain a similar effect.
                    </p>
                <h5>Power BI Demo: (several categories)</h5>
        
        <figure class = "custom_graph_figures">        
            <div class="video-container">
           <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMDg0MTdiOTMtMTRiMC00M2VkLWEzYzYtM2UyZmI0ZmE3NmJkIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
            <figcaption class = "custom_figcaption">

            </figcaption>
        </figure>  
        <p>This report compares several categories in this simplified dataset. In compares revenue across business type, product type and product id. Further, slicers in the report can be used to dynamically update the map and table based on what is selected. This allows for a dynamic comparison across multiple categories (including state). The zoomable map also has the popover (aka tooltip feature) which shows revenue, ROI and costs for each data point. Note, circle size illustrates revenue, color saturation indicates ROI. </p><br>

        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
