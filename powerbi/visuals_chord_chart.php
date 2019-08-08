<?php include "includes/header0.php"; ?>
   
  <title>Chord Charts Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Chord Charts | Dash-Intel" />
<meta name="metatitle" content= "Chord Charts in Power BI | Dash-Intel"/>
<meta name="description" content= "Chord Charts are used to display relationships between the data in a table. The relationship between two tables is illustrated by a line (chord) connecting the common columms of data.">
   

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
         
            
             <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Chord Charts </h2>
                <h4 class = custom_h4>Chord Charts</h4>
                <h5>Basics:</h5>
                
                    <p>
                         Chord charts or chord diagrams are used to display relationships between data in a table. They are know as chord charts since a chord in geometry is a line that connects two endpoints on a circle. 
                     </p>
                <h5>Power BI Demo:</h5>
                      <p> Below is an example of a chord chart showing import and export data between the world's top 6 economies. : </p>

                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                           <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMDFmMTM4NzYtZjM3Mi00NDc4LWJjZjctMmI1ZGIwNTU1NjdiIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Chord Chart between the G6 Nations.
                        </figcaption>
                      </figure>   

                      <p>
                            The chord chart illustrates trade between the 6 economic powerhouses. Selecting on one of the countries shows trade relationships for that given year. For instance of the 6 countries above, China Exports the most to the US, followed by Japan.  
                      </p>

                      <br>
                
                    <h5> Steps on making a chord diagram</h5>
                      <ul>
                          <li>STEP 1: Download custom visual <a href="https://app.powerbi.com/visuals/show/ChordChart1444757060245" target="_blank">chord diagram here</a>.</li>
                          <li>STEP 2: In Power BI under Visualizations select Import Visual and get chord chart from downloads folder.</li>
                          <li>STEP 3: Drag Country Exports and Imports into the "From" and "To" Field</li>
                          <li>STEP 4: Drag your numeric data into the "values" field</li>
                      </ul> 
                      <p>The above chord charts was made with this csv file, which includes all countries. To make the chart above the data was filtered in POWER BI to include only the top 6 Economies. <a href="files/trade.csv">See data file here: </a></p>  
                       <br>
            
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
