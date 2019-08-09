<?php include "includes/header0.php"; ?>
   
  <title>Power BI Maps | Dash-Intel</title>
<meta name="title" content= "Maps in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Maps in Power BI | Dash-Intel"/>
<meta name="description" content= "Maps in Power BI let you visualize your data from customers in different cities or countries. These maps allow for very specific latitude and longitude coordinates to see user data down to the postal code level.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Maps </h2>
                <h4 class = custom_h4>Geography Maps</h4>
                <h5>Basics:</h5>
                
                    <p>
                         Geography maps are a great top down summary visualization tool for your data if you have customers in several different cities or have customers from all around the globe. For geo maps you can zoom in and out to view city and/or country data. These maps even allow for very specific latitude and longitude coordinates. 
                     </p>

            <h5>Power BI Demo (geo map):</h5>

                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiYTNjMmIwNzktOTI2My00ODk3LWI1YmItYWE1YWY1OTRjYTBhIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Sales and ROI data map by country
                        </figcaption>
                      </figure>   

                    <h5>Features of a Geo Map:</h5>
                      <ul>
                          <li><em>Size:</em> Here size of circles is proportionate to revenue.</li>
                          <li><em>Color Saturation:</em> Color scale (greener is better) is proportionate to ROI</li>
                          <li><em>Tooltip:</em> Hover mouse over a specific circle to get more info for the at country.</li>
                          <li><em>Zoom:</em> Easily zoom in and out with the scroll of a mouse.</li>
                      </ul>

                      <br>
                
             
           <h5>Power BI Demo (filled map):</h5>
                 
                    <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiYTY4MjdlN2MtYjhmNS00Mzc1LTk2ZTctNWU4YmYxZGIyZjM5IiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-b: Filled Map in Power BI.
                        </figcaption>
                    </figure>   
                    <h5>Features of the Filled Map:</h5>
                    <ul>
                        <li>One dimension only. In this case sales revenue</li>
                        <li>Entire country is colored, rather than a cirlce.</li>
                        <li><em>Color Saturation:</em> In this case, greener is higher revenue.</li>
                        <li><em>Tooltip:</em> Hover mouse over a specific circle to get more info for the at country.</li>
                        <li><em>Zoom:</em> Easily zoom in and out with the scroll of a mouse.</li>
                    </ul>
                <br>
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
