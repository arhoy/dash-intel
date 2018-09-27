<?php include "includes/header0.php"; ?>
  
  <title>Javascript Event Handling and Query Selectors | Dash-Intel</title>
<meta name="title" content= "Query Selectors Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript query selector | Dash-Intel"/>
<meta name="description" content= "Javascript query selectors basic examples..">
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>




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
            
            <h2 class = "custom_more_margin">Event handling with the DOM in Javascript</h2>
            <p>
            What is event handling? Event handling lets you create dynamic and interactive websites.
                 When a user clicks on a button, hovers over an icon or submits a form this information is captured in the DOM. 
                 Using event handling in javascript, you can customize the user experience on your website based on the actions taken. 
            </p>
              
                <h3>Event Handling using query selector</h3><br>
                <p>
                    Using querySelector is a popular way of adding event listeners.  
                </p>
                     <h4 class = "custom_h4">Listening to a click</h4>
                     <pre><code class = "language-js">   
                        function logHello(){
                            console.log('hello world');
                        }

                        // create event handler
                        document.querySelector('#form').addEventListener('click',logHello)
                      </code> </pre><br>
                    <p> 
                    We have created a function `logHello` that logs `hello world` whenever a user click on the element with id of 'form`.
                    The click type event listener will call the `logHello` function when the user click on the form element. 
                    </p>

         
        

        
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
