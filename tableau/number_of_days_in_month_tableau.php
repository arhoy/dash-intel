<?php include "../includes/header/header0.php"; ?>
  
<title>Find Number of Days in Month Dynamically | Tableau</title>
<meta name="title" content= "Adding Dates in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Adding Dates| Dash-Intel" />
<meta name="description" content="Adding Dates summary in Tableau.">

   
   

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

