<?php include "includes/header0.php"; ?>
  
<title>Percentile Functions in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Percentile Functions | Dash-Intel" />
<meta name="metatitle" content= "Using the percentile function in Power BI | Dash-Intel"/>
<meta name="description" content= "There are two type of percentile functions in Power BI. Percentile.exc and percentile.inc. use slightly different formulas, and return different values especially when there is a small number of data points.">
   
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
                <h4 class = custom_h4> Percentile Functions</h4>
                <p>
                    Percentile functions are used when you want to find out the value in which a certain percentage of observations lie below.
                    For example, the 90th percentile is a value where 90 percent of the observations in the data set or group are below. The 50th percentile is also know as the median or middle value where 50 percent of observations fall below.
                </p>
                <h5><em>Percentile</em> functions</h5>
                <p>There are two main percentile functions in Power BI:</p>
                <ul>
                    <li>PERCENTILE.EXC(column, kth percentile)</li>
                    <li>PERCENTILE.INC(column, kth percentile)</li>
                </ul>
                
                 <p>The first parameter is the column which you want the percentile value for. <br>
                     The second parameter is the kth percentile where k percentage of values will fall below.
                 </p>
                 <p>
                     Both formulas use a slightly different algorithm. The second algorithm works for any value of k between 0 and 1 (the 0th and 100th percentile). In the EXC version the data excludes both lower and upper bounds, while INC includes them. For large sample sizes, both algorithms will give similar results. 
                 </p>
                <h6>Example Formulas:</h6>
                <p>Define the following measures in the Power BI formula bar.</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                20th_PercentileExc = PERCENTILE.EXC(TransactionData[Revenue],0.2)
	            </pre>
              
               <pre class="brush:dax; title: ; notranslate" title="">
                20th_PercentileInc = PERCENTILE.INC(TransactionData[Revenue],0.2)
	            </pre><br>
              
                <h6>Using the Percentile Measures Defined above:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiY2Q4NDJkYTMtYjY0My00MmFlLTllZTctNzcwMGJhNWE3YTI2IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
               
                </div>
                <figcaption class = "custom_figcaption"><br>
               This graph gives the median and 20th percentile sales transaction revenue for each candy type. Since this is a measure, you can segment across any dimension as needed.
                </figcaption>
               </figure><br>
               
              
                
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                     <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDQwYmYwYzgtMDkzNy00OGIyLWI0ODEtYzhmYTkxZWIxODU4IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
               
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
                Plotting percentiles in a graph, can reveal information about the distribution of the data. The figure above reveals the data is largely right skewed. The difference in revenue is much larger between the 80th percentile and the 50th percentile, compare to the 50th percentile and the 20 percentile. This is especially true on orders for Candy K.
               </figure><br>
               
            
                
               
               <h5>Using the Analytics Feature</h5>
               <p>
               While you can define percentile measures above, the analytics feature enables you to show percentiles across groups specified along a specific axis.
               </p>
               
               <div class="container">
                   <div class="row">
                       <div class="col-md-6">
                          <ul>
                              <li>
                                    Click on the analytics tab
                              </li><br>
                              <li>
                                    Select Percentile 
                              </li><br>
                               <li>
                                    You can choose a specific percentile along with other formatting options.
                              </li><br>
                              <li>  Drag a date or non-numeric dimension into the <em>Axis</em> of a column chart
                              </li>
                          </ul>
                           
                       </div>
                       <div class="col-md-6">
                            <div class="image-container">
                               <img src="images/analytics_feature.PNG" alt="">
                               <img class = "image_margin" src="images/percentile_line.PNG" alt="">
                           </div><br>
                       </div>
                   </div>
               </div>
               
               
            <h6>Power BI Demo: Daily Revenue</h6>
              <p>Add percentile lines to monitor daily revenue</p>
               <figure class = "custom_graph_figures">        
                <div class="video-container">
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNzNjYzZkYzYtY2JjZC00ZDViLWIxYWYtYmUwNmQxNWU3N2FjIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
               
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure><br>
               
               
            <h6>Power BI Demo: Closer Look at Percentile Formula</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMzM1MmM0YTYtN2IzZS00NDMwLThjZDYtNWE1MTZmZTU2OWU2IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
               
               
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure>
                  <p>
                   This graph shows 11 product Ids sorted by revenue with a max line, a min line and a 90th percentile line. A max line is the 100th percentile line while the min line represents the 0th percentile. Power BI uses INC version of the percentile formula. It is no coincidence that the 90th percentile line has the exact same value as the total revenue from candy H (It sits right on top of candy H). The 80th percentile line if plotted would sit right on top of Candy I, the 70th percentile on top of Candy D and so on. The formula used for calculating the INC percentile is: <br>
                   $$ {k(n-1) + 1} $$
                   Where k is the percentile and n is the number of items that are ordered. 
                   This states the rank when the values are ordered from smallest to largest. 
                   For example, using ${k = 0.9 }$ and ${n = 11}$ in the formula returns a rank of 10. Candy A is the smallest value, so it has a rank of 1. Candy K is the largest value which has a rank of 11. A rank of 10 corresponds to the revenue value of Candy H, which is the 90th percentile.
               </p>
               
               
              
                        
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
