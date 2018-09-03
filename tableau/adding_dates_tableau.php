<?php include "includes/header0.php"; ?>
  
<title>Adding Dates | Tableau</title>
<meta name="title" content= "Adding Dates in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Adding Dates| Dash-Intel" />
<meta name="description" content="Adding Dates summary in Tableau.">

   
   
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
        <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Adding Dates </h2>
                
    <p>To return a future or past date in Tableau use <em>DATEADD</em></p>
                  
             <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEADD(date_part, interval, start_date)
                     </code></pre>
                     </div>
                     <p>The <em>date_part</em> can be:</p>
                     <ul>
                         <li>day</li>
                          <li>week</li>
                         <li>month</li>
                         <li>quarter</li>
                         <li>year</li>
                     </ul>
                     <h3>Example</h3>
                  <p>Add 1 month to 2017-09-01</p>
                   
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEADD('month', 1, #2017-09-01#)
                     </code></pre>
                     </div>

                    <p>Find the date 7 days ago</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEADD('day', -7, TODAY())
                     </code></pre>
                     </div>

                      <p><strong>Some tips:</strong></p>
                     <ul>
                         <li>Change data type to date</li>
                         <li>Change data type to discrete</li>
                     </ul> 
                     <p><strong>These calculations </strong> come in handy when you need to look at project deadlines, forecasts or look back at advertising spend from 7 days ago to calculate ROI.
    

                      <br>
                       <br>
            </div>
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
