<?php include "includes/header0.php"; ?>
  
  <title>Power BI Tables and Matrices | Dash-Intel</title>
<meta name="title" content= "Power BI Tables and Matrices | Dash-Intel" />
<meta name="metatitle" content= "Tables and Matrix in Power BI | Dash-Intel"/>
<meta name="description" content= "Tables and Matrices in Power BI are like pivot tables in excel. Using slicers on tables allows you to create dynamic user friendly reports similar to Power Pivot.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Tables and Matrices </h2><br>
                <h5> The Basics:</h5>
                
                    <p>
                        Just like in Excel, you can display data in a table or a matrix. A matrix is similar to a pivot table in excel. You can drag data fields into both rows or columns. 
                    </p>
                    
                <h5>How to make:</h5><br>
                  <ul>
                  <li>
                      <div class="image-container">
                         <img src="images/viz_table.PNG" alt="table visual"><br>
                      </div>
                  </li><br>
                   <li>Under <em>visualizations</em>, select table or matrix.</li>
                   <li>Drag data fields into <em>Values</em>.</li>
                  </ul>
                   
                   <p>In format, under <em>visualizations</em> you can change the table style, grids, font size, etc to customize the table you created.
                   </p>
                   <ul>
                       <li>
                            <div class="image-container">
                                 <img src="images/format_1.PNG" alt="format">
                            </div>
                       </li>
                   </ul><br>
                    
                <h5>Power BI Table/Matrix with one Dimension:</h5>

                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiODA0YzRiOGYtOTM1MS00YjJlLWI2ZmEtNGM0MTU1ZDk0OTM0IiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: If you have only one dimension, exporters, then tables and matrices are the same.
                        </figcaption>
                      </figure>   
                <h5>Conditional Formating</h5>
                    <p>To create a matrix or table with conditional formating:</p>
                     <ul>
                     <li>
                         <div class="image-container">
                            <img src="images/conditional_formating.PNG" alt="conditional formating">
                         </div>
                     </li><br>
                      <li>Select value to format</li>
                      <li>Select Conditional Formating</li>
                      <li>Choose desired formating colors or range</li>
                      </ul>
                 <h5>Power BI Matrix with two dimensions:</h5>
                        <figure class = "custom_graph_figures">        
                        <div class="video-container">
                        
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNzAyMjM3OTktNTFmZS00MDQ5LTkzMDAtYjI0NzJkMjBkODFjIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                            
                        </div>
                          <figcaption class = "custom_figcaption">
                          </figcaption>
                    </figure>  
                       <br>
                       <p>
                       This matrix allows for comparison of two categories at the same time. For example, we can quickly gain insight that <em>Candy E</em> in the <em>New England</em> region had the highest return on investment over the full date range. Similarly, it is quick to spot which combination of region and product is doing poorly. Using the date filter allows you to see how these values change over time.
                       </p>
                       
                        <h5>Additional Comments:</h5>
                        <p>
                        See also: video on <a href="https://youtu.be/x6uklTTgCf4" target="_blank">creating tables in power bi</a>
                       </p>
                       <br>
          
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
