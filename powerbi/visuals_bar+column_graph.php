<?php include "includes/header0.php"; ?>
  
  <title>Power BI Bar and Column Charts | Dash-Intel</title>
<meta name="title" content= "Power BI Bar and Column Chart | Dash-Intel" />
<meta name="metatitle" content= "Bar and Column Chart Power BI | Dash-Intel"/>
<meta name="description" content= "Bar and Column charts are common ways to visualize data. In a bar chart the data bars are stacked horizontal, while in a column chart the data bars are vertically aligned.">
   
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
 
            
             <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI:  Bar &amp; Column Charts </h2>
                <h4 class = custom_h4> The Basics: Bar &amp; Column Charts </h4>
                
                    <p>
                        Bar and Column Charts are one of the most common ways to visualize data. Both of these data visuals use rectangular bars where the size of the bar is proportional to the data values.
                     </p>

                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNmMxMmVlNjYtZGQ3Mi00ZWQ5LTk1OGQtNjBjMzg3YzI1YWY3IiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Comparing Bar vs Column Charts. 
                        </figcaption>
                      </figure>   

                    <p>
                             Column and bar charts let you compare different categories or track changes over time. What is the difference? If the rectangles are stacked horizontal, it's called a bar charts. If they are vertically aligned like towers, it's called a column chart (see fig 1-a above).
                    </p>
                      
                    <p>
                            If the dimension on the x-axis is not a date and the names of the categories are long, it might be best to go with a bar chart rather than a column chart. 
                    </p>

                      <br>
                
             
                <h4 class = custom_h4> Some Example Interactive Graphs Using Power BI (expand for full view) </h4>
                 
                   <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZmExMjgzODQtODk5Ni00M2JhLWIxMTYtNTNkOGIzODY1ZDQ2IiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Comparing sales month over month using a standard column chart. 
                        </figcaption>
                    </figure>   

                       <p>
                            This is a pretty standard column chart showing sales data over a two year period. It is recommended to seperate the two years with a different color when comparing sales between two given years, with the previous year being a lighter shade. While you can hover over each bar to compare sales, it would be nice to have a better side by side comparison to see which months did better or worse.
                       </p>  
                       
                    <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZmI5NTI0OTMtNjMwZi00NjJmLTlmZWMtZDFmMzBiMjY4NTBjIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-b: Comparing Sales Month over month using with a clustered column chart.
                        </figcaption>
                    </figure>   

                   <p>
                      A clustered column charts is essentially a column chart that lets you compare two values side by side. In this case we are comparing sales for each month over a period of two years. Hovering over one of the values lets you see the % difference between the selected month and the sales values. A stacked column chart is very similar except the bars for each month will be stacked on top of each other rather then side by side. It is now easy to compare sales data last year vs this year for each month. For this sample data, October was the only month sales were down compare to last year.
                   </p> 
                       <br>
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
