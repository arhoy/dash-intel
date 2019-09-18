<?php include "includes/header0.php"; ?>
  
<title>Permutations and combinations | Dash-Intel</title>
<meta name="title" content= "Power BI Permutations and Combinations | Dash-Intel" />
<meta name="metatitle" content= "Permutations and combinations in Power BI | Dash-Intel"/>
<meta name="description" content= "Permutation function Permut(n,K) returns the number of ways k objects can be selected from n without replacement when the order is important. ">
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>
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
      
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
                <h4 class = custom_h4> Statistical Functions</h4>
                <h5><em>Permutation and Combination</em> functions</h5>
                
                <h5><em>PERMUT(n,k)</em></h5>
                <p>Returns the number of ways k objects can be selected from n without replacement
                    where the order of the selected objects matters. 
                </p>
                
                 <h6>Example:</h6>
                 <p>A basket of fruit contains an apple, an orange and a banana. Find the number of ways I can pick 2 fruit out of the basket where the order is important.</p>
                 <p>This is easy enough to list out by hand:</p>
                 <ul>
                     <li>{apple,orange,}</li>
                     <li>{apple,banana}</li>
                     <li>{orange, banana}</li>
                     <li>{orange,apple}</li>
                     <li>{banana,apple}</li>
                     <li>{banana,orange}</li>
                 </ul>
                 
                 <p class = "alert alert-info"><strong>The order is important: </strong>ie. The set {apples, oranges} is counted as a different set than {oranges,apples}</p>
                 <p>Using POWER BI write:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                  permutations = PERMUT(3,2)
	            </pre><br>
	            
	               <h5><em>COMBIN(n,k)</em></h5>
                <p>Returns the number of ways k objects can be selected from n
                    where the order does NOT matter. 
                </p>
                <h6>Example:</h6>
                <p>A basket of fruit contains an apple, an orange and a banana. Find the number of ways I can pick 2 fruit out of the basket where the order does not matter.</p>
                    <ul>
                     <li>{apple,orange,}</li>
                     <li>{apple,banana}</li>
                     <li>{orange, banana}</li>
                 </ul>
               <p>Using POWER BI write:</p>
               <pre class="brush:dax; title: ; notranslate" title="">
                  combinations = COMBIN(3,2)  
	            </pre>
               
               <h5>Lottery Example:</h5>
               <p>You purchase one lotto 6-49 ticket. The win the jackpot, you need to guess 6 numbers from 49. What are the odd?</p>
               
               <p>Using POWER BI write:</p>
                <pre class="brush:dax; title: ; notranslate" title="">
                  combinations = COMBIN(49,6)  
	            </pre>
	            <p> That returns about 14 million different combinations. So the odds are approx. 1 in 14 million. The order of drawing 6 numbers correctly does not matter. If the order did matter, you would need to mutliply the number of combinations by 6! So the odds would go down to 1 in 10,068,347,520. In otherwords, it would take a really long time to get a winner.
	            </p>
            
               <h5>The relationship between Permutations and Combinations:</h5>
               <p>Permutations and Combinations are related as follows:
               </p>
                <pre class="brush:dax; title: ; notranslate" title="">
                    PERMUT(n,k) = COMBIN(n,k) * FACT(k)
	            </pre>
              <ul>
                  <li>Where <em>FACT(k)</em> is the factorial function in POWER BI</li>
              </ul>
               <p>Mathematically the relationship is given as:</p>
               <div class="latex">
                  PERMUT(n,k) =  $ \dfrac{n!}{(n-k)!}$ <br><br>
                  COMBIN(n,k) = $ \dfrac{n!}{(n-k)!k!}$
               </div>
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
