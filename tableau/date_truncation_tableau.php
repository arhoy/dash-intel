<?php include "../includes/header/header0.php"; ?>
  
<title>Date Truncation | Tableau</title>
<meta name="title" content= "Date Truncation in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Date Truncation| Dash-Intel" />
<meta name="description" content="Date Truncation summary in Tableau.">

   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<body>

<?php include_once("../includes/utils/analyticstracking.php") ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "../includes/header/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
        <div class="custom_color_box">
        
            <h2 class = "custom_more_margin">Tableau - Date Truncation </h2>
                
   <p>Return the first day of the week, month, quarter or year using <em>DATETRUNC</em> </p>
                  
               <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATETRUNC(date_part, date, [start_of_week])
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
                  <p>Return the first day of this year</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATETRUNC('year', TODAY())
                     </code></pre>
                     </div>

                    <p>Return the first day of the quarter</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATETRUNC('quarter', TODAY())
                     </code></pre>
                     </div>

                    <p>Return the first day of the month one year ago</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATETRUNC('month', TODAY() -365)
                     </code></pre>
                     </div>

                      <p><strong>Some tips:</strong></p>
                     <ul>
                         <li>Convert to an exact date</li>
                         <li>Change data type to discrete</li>
                     </ul> 
                     <p><strong>These calculations </strong> come in handy when finding the number of days in the month, quarter or year dynamically.
        </div>

       
        
        <!-- Ads will go here or link to other pages -->
        <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
       </div>   


