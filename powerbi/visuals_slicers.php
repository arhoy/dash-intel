<?php include "includes/header0.php"; ?>
  
  <title>Power BI Slicers | Dash-Intel</title>
<meta name="title" content= "Power BI Slicers | Dash-Intel" />
<meta name="metatitle" content= "Slicers in Power BI | Dash-Intel"/>
<meta name="description" content= "Slicers in Power BI are a visualization tool which allows the user to filter by specific dimensions and segment the data to more granular levels.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Slicers </h2>
                <h4 class = custom_h4> The Basics: Slicing your data</h4>
                <h5>Basics of Slicers:</h5>
                
                    <p>
                        A slicer is a visualization tool that filters and segments data. It allows you to filter by specific dimensions (i.e by product type or city) or by a set criteria (ex. large transactions).
                    </p>
                      
                    <p>
                        When you select an item in the slicer, only that item will be shown and the rest of the data gets filtered out. For instance take your entire sales data. You can set up slicers to look at sales by product, region, date or a particular customer demographic.
                    </p>
                    
             <h5>How to make a slicer:</h5>
                    <p> To make a slicer select the slicer visual in Power BI under <em>Visualizations</em>. Next choose the column in your data set that you want to filter. You can also create a custom column know as a <a href="modeling_measure+calculated+columns.php" target="_blank">calculated column</a>.</p>
                     
                <h5>Power BI demo:</h5>
                    <p>Below is an example of how slicers can bring your report to life</p>
                     <figure class = "custom_graph_figures">        
                        <div class="video-container">
                        
                           <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDQyYzVlMzYtODIxZS00NjFkLWFiNjUtNjBkYTlkNGMyNDVlIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>

                        </div>
                        <figcaption class = "custom_figcaption">
                        </figcaption>
                    </figure>  
                    <ul>
                        <li>Illustrates the different types and styles of slicers</li>
                        <li>Dropdown slicer hides categories until selected</li>
                        <li>Date Slicer lets you scroll or pick a specific date</li>
                        <li>Revenue by Day of Week graph uses <a href="">tooltip</a> feature and stroke weight</li>
                    </ul>
                     
                     <h5>Additional Comments:</h5>
                     <p>
                         This example is a static report. However automating a report like this is easy. If your data is connected to a database where data gets updated daily or in real-time you can write a SQL query that always gets the last full week of data. If your data is still in excel files, you can also update the data in excel without having to recreate reports. Another variation is comparing this week vs last week in an automated report.
                     </p>
                      <h5>Slicer Properties:</h5>
                      <br>
                      
                      <table class="table table-hover table-bordered">
                          <col style="width:30%">
                          <col style="width:70%">
                          <thead class = "custom_thead">
                            <tr>
                              <th>List Style</th>
                              <th>Properties</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbody">
                            <tr>
                              <td>List</td>
                              <td>Default: Lists all values in your slicer. If you have many values it will take up lots of space or user will have to scroll.</td>
                            </tr>
                            <tr>
                              <td>Dropdown</td>
                              <td>Option: Takes up a small amount of space, category values not shown. </td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <table class="table table-hover table-bordered">
                          <col style="width:30%">
                          <col style="width:70%">
                          <thead class = "custom_thead">
                            <tr>
                              <th>Selection Control</th>
                              <th>Properties</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbody">
                            <tr>
                              <td>Select All</td>
                              <td>Default: Turned off by default. </td>
                            </tr>
                            <tr>
                              <td>Single Select</td>
                              <td>Default: Turned on by default. Allows user to select only one category in slicer at a time. (unless you hold down ctrl key) </td>
                            </tr>
                          </tbody>
                        </table><br>
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
