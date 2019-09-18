<?php include "../includes/header/header0.php"; ?>
  
<title>% Of Total Sales | Tableau</title>
<meta name="title" content= "% Of Total Sales in Tableau | Dash-Intel" />
<meta name="metatitle" content= "% Of Total Sales| Dash-Intel" />
<meta name="description" content="% Of Total Sales summary in Tableau.">

   
   

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
            <h2 class = "custom_more_margin">Tableau - Calculating % Of Total Sales </h2>
                
             <p>The task is to find the percentage of total sales by region. There are two ways to do this in Tableau.</p>
        <p><strong>Method 1 (LOD Expression):</strong></p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new <em>calculated field</em> in Tableau called "All Sales" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {SUM([Sales])}
                 </code></pre>
                 </div>
         <p><strong>Step 2:</strong> Create a new <em>calculated field</em> called "% of Total" and type</p>
           <div class="lesson_example">
                <pre><code class="language-tableau">
                 [Sales]/[All Sales]
                 </code></pre>
                 </div>
         <p><strong>Step 3:</strong> Right click "% of Total" and select <em>Default Properties -> Number Format -> Percentage</em></p>
         <p><strong>Step 4:</strong> Drag "Region" to rows and "% of Total" to rows</p>
        <p><strong>Step 5:</strong> Sort Order Descending and Sort By Field "Sales" with Aggregration as Sum</p>
        </div><br>
       
        
        <p><strong>Method 2 (Quick Table Calc):</strong></p>
        <div class = "tableau_steps">
                <p><strong>Step 1:</strong>Drag "Region" and "Sales" to Rows</p>
                <p><strong>Step 2:</strong>Right click on "Sales" and select <em>Quick Table Calculation -> Percentage of Total</em> </p>
                <p><strong>Step 3:</strong> Sort Order Descending and Sort By Field "Sales" with Aggregration as Sum</p>
        </div>
        
         </div>
       
       
       <?php include "../includes/footer/footer.php"; ?>
    <?php include "../includes/footer/css.php"; ?>
    </div>   
    <!-- Ads will go here or link to other pages (right column nav) -->
    <?php include "../includes/navigation/right_nav.php"; ?>

