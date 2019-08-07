<?php include "includes/header0.php"; ?>
  
  <title>Power BI Cards and Gauges | Dash-Intel</title>
<meta name="title" content= "Power BI Cards and Gauges | Dash-Intel" />
<meta name="metatitle" content= "Cards and Gauges in Power BI | Dash-Intel"/>
<meta name="description" content= "Gauge or KPI cards give a quick snapshot of your data. They are a simple yet effectitve visualization tool.">
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Gauges and KPI Cards </h2>
               <h4 class = "section_gauges">Gauges</h4><br>
                <h5 class = custom_h4> The Basics:</h5>
                
                    <p>
                        Gauges are a simple yet effective visualization for a dashboard. Using a gauge or KPI card gives a quick snapshot of your main KPIs. The main features of a Gauge are:
                    </p>
                    <ul>
                        <li>Track performance overtime for a specific metric</li>
                        <li>Illustrates a KPIs current value and goal or target value.</li>
                    </ul>
                <h5>Power BI Demo:</h5>
                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMDM2ZGMyMDUtODg1ZS00YjhkLWIzMGMtMjJmYTBhMjc3NDdhIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Standard Gauge Showing NPS
                        </figcaption>
                      </figure>   
            
                      <br>
                
                    <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiOTg3ZDlkYzYtODBjYi00NmY0LWEyNTQtMmFlZWY0YTBmYmNkIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-b: Dial Gauge:
                        </figcaption>
                    </figure>   
                       
                       <p> To make a Dial style gauge above with three colors we need to have the following values:</p>
                      <ul>
                          <li>Pointer Value: ie. Current NPS above set to 10</li>
                          <li>Min Value: ie. Minimum NPS above set to 0</li>
                          <li>Max Value: ie. Maximum NPS above set to 20</li>
                          <li>Actual Start Value: ie. OK NPS above set to 13</li>
                          <li>Target End Value ie. Goal NPS above set to 15</li>
                          <li>Percentage Value ie. Current NPS / Goal NPS</li>
                      </ul> 
                    <p>You can import this visual from the <a href="https://app.powerbi.com/visuals/show/DialGauge1450749964276" target="_blank">visual gallery</a></p>

                       
                   <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMzYzMzQwODctM2Y5My00ZmNjLWJiODktMzQ0YWE4YzhlZjU1IiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-c: Tachometer Style Gauge
                        </figcaption>
                    </figure>     
                      
                    <p> To make a Tachometer style gauge above with three colors we need to have the following values:</p>
                      <ul>
                          <li>Current Value: ie. Current NPS above set to 10</li>
                          <li>Start Value: ie. Minimum NPS above set to 0</li>
                          <li>End Value: ie. Maximum NPS above set to 20</li>
                          <li>Range 2 start Value ie. OK NPS above set to 13</li>
                          <li>Range 3 start Value ie. Goal NPS above set to 15</li>
                      </ul> 
                    <p> Additionally you can set a target NPS Value if different than the "goal NPS" value. You must make sure that this target NPS value has a different value than any of the NPS values above, otherwise the graph will not show three colors for each range.
                    </p>
                       <p>You can import this visual from the <a href="https://app.powerbi.com/visuals/show/Tachometer1474636471549" target="_blank">visual gallery</a></p>
                      
                       <br>
            <p>Try it out yourself with this simple excel data <a href="files/gauges_upload.csv">here</a></p>
            
              
        <h4 class = custom_h4 section_cards>Cards</h4>
        <h5>The Basics:</h5>  
        
        <p> Cards or KPI cards are also useful for displaying your main business metrics on your dashboard. For instance with KPI cards you can have your sales data, and then show your goal sales or projected sales numbers. You can also add in a trend axis which will show different colors depending on whether sales are up or down. 
        </p>
        
        
        
        <figure class = "custom_graph_figures">        
            <div class="video-container">
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiOTgyMzBlZDctMGU1MS00ODFhLWI3M2EtODI2NTFhZjNkNTVhIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
            <figcaption class = "custom_figcaption">
                Fig 1-d: Default KPI Card showing Sales over time.
            </figcaption>
        </figure>  
        
        <h5>Features:</h5>
        <ul>
            <li>Useful in a corner of a dashboard for a snapshot glance of your main KPIs.</li>
            <li>Trend axis shows changes over time.</li>
            <li>Goal value shows expected target to be reached.</li>
        </ul><br>
        

        
         <figure class = "custom_graph_figures">        
            <div class="video-container">
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiYjg5MDczMTctNjE4ZC00ZDdmLWFjNmItZDIzZjJiY2E1ZDRlIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
            </div>
            <figcaption class = "custom_figcaption">
                Fig 1-e: Card with States Visual showing Sales over time.
            </figcaption>
        </figure>  
        
          <p>
              This highly customizable, and award winning visual made by OKViz can be downloaded for free <a href="http://okviz.com/card-with-states/" target = "_blank" > here. </a> There are many cool and customizable features that make this a great KPI visual.
          </p>
        <h5>Features:</h5>
              <ul>
                  <li>Add in variance to your data values</li>
                  <li>Customize goal messages based on specific cases.</li>
                  <li>Customize colors and icons based on different scenarios</li>
                  <li>Customize appearance and weight of treadline</li>
                  <li>Illustrate high and low points in the data</li>
                  <li>An awesome tooltip feature that lets you hover see your data points</li>
                  <li>Customizable settings for those who are color blind</li>
              </ul><br><br>
 
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
