<?php include "../includes/header/header0.php"; ?>
  
<title>LOD Basics | Tableau</title>
<meta name="title" content= "LOD Basics in Tableau | Dash-Intel" />
<meta name="metatitle" content= "LOD Basics| Dash-Intel" />
<meta name="description" content="LOD Basics summary in Tableau.">

   
   

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
            <h2 class = "custom_more_margin">Tableau - LOD Basics </h2><br>

               <p><strong>LOD</strong> stands for <em>level of detail</em>. LOD expressions as the name suggests, lets the user control the level of detail the measure is aggregrated to. Without LOD expression, a measure is aggregrated to the level of detail of the visualization. (I.e the current filter context determined by the dimensions in the row, column and filter shelves. In other words with LOD expressions, you can override the filter context and choose the level of detail for your measures. </p>
            <h3>Creating your first LOD Expression</h3>
            <p>Create a new <em>calculated field</em> in Tableau called "Sales By Customer" and type</p>
              <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {FIXED [Customer Name] : SUM([Sales])}
                     </code></pre>
                     </div>
                <p>This ensures that regardless of the fields in the visual, <em>sales</em> is always aggregated at the customer level.</p>

                <p><strong>Try It:</strong> Using Tableau's sample superstore data, add the following to the rows shelf:</p>
                <ul>
                    <li>Customer Name</li>
                    <li>Order Id</li>
                    <li>Sales By Customer</li>
                    <li>Sales</li>
                </ul>
                <p>You should see sales being aggregrated on the Customer Name Level for "Sales By Customer" and being aggregrated at the Order ID level for "Sales". If you remove Order ID, the two sales columns will match since the aggregration of "Sales" is being controlled by the visualization (i.e the dimensions placed on the row shelf).</p>
                
           <h3>Syntax of LOD Expression</h3>
               <p>There are three LOD Tableau Keywords:</p>
               <ul>
                   <li><em>FIXED</em> is a LOD keyword that Tableau uses to fix the level of detail on the chosen dimension. The keyword FIXED makes Tableau ignore the other dimensions in the view.</li>
                   <li><em>INCLUDE</em> is a LOD keyword that Tableau uses to include the specified dimension in addition to dimensions in the visual. </li>
                   <li><em>EXCLUDE</em> is a LOD keyword that Tableau uses to omit the dimensions in the visual.</li>
               </ul>
               <p>The general syntax for writing LOD expressions is </p>
               <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {FIXED [Name of Dimension] : SUM([Name of Measure])}
                     </code></pre>
                     </div>
                     
                        <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {INCLUDE [Name of Dimension 1], [Name of Dimension 2],...,[Name of Dimension N] : SUM([Name of Measure])}
                     </code></pre>
                     </div>
                     
                              <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {EXCLUDE [Name of Dimension 1], [Name of Dimension 2],...,[Name of Dimension N] : SUM([Name of Measure])}
                     </code></pre>
                     </div>
                     
        <p>The level of aggregration can be SUM, AVG, MEDIAN, COUNT, ATTR, etc</p>             
        <p>When using INCLUDE or EXCLUDE you can specify multiple dimensions. To Ignore all dimensions in the filter,  surround the meaure with curly braces. For example:</p>
        
                    <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {SUM([Sales])}
                     </code></pre>
                     </div>
        <p>This will return all sales regardless of the dimensions in the visual.</p>
    

                      <br>
                       <br>
           </div>
       
            <?php include "../includes/footer/footer.php"; ?>
    <?php include "../includes/footer/css.php"; ?>
    </div>   
    <!-- Ads will go here or link to other pages (right column nav) -->
    <?php include "../includes/navigation/right_nav.php"; ?>


