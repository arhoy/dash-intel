<?php include "includes/header0.php"; ?>
  
<title>Dates Differences in Tableau</title>
<meta name="title" content= "Date Differences in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Date Differences| Dash-Intel" />
<meta name="description" content="Date Differences summary in Tableau.">

   
   
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
        
            <h2 class = "custom_more_margin" id = "pb_intro" >Tableau - Date Differences </h2>
                
    <p>Find the difference between two dates using <em>DATEDIFF</em></p>
                  
                         <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEDIFF(date_part, start_date, end_date, [start_of_week])
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
                     <p class = "alert alert-warning">[start_of_week] is an optional parameter which can be any day of the week (i.e "Monday", "Tuesday", etc)</p>
                     <h3>Example</h3>
                  <p>Find the number of months between two specified dates</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEDIFF('month',#2017-07-01#, #2017-09-01#)
                     </code></pre>
                     </div>

                    <p>Find the number of days between two specified dates</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEDIFF('day',#2017-01-01# , TODAY())
                     </code></pre>
                     </div>

                      <p><strong>Some tips:</strong></p>
                     <ul>
                         <li>Change data type to date</li>
                         <li>Change data type to discrete</li>
                        
                     </ul> 
                     <p><strong>DATEDIFF with DATETRUNC</strong> lets you track date differences without hard coding a specific date. </p> 
                     
            </div>
                     
            <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
