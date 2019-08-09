<?php include "includes/header0.php"; ?>
  
  <title>Immediately invoked function expressions | Dash-Intel</title>
<meta name="title" content= "Using Immediately invoked function expressions | Dash-Intel" />
<meta name="metatitle" content= "IIFEs in javascript | Dash-Intel"/>
<meta name="description" content= "What is iife in javascript and why should you use it.">
   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>




<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include_once("../includes/utils/analyticstracking.php") ?>
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >IIFE | javascript</h2>

        
             <h4 id = "es6_tutorial_let+const" class = "custom_h4">Summary of an IIFE</h4>

                <p>An <strong>IIFE</strong> stands for an 
                <strong>immediately invoked function expression</strong>. 
                    In short, an iife is a function that gets turned into a function expression and gets immediately executed at runtime, once and only once by the javascript engine.
                </p>
                <h4 id = "es6_tutorial_let+const" class = "custom_h4">Break down of what an IIFE actually is</h4> 
                <p> An iife can be broken down and understood with two main concepts. 
                <br><br><strong>Immediately invoked -</strong> 
                means the function gets called right after it is created. 
                <br><br><strong>Function expression -</strong> means that you don't need to name that function. It is an anonymous function that is <strong>not hoisted</strong>.
                A function expression is a anonymous function that is attached to a variable. 
                In the case of an iife, we <strong>don't</strong> need to attach it to a variable which is why it must be called immediately.
                </p>

            <h4 id = "es6_tutorial_let+const" class = "custom_h4">Syntax and Basic Example</h4> 
            <p>There are many ways to write an iife. Below shows a few ways to this. 
                In each case the syntax essentially turns the function into an expression which then immediately gets executed.</p>
              <pre><code class = "language-js">   
              // Variation 1: 
            (function(){
                const myName = 'Bob';
                console.log(myName);
            })();

            // Variation 2: 
            !function(){
                const myName = 'Anna';
                console.log(myName);
            }();

            // Variation 3: 
            void function (){
                const myName = 'Cambria';
                console.log(myName);
            }();

            // ** Reasons to use an iife **
            // Variables inside of it don't interfere with other global variables in our code.
            // It is a function that is immediatley executed 
            // It runs once an only once, unlike a regular function which can be called any number of times.
              </code> </pre><br>

     <h4 id = "es6_tutorial_let+const" class = "custom_h4">IIFE with Parameters</h4> 
     <p>
            An iife can take parameters. This is a really handy pattern that let's you use an iife with arguments. 
     </p>

              <pre><code class = "language-js">  
              (function myIIFE(greeting){
                const nameArr = ['Anna','Bob','Cambria'];
                nameArr.forEach(name => {
                        console.log(`${greeting} i'm ${name}!`);
                });
              })('Hello');
              </code> </pre>
              <p>Variables inside an iife are not accesible to the outside world. They are <strong>private variables</strong> only accessible to the iife and destroyed once the iife has executed.
              </p>

             <h4 id = "es6_tutorial_template_strings" class = "custom_h4">Count Down Function with an IIFE</h4>
             <p>
                Here is a slightly less trivial example.
             </p>

             <pre><code class = "language-js">  
        // count down function with iife
        (function myIIFE(greeting,startNumber,endNumber, timer = 1000){
             const mySetInterval = setInterval(()=>{

                    if(startNumber === endNumber){
                        console.log(`${greeting}`);
                        window.clearInterval(mySetInterval);
                    }
                    else{
                        console.log(`time until launch:${startNumber}`);
                    }

            startNumber--;
            },timer);

        })('blast off',3,0,500);
              </code> </pre><br>

        <p>This iife has three required parameters and one optional parameter, <em>timer</em>,   with a default value of 1000.</p>
        <p><strong>SetInterval</strong> and <strong>clearInterval</strong> is used to call the function a fixed number of times after a set delay</p>
        <p></p>
        <p>Once the startNumber is equal to the endNumber, we use <strong>clearInterval</strong> to stop the execution after the greeting is logged</p>
        
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
