<?php include "includes/header0.php"; ?>
  
<title>Adding Dates | Tableau</title>
<meta name="title" content= "Adding Dates in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Adding Dates| Dash-Intel" />
<meta name="description" content="Adding Dates summary in Tableau.">

   
   
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
            <h2 class = "custom_more_margin">Tableau - Creating Sets </h2>
        
        <div class="lesson_example">
                <pre><code class="image">
                    <img src="tableau-images/create_set.PNG" alt="creating_sets_tableau">
                 </code></pre>
         </div>
              <p>A set is a subset of data. Tableau lets you create custom sets based on:</p>
              <ul>
                  <li>A selection from a list</li>
                  <li>A specific condtion</li>
                  <li>A top N list based on metrics in your data set</li>
              </ul>
    <div class = 'content_subheader'><h2 class = 'tutorial_sub_header'>Combining Sets:</h2></div>
       <p>Combining sets are useful in cases when you want to show:</p>
       <ul>
           <li>Members that exist in both sets</li>
           <li>Members that exist in one set and not the other</li>
           <li>Members that are in none of the sets</li>
       </ul>   

       <p>How to combine sets:</p>
       <ul>
           <li>Create two different sets in tableau <em>on the same</em> dimension</li>
           <li>On of the sets you created: right click and select <em>Create combined set</em></li>


            <li>You can choose how you want to combine the set by looking at the venn diagram tableau provides</li>
        </ul>
        <p>Options on Combing sets:</p>
        <ul>
        <li><strong>All members in both sets:</strong> returns members in the first set only,the second set only or in both sets. </li>
        <li><strong>Shared members in both sets:</strong> returns members part of both the first set and the second set.</li>
        <li><strong>The third option</strong> returns members in the first set but not in the second set.</li>
         <li><strong>The fourth option</strong> returns members in the second set but not in the first set.</li>

       </ul>
        <p>Example: To practice, use Tableau's sample superstore data to create a combined set showing revenue over $10,000 and profit more than 0 by customer name. Then edit the combined set to show customers with negative profits, yikes!</p>

        <p>You should get the following:</p>
         <div class="lesson_example">
                <pre><code class="image">
                    <img src="tableau-images/sets_example1.PNG" alt="stats_calculations">
                 </code></pre>
        </div>

        <p>Side Notes: The set created here is a <em>dynamic set</em>. This means that if the data changes, the sets will reflect this to show the new data points that fall into the set when the data refreshed.</p><br>

        <h3>Some Ideas for Sets in Tableau:</h3>
              <ul>
                  <li>Showing the top N members based on a criteria. Try this with a paramater control</li>
                  <li>Showing members in/out of a set based on specific color (i.e drag set to color)</li>
                  <li>Filtering data points you don't need, but want this filter to be dynamic.</li>
                  <li>Use a set if you find yourself using filtering on a dimension over and over again.</li>
              </ul><br>

        <h3>Dynamic Sets vs Statics Sets</h3>
        <p>An example of a static set in Tableau is when you manually a few customer names from the pre-existing list. If a new customer name is entered, they will be exluded from your set. One way to avoid this is by selecing <em>Use All</em> in the set options.</p>
        <p>A dynamic set is based on a specific condition. For instance, customers with revenue over $10000 or top profitable customers will be dynamic as they will update with changes in the data.</p>
        <ul></ul><br>
        <h3>Set vs. Filters</h3>
        
            <p>Filters only apply to a tableau worksheet by default. (you can change a filter to apply to multiple sheets). You can think of a set in tableau as a pre-defined filter which can be used repeatedly throughout a workbook</p><br>
        

        <h3>Data blending</h3>
        <p>When you are blending data, you cannot use or create a set from the secondary data source.</p>    

        </div>
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
