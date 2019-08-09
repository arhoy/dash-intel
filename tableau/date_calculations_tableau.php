<?php include "../includes/header/header0.php"; ?>
  
<title>Date Calculations in Tableau</title>
<meta name="title" content= "Date Calculations in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Date Calculations| Dash-Intel" />
<meta name="description" content="Date Calculations summary in Tableau.">

   
   

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

           
    <h2 class = "custom_more_margin">Tableau - Date Calculations </h2>
    
    <div class = "sub_section_navigation">
  <ul>
      <a href="./adding_dates_tableau.php">Adding Dates |</a>
      <a href="./difference_in_dates_tableau.php">Date Differences</a><br>
      <a href="./date_truncation_tableau.php">Date Truncation |</a>
      <a class = 'header_nav' href="./number_of_days_in_month_tableau.php">Days in Current Month</a>
  </ul>              
  </div>

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
                     <br><br>
        </div> 
                     
                     
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
                     
            <br><br>
        </div>
    
        <div class="custom_color_box">
            <h2 class = "custom_more_margin">Elapsed Number of Days in Month, QTR, Year Dynamically </h2><br>
                
    <p>To get the number of days elapsed in the current month create the following calculated field:</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEDIFF('day',DATETRUNC('month',today()),today())
                     </code></pre>
                     </div>

                  <p>To get the number of days elapsed in the current quarter create the following calculated field:</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEDIFF('day',DATETRUNC('quarter',today()),today())
                     </code></pre>
                     </div>

                  <p>To get the number of days elapsed in the current year create the following calculated field:</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEDIFF('day',DATETRUNC('year',today()),today())
                     </code></pre>
                     </div>     

                    <div class = 'content_subheader'><h2 class = 'tutorial_sub_header'>Total Number of days in any given month</h2></div>
            <div class = 'content_body_html'>
                  <p>To get the number of days in the current month dynamically:</p>
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    DATEPART('day', DATEADD('day', -1, DATEADD('month', 1, DATETRUNC('month', [Date]))))
                     </code></pre>
                     </div>

                     <p><strong>Some uses:</strong> Track goals and targets. For instance, let's say your sales goal is $10,000 per month. If you are 23 days into the month then you can use the formulas above to see where you <em>should</em> be in terms of the number of days that elapsed in the month.
                     </p>
                      <p><strong>Some tips:</strong></p>
                     <ul>
                         <li>Aggregrate the measure as a minimum not a sum</li>
                         <li>Change to discrete to show numeric values or drag to text</li>
                         <li>This will depend on the filter context</li>
                     </ul> 
                     <p><strong>The latter calculation</strong> depends on the <em>filter context</em> which is a fancy way of saying it depends on what dimensions/measures are in the row or column shelf in tableau. 
                    </p>
            </div>
        </div>
       
                <!-- Ads will go here or link to other pages -->
      <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
       </div>   



