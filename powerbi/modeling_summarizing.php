<?php include "includes/header0.php"; ?>
  
<title>Summarizing Data in Power BI | Dash-Intel</title>
<meta name="title" content= "Summarizing data and using quick calc  | Dash-Intel" />
<meta name="metatitle" content= "Summarizing data and using quick calc | Dash-Intel"/>
<meta name="description" content= "Change how your reports are summarized in Power BI and use the quick calc feature to quickly summarize your data.">
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI Modeling: </h2>
              <div class="whitebox">
               <h4 class = "section_gauges">Summarizing Data</h4>
                   <h5>Changing the default summarization:</h5>
                    <p>
                      For any column of numeric data that is contained in a table there is the option to choose how to summarize this data. 
                        For instance, for the revenue column in your table, you can choose the default summarization that appears in your reports.  Within any report, you can also change how you would like to summarize this data. If you have a numeric column such as revenue, you don’t need to write a separate formula to get statistical measures like average, count, distinct count, standard deviation, min, max or median. You can simply change this my clicking on the dropdown icons shown below:
                  </p>
               </div>
                <div class="smokebox">
                    <h5>To change the default summarization:</h5>
                    <div class="container">
                       <div class="row">
                       <div class="col-md-6">
                            <ul>
                               <li> Click on the data column you want to change in the <em>fields menu</em></li><br>
                                <li>
                                    Select the modeling tab at the top of Power BI Desktop.
                                </li><br>
                                <li>
                                    Select Default Summarization as shown below:
                                </li>
                            </ul>
                        </div>
                         <div class="col-md-6">
                               <ul>
                                <li>
                                    <div class ="image-container">
                                        <img src="images/fields.PNG" alt="fields menu">
                                        <img class = "image_margin" src="images/default_summary.PNG" alt="default summary">
                                    </div>
                                </li>
                               </ul>
                          </div>
                        </div>
                     </div>
                    <p class = "alert alert-info">
                    <strong>Note:</strong> This will change how the rows in your data table are summarized (i.e aggregated ). It will not change how your previous reports are displayed.
                    </p>
                </div>
                
                <div class="smokebox">
                    <h5 id = "change_summary">To change how your reports are summarized:</h5>
                    <ul>
                        <li>
                        Under visualizations, select the dropdown icon in the category you want to change as shown below:
                        </li><br>
                        <li>
                        <div class ="image-container">
                            <img src="images/dropdown.PNG" alt="">
                        </div>
                        </li>
                    </ul>
                    <p class = "alert alert-info">
                        <strong>Note:</strong> You will only have these options for numeric data that is contained in a column. If this is not clear review <a href="modeling_measure+calculated+columns.php" target="_blank">Measures vs Calculated Columns</a>
                    </p>
                </div> 
            <div class="smokebox">
                <h5>Quick Calc Feature:</h5>
                   <p>
                   You might have noticed the <em>Quick Calc</em> feature under dropdown options in the image above. <em>Quick Calc</em> is available for any measure or column that is numeric. 
                   </p>
                     <ul>
                        <li>
                        Under visualizations, select the dropdown icon in the measure or column you want to change
                        </li><br>
                        <li>
                            Select Quick Calc and choose how you want the values to be summarized
                        </li><br>
                        <li>
                        <div class ="image-container">
                            <img src="images/quic_calc.PNG" alt="">
                        </div>
                        </li>
                    </ul>
            </div>        
                <h5>Power BI Demo:</h5>
        
        <figure class = "custom_graph_figures">        
            <div class="video-container">
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDQxNjk5MzAtOTUwNS00ZWYwLTk0ZTMtMmZiNjcxY2QzODJjIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
            <figcaption class = "custom_figcaption">

            </figcaption>
        </figure>  
        <p>
            This report uses the summarization options and the quick calc feature to display the % of grand total of revenue. To show both the revenue and % of total revenue, simply drag revenue into the values section twice and change one of the columns to show % of grand total using quick calc. Hovering over one of the data points in the map, shows some of the statistical summary options that are available. 
        </p>
        <p>The large difference between <a href="statistical_functions_median.php" target="_blank">median</a> and mean revenue is something common to all data points. This reveals the data is <a href="statistical_functions_median.php" target="_blank">skewed right</a> by some of the transactions that are very large. </p>

        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
