<?php include "../includes/header/header0.php"; ?>
  
<title>LOD Sales Tracker | Tableau</title>
<meta name="title" content= "LOD Sales Tracker in Tableau | Dash-Intel" />
<meta name="metatitle" content= "LOD Sales Tracker| Dash-Intel" />
<meta name="description" content="LOD Sales Tracker summary in Tableau.">

   
   
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
            <h2 class = "custom_more_margin">Tableau - LOD Sales Tracker </h2>
               
                             <p>The Task is to create a Sales Per Day Tracker with high, medium and low sales days</p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new LOD <em>calculated field</em> in Tableau called "Sales Per Day" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {FIXED [Order Date]: SUM([Sales])}
                 </code></pre>
                 </div>
       <p><strong>Step 2: </strong>Create a new LOD <em>calculated field</em> in Tableau called "Sales Per Day" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                   IF [Sales Per Day] > 3000 THEN 'high'
                   ELSEIF [Sales Per Day] > 2000 THEN 'medium'
                   ELSE 'low'
                   END
                 </code></pre>
          </div>
          <p><strong>Step 3: </strong>Add "OrderDate" to the both the row and column shelf and "Sales Tracker" to color shelf and row shelf </p>
          
          <p><strong>Step 4: </strong>For "OrderDate" in the row shelf, right click and select <em>measure->Count (Distinct)</em></p>
          <p><strong>Step 5: </strong>Expand YEAR(OrderDate) on the row shelf to show quarters</p>
          <p><strong>Step 6: </strong>On the right hand side, reorder the legend by clicking and dragging to show high, medium and low</p>
          <p><strong>Step 7: </strong>Set the marks type to Bar or Area chart.</p>
          
       
               
            </div>
        </div>

       
        
        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>

       </div>   

