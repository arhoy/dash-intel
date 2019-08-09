<?php include "includes/header0.php"; ?>
  
  <title>Javascript Objects | Dash-Intel</title>
<meta name="title" content= "What are Javascript Objects | Dash-Intel" />
<meta name="metatitle" content= "Javascript Objects basics | Dash-Intel"/>
<meta name="description" content= "In javascript an object is simply a collection of properties and methods that relate to the characteristics of the object they are defined in">
   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<?php include "includes/css/styles.php"; ?>
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
            
            <h2 class = "custom_more_margin" id = "whatIsJS" > Javascript Objects</h2>


                <h4 class = "custom_h4">What is a javascript object</h4>
            <p>
            In the most simple terms, an <strong>object</strong> in javascript refers to a collection of properties and methods. 
            <br><br>
            Properties are like adjectives, they describe the characteristic of that object.
        
            Methods are like verbs which describe what the object does. A method in javascript is a function that is associated with the given object it is in. 
            
            The object itself then can be thought of as a noun, something that describes a person, place or thing.
            <br><br>
            Data values that are related to each other are often grouped into an object. Keeping all these data values in one object
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
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
