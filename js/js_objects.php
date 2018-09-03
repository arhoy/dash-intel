<?php include "includes/header0.php"; ?>
  
  <title>Javascript Objects | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript is a cross platform, light weight object oriented programming language used most commonly in the browser. With Node.JS Javascrip can be used as a server side language too.">
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "includes/css/styles.php"; ?>
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
            
            <h2 class = "custom_more_margin" id = "whatIsJS" > Javascript Objects</h2>


                <h4 class = "custom_h4">What is a javascript object</h4>
            <p>
            In javascript an <strong>object</strong> refers to a collection of data values. 
            Often data values that are related to each other are grouped into an object. Keeping all these data values in one object
            allows for more maintable and better organized code compare to having multiple variables floating around.
            </p>     

            <h4 class="custom_h4">An example</h4>
            <img class = "svg__cat" src="./img/cat.svg" alt="Fluffy the Black Cat">
                <p>
                    The cat pictured above can be used to illustrate javascript objects. The cat is an <strong>object</strong>
                    with <strong>properties</strong> and <strong>methods</strong>. 
                    In javascript, objects can have one or more properties and methods. 
                    The properties and methods for this cat are:
                </p>
                  <table class="table">
                        <thead>
                        <tr>
                            <th>Properties</th>
                            <th>Methods</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>cat.name = 'Fluffy'</td>
                            <td>cat.jump()</td>
                           
                          
                        </tr>
                        <tr>
                           <td>cat.color = 'Black'</td>
                           <td>cat.eat()</td>
                 
                        </tr>
                        <tr>
                        <td>cat.age = 2</td>
                        <td>cat.sleep()</td>
                  
                        </tr>
                        </tbody>
                    </table>
          

               <p>
                <strong>Properties</strong> for an object represent the attributes for that object. Properties for objects get stored as values.
                The example below shows how to access on objects property (using the dot notation): 
            
               </p>
                        
                         <pre><code class = "language-js">   
                         // example of object with properties only.
                         const cat = {
                            name: "Fluffy",
                            color : "black",
                            age       : 2
                            }
                        };
                        console.log(cat.age); // returns age of cat
                      </code> </pre><br>
                        <p>
                        <strong>Methods</strong> for an object typically describe what an object can do. Methods on an object are stored as functions.
                        The example below shows how to access an the method of an object (using the dot notation):
                        </p>
                         <pre><code class = "language-js">   
                         // example of object with properties and a method.
                         const cat = {
                            name: "Fluffy",
                            color : "black",
                            age       : 2,
                            greeting: function(){
                                return `hello my name is ${this.name} and I am like to nap.`;
                            }
                            
                        };
                        console.log(cat.greeting()); // returns greeting
                      </code> </pre><br><br>


           
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
