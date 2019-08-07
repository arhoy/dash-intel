<?php include "includes/header0.php"; ?>
  
<title>Customer Cohorts | Tableau</title>
<meta name="title" content= "Customer Cohorts in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Customer Cohorts| Dash-Intel" />
<meta name="description" content="Customer Cohorts summary in Tableau.">

   
   
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
            <h2 class = "custom_more_margin">Tableau - Customer Cohorts </h2>
                
              <p>The Task is to find the % of sales each year from new and old customers</p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new LOD <em>calculated field</em> in Tableau called "First Purchase Date" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {FIXED [Customer ID]: MIN([Order Date])}
                 </code></pre>
                 </div>
 
          <p><strong>Step 2: </strong>Add "OrderDate" to the column shelf, "First Purchase Date" to color and "Sales" to the row shelf  </p>
          
          <p><strong>Step 3: </strong>For SUM(Sales) in the row shelf, right click and select <em>Add Table Calculation</em> with the following options:</p>
          <ul>
              <li>Calculation Type: Percentage of Total</li>
              <li>Compute using: Table (down)</li>
          </ul>
        </div>
    <p>You can now see the percentage of sales for each customer cohort.</p>
    <p><strong>Tip: </strong>To get a more granular view of sales, expand YEAR(Order Date) to view order dates by quarter and month. </p>
</div>
       
       
        <?php include "includes/footer_0.php"; ?>
        <br><br><br>
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
