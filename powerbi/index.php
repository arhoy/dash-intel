<?php include "includes/header0.php"; ?>

<title>Learn Power Bi</title>
<meta name="title" content= "Learn Power Bi | Dash-Intel" />
<meta name="metatitle" content= "Learn how to use Power Bi | Dash-Intel" />
<meta name="description" content="Getting started with Power Bi. Learn about Power Bi and how it can help with your business intelligence.">

   

<?php include "includes/header.php"; ?>
<?php include "includes/css.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include "includes/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
            <div class="borderbox">
           <h2 class = "custom_more_margin" id = "pb_intro" >Get Started with Power BI</h2>
           </div>
            <div class="whitebox">
            
           <h4>What is Power BI?</h4>
          
        <p>
            Power BI is a free (or very low cost) and effective solution to business intelligence. What is business intelligience? Business intelligence (BI) is the process of collecting, transforming, analyzing and presenting data to support and drive business deisions. Data presentation and analysis is frequently listed among the top or most in-demand skills on sites like <a href="https://www.linkedin.com/pulse/2017s-most-in-demand-skills-according-linkedin-sudhir-kumar" target="_blank">LinkedIn</a> and Forbes. Data analysts, marketing coordinators and business managers (among many others) frequently need to make sense of all this data and then effectively present it to their team. Power BI is a end-user tool that provides this. A user can import or connect data from multiple sources to make stunning interactive visuals and dashboards with ease. Power BI lets you:   
        </p>
             <ul>
                 <li>Allows you to schedule refresh data daily or hourly</li>
                 <li>Create interactive and automated visuals and dashboards</li>
                 <li>View on mobile, share with others, publish reports to the web</li>
                 <li>Monthly updates, additions and improvements by Microsoft's BI Team</li>
             </ul>
             
            </div>
            
            <div class="whitebox">
          <h4 id = "howtodownload">How Can I get Power BI?</h4>
          <p>
             Download Power BI desktop from <a href="https://powerbi.microsoft.com/en-us/desktop/" target="_blank">powerbi.microsoft.com</a> and <a href="https://powerbi.microsoft.com/en-us/gateway/" target="_blank">Microsoft on premises data gateway</a> to allow you to automatically refresh and schedule your reports. To check if your operating system is 64 bit or 32 bit go to Start and type in "about your Pc". You can also <a href="https://powerbi.microsoft.com/en-us/mobile/" target="_blank">download the app</a> to view data on-the-go.
          </p>    
            </div> 
                
        <div class="whitebox"> 
         <h4 id = "gettingdata">What Data sources Can I connect with?</h4>
            <p>There is hundreds of data sources you can connect to. These include:</p>
              <ul>
                  <li>Access, Adobe Analytics, Azure</li>
                  <li>Excel, Exchange</li>
                  <li>Facebook</li>
                  <li>Github, Google Analytics</li>
                  <li>MailChimp, Mandrill, Marketo, MySQL</li>
                  <li>OData, Oracle</li>
                  <li>Salesforce, SharePoint, SQL Server</li>
                  <li>The Web</li>
              </ul>
              <p>See also: <a href="https://youtu.be/n5eqkJols2A" target="_blank"> 
                  Walk me through how to connect to a data source
              </a></p>
              
         </div>
            
        <div class="whitebox">
        <h4 id = "graph_features">Quick Glance of Visuals</h4>
               
               <h5 class = "content_indent">Many Visuals to Choose From</h5>
                <p class = "content_indent">
                There are many different visuals in Power BI. These include line graphs, maps, tables, funnels and much more. The <a href="https://app.powerbi.com/visuals/" target="_blank">Visuals Library</a> is an active and growing developer community where there are even more visualizations to choose from. 
                </p>
        
                  
                <script>
              $( function() {
                $( "#img_accordion" ).accordion();
              } );
              </script>
              
               <div id="img_accordion">
                 
                  <h3>Bar and Column Charts</h3>
                       <div class="card">
                        <img class="card-img-top" src="images/pbi_viz/Capture_bar.PNG" alt="Card image cap">
                        <div class="card-block">
                          <a href="visuals_bar+column_graph.php" class="btn btn-primary custom_card_button">Learn More</a>
                        </div>
                      </div>
                  
                  
                  <h3>Line Charts</h3>
                  <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture_line.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_line_graphs.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                   </div>
                  
                    <h3>Combo Charts</h3>
                  <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture_combo.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_combo_charts.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                  </div>
                  
           
                    
                  <h3>Scatter Charts</h3>
                   <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture_scatter.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_scatter_charts.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                  </div>
                  
                    <h3>Waterfall Charts</h3>
                <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture+waterfall.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_waterfall_charts.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                  </div>
                   
                    <h3>Chord Chart</h3>
                 <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture_chord.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_combo_charts.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                  </div>
                         
                <h3>Gauges</h3>
                  <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture_gauge.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_cards_gauge.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                  </div>
                  
                  
                   <h3>Maps</h3>
                  <div class="card">
                    <img class="card-img-top" src="images/pbi_viz/Capture_map.PNG" alt="Card image cap">
                    <div class="card-block">
                      <a href="visuals_maps.php" class="btn btn-primary custom_card_button">Learn More</a>
                    </div>
                  </div>

                  
                 
            
            </div><br><br><!--End of accordion-->
           
                
                
                <h5 class = "content_indent">Segment and Filter Data Easily</h5>
                <p class = "content_indent">
                You can easily create custom filters to segment your data with the click of a mouse. This is done with your basic <a href="visuals_slicers.php">slicer</a> but there are neat ways to filter your data as well. Date slicers have a built-in calendar you can use to easily narrow down specific date ranges. You can create your own filters using custom <a href="modeling_measure+calculated+columns">calculated columns</a>. In addition, there are page and report level filters you can apply on the Power BI report canvas.
                </p>
                
                <h5 class = "content_indent">Drill Down Feature</h5>
                <p class = "content_indent">
                    Drill down mode work great when you have natural hierarchies. For instance, in your sales data you could have many categories with each category made up of sub categories. Further within a subcategory you have many products.
                    For example a category could be electronics: Sub categories of electronics are tv, computer, radio, etc. Within the tv sub category there are many different products, brands and sizes of tvs. Another example of a natural hierarchy is in a date table where you have years, months and days.   
                </p> 
         </div>
        
        <div class="whitebox">
                
         <h4 id = "pss">Publishing Reports, Scheduling and Sharing</h4><br>
            <div class = "content_indent">
              <h5>Publishing Reports</h5>
                <p class = 'list_icon'>
                   Once you are happy with your reports and visuals on Power BI desktop you can publish it to Power BI Service (online). The benefits of publishing reports are:
                     <li class = 'list_icon'>To share with your team</li>
                     <li class = 'list_icon'> To set up a refresh schedule so your reports are automatically updated</li>
                     <li class = 'list_icon'>To create a <em>dashboard</em> with the reports you made from one or more files</li>
                </p>
                
                <p>In Power BI Desktop select "Publish" at the bottom</p>    
                <div class="image-container">
                 <img src="images/publish.PNG" frameborder="0" allowFullScreen="true">
                <br><br>
                </div>
             
            
        
                <h5>Scheduling Reports</h5>
                <p>
                    Scheduling reports means being able to refresh your data automatically. In the free version you can do this once a day. With Power BI Pro you can refresh your dataset up to 8 times per day. However, you can set up and refresh multiple data sets at the same time.
                </p>
                
                  <div class="image-container">
                 <p>
                    In Power BI service, select the datasets you wish to refresh:
                 </p>
                 <img src="images/refresh_schedule.PNG.jpg" frameborder="0" allowFullScreen="true">
              </div><br>
                 <img src="images/refresh_schedule_1.PNG" frameborder="0" allowFullScreen="true">
              </div><br>
              
                 <h5>Sharing Reports</h5>
                <p>Initially when you publish a report to Power BI service, only you will have access to it.
                However, you have the option to share reports/dashboards with others and can even publish to the web where anyone can see.
                </p>
                
              <div class="image-container">
                     <p>
                     After selcting the share icon, simply enter in the emails with whom you'd like to share. They will be sent an email and will be able to view but not edit the report. 
                      </p>
                     <img src="images/share.PNG" frameborder="0" allowFullScreen="true">
              </div>
             
              <div class="image-container">
                 <p>
                     You can publish your report to the web as an iframe. This will allow anyone to view and interact, but not edit, the report.
                 </p>
                 <img src="images/publishToWebxyz.PNG" frameborder="0" allowFullScreen="true">
              </div>
        </div>
              <div class="whitebox1">
              <h5>Continue Exploring:</h5>
              <ul>
                  <li><a href="visuals_bar+column_graph.php">Power BI Visuals: Examples of some of the visuals you can use in Power BI</a>.</li>
                  <li><a href="modeling_intro.php">Power BI Modeling: Clear step by step tutorials and examples of the basics behind modeling in Power BI</a>.</li>
              </ul>
            </div>
   
            
          <?php include "includes/footer_0.php"; ?>  
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
