<?php include "../includes/header/header0.php"; ?>
  
<title>Percentiles in Tableau | Tableau</title>
<meta name="title" content= "Percentiles in Tableau in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Percentiles in Tableau| Dash-Intel" />
<meta name="description" content="Percentiles in Tableau summary in Tableau.">

   
   

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
            <h2 class = "custom_more_margin">Tableau - Percentiles in Tableau </h2>
                
 
              <p>To find percentiles in tableau, right click on the measure and select <em>percentile</em>:</p>
                   
            <img src="tableau-images/Stats.PNG" alt="stats_calculations_percentiles">
                     
                 <p>The drop down gives you several percentiles to choose from. By selecting <em>Edit in Shelf</em> (4th from the bottom) you can change to percentile to any value between 0 and 1.</p>
                      
                      <p><strong>Definition:</strong> The nth percentile is a value such that <em>n</em> percent of observations fall below that value.</p>
                      <p><strong>Formula:</strong> The equation that tableau uses to calculate percentiles is two steps:</p>
                       <p>Step 1: Get the rank in the ordered set:</p>
                       <div class="key_equation">
                        <equation class = "key_equation">$${\mbox{ (nth percentile(number of elements in set -1)) + 1}}$$</equation>
                        </div>
                        <p>Step 2: Use the rank from step 1 above to get value of the element in the set associated with the rank.</p>
                        <p>Step 3: Use <em>linear interpolation</em> if needed when the rank is not a whole number.</p>
                      <p>Common percentiles are:</p>
                      <ul>
                        <li>25th percentile (first quartile)</li>
                        <li>50th percentile (median)</li>
                        <li>75th percentile (third quartile)</li>   
                      </ul>
                      
            <p><strong>Note: </strong>There are many formulas for percentiles. Tableau uses the same formula as Excel's PERCENTILE.INC function</p>
                      <h3>Example:</h3><p>Use the table below to work out the 20th, 67th and 95th percentiles for the following test scores:</p>
                      
                                <!--Example Table for Percentiles (Start)-->  
                            <div class = "custom_table">
                            <table data-role="table" data-mode = "reflow" id="table-column-toggle" class="custom_table ui-responsive">
                             <thead>
                               <tr>
                                 <th>Rank (low to high)</th>
                                 <th>Test Scores</th>
                               </tr>
                             </thead>
                             <tbody>
                               <tr>
                                 <th>1</th>
                                 <td>51</td>
                               </tr>
                               <tr>
                                 <th>2</th>
                                 <td>55</td>
                               </tr>
                                  <tr>
                                 <th>3</th>
                                 <td>60</td>
                               </tr>
                               <tr>
                                 <th>4</th>
                                 <td>66</td>
                               </tr>
                                  <tr>
                                 <th>5</th>
                                 <td>73</td>
                               </tr>
                               <tr>
                                 <th>6</th>
                                 <td>74</td>
                               </tr>
                                  <tr>
                                 <th>7</th>
                                 <td>80</td>
                               </tr>
                               <tr>
                                 <th>8</th>
                                 <td>91</td>
                               </tr>
                                  <tr>
                                 <th>9</th>
                                 <td>94</td>
                               </tr>
                               <tr>
                                 <th>10</th>
                                 <td>97</td>
                             </tbody>
                           </table>
                        </div>
                         <!--Example Table for Percentiles (End)-->      
                         
                     <p><strong>20th percentile: </strong>Using the formula above:</p>
                       
                                   <pre><code class="formula">
                               <strong>nth percentile:</strong> 0.2
                               <strong>number of elements in set:</strong> 10
                               <strong>formula for rank:</strong> 0.2(10-1) + 1 = 2.8 
                               <strong>intuition:</strong> rank is between 2 and 3 so 20th percentile is between 55 and 60
                               <strong>linear interpolation:</strong>: 55 + 0.8(60-55) = 59
                               <strong>Conclusion:</strong>: 20th percentile is 59. 20% of test scores fall below 59.
                                 </code></pre>
                                 
                    <p><strong>67th percentile: </strong>Using the formula above:</p>
                       
                                   <pre><code class="formula">
                               <strong>nth percentile:</strong> 0.67
                               <strong>number of elements in set:</strong> 10
                               <strong>formula for rank:</strong> 0.67(10-1) + 1 = 7.03 
                               <strong>intuition:</strong> rank is between 7 and 8 so 67th percentile is between 80 and 91
                               <strong>linear interpolation:</strong>: 80 + 0.03(91-80) = 80.33
                               <strong>Conclusion:</strong>: 67th percentile is 80.33. 67% of all values fall below this.
                               </code></pre>
                
                     <p><strong>95th percentile: </strong>Using the formula above:</p>
                       
                                   <pre><code class="formula">
                               <strong>nth percentile:</strong> 0.95
                               <strong>number of elements in set:</strong> 10
                               <strong>formula for rank:</strong> 0.95(10-1) + 1 = 9.55
                               <strong>intuition:</strong> rank is between 9 and 10 so 95th percentile is between 94 and 97
                               <strong>linear interpolation:</strong>: 94 + 0.55(97-94) = 95.65
                               <strong>Conclusion:</strong>: 95th percentile is 95.65. 95% of all test values fall below this.
                               </code></pre>
                
                    <p><strong>Word of caution: </strong>Percentiles are not percentages. Percentiles determines where a particular value stands in the data set, or would stand if such a value existed. Percentiles are a measure to determine where a value stands relative to other values.</p>   
                    <p> Say everyone on a test has scored above 90%, but you score exactly 90%, then you would have done the worst on this test. In this case, your 90% test score would be the 0th percentile because nobody scored worse than you. </p>
                    <p>Now let's say your prof gives a super hard exam, and you score 50%. If everyone else scores below 50% then your test score of 50% is in fact the 100th percentile since nobody score better than you!</p>
       
       
       
       </div>
       
       
        
              <!-- Ads will go here or link to other pages (right column nav) -->
         <?php include "../includes/navigation/right_nav.php"; ?>
      <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>

       </div>   

