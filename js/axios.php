<?php include "includes/header0.php"; ?>
  
  <title>Javascript Intro to Webpack | Dash-Intel</title>
<meta name="title" content= "What is webpack | Dash-Intel" />
<meta name="metatitle" content= "Learning the basics of webpack | Dash-Intel"/>
<meta name="description" 
     content= "Webpack in javascript basics"
>
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>

<link rel="stylesheet" href="includes/prism.css" data-noprefix />



<body>
<?php include_once("includes/analyticstracking.php") ?>
<script src="includes/prism.js"></script>
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
            
            <h2 class = "custom_more_margin">Axios</h2>
            <p>Making calls to urls with axios</p>

               <pre>
               <code class = "language-js">   
               async function getResults(query){
                const key = 'Your API';
                const proxy = 'https://cors-anywhere.herokuapp.com/';
                try{
                    const res = await axios(`${proxy}http://food2fork.com/api/search?key=${key}&q=${query}`);
                    console.log(res);
                }
                catch(err){
                    console.log(err);
                }
            
               }

              getResults('tacos');
              </code> 
             </pre><br><br>
            <p>This example shows how to get an api request from a website. The website we are using is food2fork.com</p>

             <p>Step 1: Get the cdn from <a href="https://cdnjs.com/libraries/axios" target = "_blank">axios</a> or download in npm if you prefer.
              </p>
              <p>Step 2: Go to the food to fork website and generate your API key. </p>
              <p>Step 3: To allow requests from all domains, 
                we use a <a href="https://medium.com/netscape/hacking-it-out-when-cors-wont-let-you-be-great-35f6206cc646" target = "_blank">proxy</a>
                which in a nutshell allows requests to be made from all domains.     
             </p>
             <p>Step 4: Build out the asynchronous function <strong>getResults</strong>. Use a try, catch statement for error handling.
            
             </p>

             <p>Why axios? Axios is a light weight library that makes it easy to handle XMLHttpRequests. Unlike fetch, it works in older browsers. </p>




        

          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
