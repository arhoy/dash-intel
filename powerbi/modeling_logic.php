<?php include "includes/header0.php"; ?>
  
<title>Logical Functions in Power Bi | Dash-Intel</title>
<meta name="title" content= "Logical Functions in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Summary of Logical functions | Dash-Intel"/>
<meta name="description" content= "This section outlines the basic syntax for logical function in Power Bi. Combine if, and, or &amp; not to create powerful calculated columns.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
            <div class="whitebox">
            <h4 class = custom_h4>Summary of Basic Logical Functions</h4>
                
             <h5> List of Basic Logical Functions</h5>
                      <ul>
                          <li>IF</li>
                          <li>AND</li>
                          <li>OR</li>
                          <li>NOT</li>
                      </ul>
             </div>
                 
            <div class="whitebox">
                <h5>The <em>IF</em> FUNCTION:</h5> 
                <p><strong>SYNTAX:</strong> IF(<em>logical test</em>, <em>value if true</em>, <em>value if false</em>)</p> 
                 <p> An <em>IF</em> statement is composed of the following</p>
                    <ul>
                        <li>A logical test</li>
                        <li>Result if true</li>
                        <li>Result if false</li>
                    </ul>
                    <p>If the logical test is true, it returns the value or string you specify.</p>
            </div>
            
            <div class="smokebox">  
               <h5>Example:</h5>   
                <p>This <a href="modeling_measure+calculated+columns.php" target="_blank"><em>Calculated Column</em></a> will check if the state is in New York:</p>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                        State Known For = IF(TransactionData[State] = "New York", "The Empire State", "Other")
	             </pre>             
                 
                <p> If this condition is true, it will return "The Empire State", otherwise it will return "Other". You can specify any value you like or leave the third argument empty as it is optional. 
                </p>
                
                <p>However, what if we want to check multiple states? Well we could use nested IF functions but this is unnecessarily messy. Instead use the <a href="modeling_switch.php" target="_blank">SWITCH function</a></p>
            </div>   
            <div class="smokebox">
             
              <h5>Using Logical <em>AND</em></h5> 
              <p>A Venn diagram below illustrates <em>AND</em></p>
               
              <img class = "venn" src="images\AandB.png" alt=""  style = "max-width:600px;"><br><br>
              
              <p>Event A and Event B are denoted as circles. The intersection of two events A and B (also written as A &amp;&amp; B) is the shaded area in the diagram above.</p>
              
                <p><em>AND</em> is often used in logical expressions to check if both conditions A and B are true.
                    
                <p>This example checks if the state is New York <em>and</em> if profit is more than 10,000.</p>
                      
              <pre class="brush:dax; title: ; notranslate" title="">
                        Business Good in NY = IF(
                                AND(TransactionData[State] = "New York", TransactionData[Profit] > 10000),
                                "Doing Well in the Empire State","Other"
                                )
	           </pre>  
                      <p>or alternatively</p>
                      
                <pre class="brush:dax; title: ; notranslate" title="">
                        Business Good in NY = IF(
                                TransactionData[State] = "New York" &amp;&amp; TransactionData[Profit] > 10000,
                                "Doing Well in the Empire State","Other"
                                )
	           </pre> 
                    
                        
              <p> Both conditions need to be true in order to return the result "Doing Well in the Empire State".  <br> Note: the second method is strongly preferred (<em>AND</em> function is rather limited in that it only takes two arguments).
              </p>
              
              <p>For example with the &amp;&amp; operator we can easily string together as many requirements as needed: </p>
               
               <pre class="brush:dax; title: ; notranslate" title="">
                      ROI above 80% AND Revenue > 1000000 AND Profit > 100000 = IF(
                                 TransactionData[ROI] > 0.8 &amp;&amp;
                                 SUM(TransactionData[Revenue]) > 1000000 &amp;&amp; 
                                 SUM(TransactionData[Total Profit]) > 10000,
                                 "Business is GOOD", "It's Okay")
	           </pre>
             
            </div>
              
            <div class="smokebox">
            <h5>Using Logical <em>OR</em></h5> 
             <p>A Venn diagram below illustrates <em>OR</em></p>
               
              <img class = "venn" src="images\AorB.png" alt=""  style = "max-width:600px;"><br><br>
              
              <p>
                  The union of events is denoted A or B (also written as A || B) and is shaded in the diagram above. A or B is True if either A is true, B is true or both A and B are true 
              </p>
                <table></table>
                 
                <p><em>OR</em> is often used in logical expressions to check if one or more events are true.
                
                <p>For example, let's check to see if the state is New Jersy or New York:</p>
             
             <pre class="brush:dax; title: ; notranslate" title="">
                       New Jersey || New York = IF( 
                            OR(TransactionData[State] = "New Jersey", TransactionData[State] = "New York"),
                            "New York or New Jersey","Other State"
                            )
	         </pre> 
                 
                  <p>or alternatively</p>
                      
              <pre class="brush:dax; title: ; notranslate" title="">
                         New Jersey || New York = IF(
                                TransactionData[State] = "New York" || TransactionData[Profit] > 10000,
                                "Doing Well in the Empire State","Other"
                                )
	           </pre> 
              
              <p>  Again, the operator || is strongly preferred.
              </p>
              
          </div>
        <div class="smokebox">
            <h5>Using <em>NOT</em></h5> 
               
               <p>A Venn diagram below illustrates A and NOT B</p>
               
               <img class = "venn" src="images\AandNotB.png" alt=""  style = "max-width:600px;"><br><br>
                <p>Used to check if the condition is NOT True:</p>
                
                
                <pre class="brush:dax; title: ; notranslate" title="">
                   Isn't The Empire State = IF(NOT(TransactionData[State] = "New York"),True, False)       
	           </pre> 
        </div>
        <div class="smokebox">
            <h5>Combining What We Learned</h5> 
            
                <pre class="brush:dax; title: ; notranslate" title="">
                        Wacky Business Good Criteria = IF(
                             TransactionData[ROI] > 0.8 || 
                             SUM(TransactionData[Revenue]) > 1000000 || 
                             SUM(TransactionData[Total Profit]) > 0.5*SUM(TransactionData[Revenue]),
                             "Business is GOOD", "It's Okay")   
	           </pre> 
               
               <p> This example is slightly more complex. Lets break it up. It will return "Business is Good" if any of the following conditions are True. In this case we have three conditions.</p>
              <ul>
                  <li>ROI greater than 80%</li>
                  <li>Revenue greater than $1,000,000</li>
                  <li>Profit greater than half of the Total Revenue</li>
              </ul>
               
            <p>The following is a calculated column that acts as filter to return True <em>IF</em>
                 <em>NOT</em> a holiday <em>AND</em> State is in New Jersey <em>OR</em> New York 
            </p>
            
            <pre class="brush:dax; title: ; notranslate" title="">
            
            NON-Holidays AND (New Jersey OR New York)) = IF(
	            NOT(TransactionData[Holiday]) &amp;&amp; 
	            (TransactionData[State] = "New Jersey" || TransactionData[State] = "New York"),
	            True, False)
           
           </pre> 
             
             <p>
             See also <a href="modeling_calendar.php" target="_blank">Calendar Dates</a> on how to make a Holiday filter in Power BI
             </p>
            </div>
        
        <p>Up Next: <a href="modeling_switch.php">The Switch Function.</a></p><br>
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
