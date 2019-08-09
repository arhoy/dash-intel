<?php include "../includes/header/header0.php"; ?>
  
<title>LOD Target Calcluations | Tableau</title>
<meta name="title" content= "LOD Target Calcluations in Tableau | Dash-Intel" />
<meta name="metatitle" content= "LOD Target Calcluations| Dash-Intel" />
<meta name="description" content="LOD Target Calcluations summary in Tableau.">

   
   
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
            <h2 class = "custom_more_margin">Tableau - LOD Target Calcluations </h2>
       <p>Create a rep score card visualizing target vs actual sales</p>
        <div class="tableau_steps">
       <p><strong>Step 1: </strong>Create a <em>calculated field</em> in Tableau called "Amount - Target" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                [Amount] - [Target]
                 </code></pre>
          </div>
          <p><strong>Step 2: </strong>Add "Amount - Target" to the both the column shelf and color shelf and add "Rep Name" to row shelf </p>
          
          <p><strong>Step 3: </strong>Convert "Amount -Target" to a continuous (green) measure if needed
          <p><strong>Step 4: </strong>Right click on "Rep Name" in the Rows shelf and select:</p>
          <ul>
          <li>sort</li>
          <li>sort order: Descending</li>
          <li>sort by: Field -> Amount - Target</li>
          <li>Aggregation: Sum</li>
          </ul>
          <p><strong>Step 5: </strong>Select <em>Apply</em> and then <em>Ok</em>
          
          <p class = 'alert-success'><strong>Reflect: </strong> The top sales rep in this chart is doing super well. But how realistic are the targets? Perhaps they need to be adjusted by the manager. To view targets set by each rep:</p>
                
          <p><strong>Step 6: </strong>Add "Sales Rep Targets" to Detail</p>
           <p><strong>Step 7: </strong>Select <em>Analytics</em> in the top left and d
           rag reference line to cell. In the pop up menu:</p>
           <ul>
               <li>Change the Value to <em>SUM(Sales Rep Target)</em> and hit ok</li>
           </ul>
              <p><strong>Step 8: </strong> Replace "Amount-Target" in the column shelf with "Sales Rep Amount"
            <p><strong>Step 9: </strong> Type <em>ctrl + w</em> to swap the rows and columns
             
          <p class = 'alert-success'><strong>Option: </strong> Change the color to show blue if the rep has hit his/her target or red if they have not:</p>
           <p><strong>Step 10: </strong>Create a <em>calculated field</em> in Tableau called "Target Hit" and type:</p>
               <div class="lesson_example">
                <pre><code class="language-tableau">
               If [Amount - Target] > 0 THEN "yes" ELSE "no" END
                 </code></pre>
                </div>
            <p><strong>Step 11: </strong>Drag "Target Hit" to the color shelf and double click on color to edit the colors.</p>
            </div>
       
       </div>
       
                <!-- Ads will go here or link to other pages -->
       <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
       </div>   



