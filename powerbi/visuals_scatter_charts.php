<?php include "includes/header0.php"; ?>
  
  <title>Power BI Scatter Plots| Dash-Intel</title>
<meta name="title" content= "Power BI Scatter Plots| Dash-Intel" />
<meta name="metatitle" content= "Scatter Plots in Power BI | Dash-Intel"/>
<meta name="description" content= "Scatter plots in Power BI let you visualize how to variables are linearly related.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Scatter Plots </h2>
                <h5 class = custom_h4> The Basics:</h5>
                
                    <p>
                         Scatter plots (aka scatter graphs, or scatter diagrams) is a graph that plots two variables to see how they are related. The relationship between these two variables can be linear (ie. y = mx + b) or non linear (ie. y = x^2).
                     </p>
                
             
                <h5 class = custom_h4>Power BI Demo:</h5>
                
                   <p>
                          Below are some examples of scatter plots using POWER BI. The graphs are interactive and you can slice the data by team or player position. Scrolling over the data points will give you information about the player such as salary, goals, assists, points, and earnings per point. We can see that there is a a fairly weak relationship between goals scored and salary. There is also a color saturation applied on the points scored (higher points, darker color). You can expand the graph below at the bottom.
                   </p>
                 
                    <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMzA0NTFiN2EtMDgwOC00NjI2LWE5YWYtNzdiMzllNGZhMjliIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true">
                            </iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Scatter plot: Goals scored vs Player Salary. Visual filter for team and position.
                        </figcaption>
                    </figure>   
                <div class = "features_class">
                <h5>Features:</h5>
                <ul>
                    <li>Plots goals scored vs salary for each player</li>
                    <li>Includes a slicer for teams and position</li>
                    <li>Includes a color saturation based on points</li>
                </ul>
                </div>

                   <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDE0NjNhNmItMWE5ZC00OGE1LWE2NGUtODk4NmQwYTMyNmE3IiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true">
                            </iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-b: Earnings per point. This gives us an idea of the most overpaid players of the 2015/2016 NHL season
                        </figcaption>
                    </figure>   
                    
                <h5>Features:</h5>
                <ul>
                    <li>Includes a newly defined <a href="modeling_measure+calculated+columns.php">measure</a> which is $/point</li>
                    <li>Lets you spot visible <a href="">outliers</a> in the data</li>
                </ul>
                
                
                <h5>Additional comments:</h5>
                       <p>
                            Scrolling over the highest data point, we can see that Tuomo Ruutu got paid $5MM per point in his 2015/2016 NHL season! The above scatter plots only shows data for players who had at least one point.
                       </p>   
                       <p>
                        <a href="files/nhl 2015 2016 data.csv">Download the data set</a>
                       </p>
                       <br>
                    
            
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
