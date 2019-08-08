<?php include "includes/header0.php"; ?>
  
<title>Finding the Daily Average | Dash-Intel</title>
<meta name="title" content= "Example on Daily Average in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Daily Average in Power BI | Dash-Intel"/>
<meta name="description" content= "Example of how to find the daily average in Power BI using a calendar date and time intelligence functions.">
   
   
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
                <h4 class = custom_h4> Statistical Functions in Power BI</h4><br>
                <h5>Example Report Finding Daily Average</h5>
                
  
       <figure class = "custom_graph_figures">        
                <div class="video-container">
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZGQ2Nzc2MjYtYTc5NS00NzlkLWFiM2QtOWNjMzdjZTVmMGNhIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
                  Report summarizes the statistical functions and formulas used:
                </figcaption>
       </figure> 
                  <ul>
                      <li><em>AVERAGEX</em> to help compute daily average</li>
                      <li><em>MINX</em> to find smallest value in date range</li>
                      <li><em>MINX</em> to find largest value in date range</li>
                      <li><em>STDEVX.S</em> to find the sample standard deviation</li>
                  </ul>
                  
                  <p>
                      In the top graph, all the metrics are reported based on each month. For instance in Jan 2016, revenue was about $4M, with daily average sales of $130k. The smallest day in sales for that month was $57,455 which also happened to be the smallest sales day of the year. On the graph to the right, we have a daily avg report where it is possible to drill up or down to view the daily average by day, month, quarter or year. 
                  </p>
                  <p>
                      The green and red dashed lines in the "Daily Avg by Date" graph are the 
                      80th and 20th percentiles respectively. You can compute this using the <a href=""><em>analytics feature</em></a>. While this is a handy built-in feature, it is also useful to have a sense of how this is computed. Learn more about <a href="">percentiles here</a>.
                  </p>
                
          

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
