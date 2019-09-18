<?php include "../includes/header/header0.php"; ?>
  
<title>Customer Order Frequency | Tableau</title>
<meta name="title" content= "Customer Order Frequency in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Customer Order Frequency| Dash-Intel" />
<meta name="description" content="Customer Order Frequency summary in Tableau.">

   
   

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
            <h2 class = "custom_more_margin">Tableau - Customer Order Frequency </h2>
                
                  <p>The task is to count the number of customers who have made 1 order, 2 orders and so on.</p>
               <div class="tableau_steps">   
            <p><strong>Step 1: </strong>Create a new <em>calculated field</em> in Tableau called "Orders By Customer" and type</p>
              <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {FIXED [Customer Name] : COUNTD([Order ID])}
                     </code></pre>
                     </div>
             <p><strong>Step 2:</strong> Drag "Orders By Customer" to Columns and "Customer Name" to Rows</p>
             <p><strong>Step 3:</strong> Right click "Customer Name" and select <em>Measure -> Count (Distinct)</em></p>
             <p><strong>Step 4:</strong> Right click "Orders By Customer" and select <em>Dimension</em></p>
             <p><strong>Step 5:</strong> Right click "Orders By Customer" and select <em>Discrete</em></p>
             <p><strong>Step 6:</strong> Right click "Orders By Customer" and select <em>Sort</em></p>
             <p><strong>Step 7:</strong> Sort Order Descending and Sort By Field "Customer Name with Aggregration as Count (Distinct)</p>
             <p><strong>Step 8:</strong> Edit the tool tip by clearing the default and replacing with:</p>
                   <div class="lesson_example">
               <pre><code class="language-tableau">
                    &lt;CNTD(Customer Name)&gt; customers have made &lt;Orders By Customer&gt; orders
                     </code></pre>
                     </div>
            </div>
        </div>
       
        
       <?php include "../includes/footer/footer.php"; ?>
    <?php include "../includes/footer/css.php"; ?>
    </div>   
    <!-- Ads will go here or link to other pages (right column nav) -->
    <?php include "../includes/navigation/right_nav.php"; ?>

