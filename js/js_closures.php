<?php include "includes/header0.php"; ?>
  
  <title>Brief Intro to closures | Dash-Intel</title>
<meta name="title" content= "Closures made easy | Dash-Intel" />
<meta name="metatitle" content= "Closures explained easy | Dash-Intel"/>
<meta name="description" content= "Closure is when an inner function has access to the variables and parameters of it's parent function, even after the parent function has returned.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >Closures | javascript</h2>

        
             <h4 id = "es6_tutorial_let+const" class = "custom_h4">Definition</h4>

              <p>
              Definition: Closure is when an inner function has access to the variables and parameters of it's parent function, even after the parent function has returned.
              </p>

          

     <h4 id = "es6_tutorial_let+const" class = "custom_h4">Closure with no parameters</h4>
        
     <p>
          To get a grasp of exactly what is happening, try the following code:
     </p>
     <pre><code class ="language-js" >
     function greeting(){
       const name = "Anna";
       console.log('this is the outer function yay!');
        return function(){
            console.log('this is the inner function booya!');
            console.log(`Hi my Name is ${name}`);
        }
     }
     // running the closure.
     const hi = greeting()();

     // if you simply run greeting(), then nothing happens as the inner function was not called.
     // this means the inner function has access to <strong>name</strong> even after the outer function has returned.
     </code></pre><br>
    <p> We use the concept of <strong>closure scope chain</strong> to call the outer function first and then the nested inner functions. 
    If you try running only  <span class = "myword myword__green">greeting()</span> then only the outer function will get called.
     </p>
       <h4 id = "es6_tutorial_let+const" class = "custom_h4">Example of closure with parameters</h4> 
        <p>Again, use the pattern of declaring a function and then returning an anonymous function within the parent function to make use of closures</p>
        <pre><code class = "language-js">   
        function calculateCarPrice(make){
        const message = `The price of your ${make} is: `;
        const currentYear = new Date().getFullYear();

            return function(dateOfPurchase){
                    if(make === 'honda'){
                        return `The price of your ${currentYear - dateOfPurchase} year old ${make} is: $20,000 `;
                    }
                    else{
                        return `The price of your ${currentYear - dateOfPurchase} year old ${make} could not be determined`;
                    }
            }
        }

        // run the closure above
        const myCarPrice1 = calculateCarPrice('honda')(2000);
        const myCarPrice2 = calculateCarPrice('Tesla')(2011);
        console.log(myCarPrice1);
        console.log(myCarPrice2);
        </code> </pre><br>

        <p>You can read a lot more about closures on <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Closures" target = "_blank">mdn</a>

        </p>

        
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
