
<?php include "../includes/header/header0.php"; ?>
  
  <title>Javascript Object Constructors | Dash-Intel</title>
<meta name="title" content= "What are object constructors in JS | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript Object Constructors | Dash-Intel"/>
<meta 
    name = "description"
    content = "Object constructors are used to create blueprints for an object. They are a more dynamic way of create objects 
    and are very useful when you create many objects of the same type. For example, you can have a Person Object constructor
    that can be used as a blueprint to create many other objects with name, birthYear and gender properties. "
 >
   


<?php include "../includes/header/header.php"; ?>
 
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
<!-- Global Components -->
<!-- Global Components -->
<?php include "../includes/header/headmenu.php"; ?>
 
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
  
<?php include "../includes/navigation/left_nav.php"; ?>
           
            
        <!--Main Content-->
            
            <h2 class = "custom_more_margin">Object Constructors in JS</h2><br>
         <p>
         Object constructors are used to create blueprints for an object. They are a more dynamic way of create objects 
    and are very useful when you create many objects of the same type. For example, you can have a Person Object constructor
    that can be used as a blueprint to create many other objects with name, birthYear and gender properties.
         </p>
             
                     <h4 class = "custom_h4">Creating your first Object Constructor (Step 1)</h4>
                     <p>
                        The following creates a person object constructor with properties of name, birthYear ,company and gender.
                     </p>
                     <pre><code class = "language-js">   
                     //Create a `Person` object constructor
                        function Person(name,birthYear,company,gender){
                            this.name = name;
                            this.birthYear = birthYear;
                            this.company = company;
                            this.gender = gender;
                         }
                      </code> </pre><br>

                    <h4 class = "custom_h4">Using this Object Constructor (Step 2)</h4>
                     <p>
                        After creating the person object constructor, we can use it to create other `people objects`.
                     </p>
                     <pre><code class = "language-js">   
                     //Create a `Person` object constructor
                        function Person(name,birthYear,company,gender){
                            this.name = name;
                            this.birthYear = birthYear;
                            this.company = company;
                            this.gender = gender;
                         }

                    // Create a new Person object `mark`.
                    const mark = new Person('Mark',1984,'Facebook','male');
                      </code> </pre><br>
              
                      <h4 class = "custom_h4">Add an object method (Step 3)</h4>
                     <p>
                        Adding a `method` to the existing person object `mark` is done outside the person object constructor
                     </p>
                     <pre><code class = "language-js">   
                     //Create a `Person` object constructor
                        function Person(name,birthYear,company,gender){
                            this.name = name;
                            this.birthYear = birthYear;
                            this.company = company;
                            this.gender = gender;
                         }

                    // Create a new Person object `mark`.
                    const mark = new Person('Mark',34,'Facebook','male');

                    // Add a method to the existing Person object `mark`
                    mark.greeting = () =>{
                    console.log(`Hi my name is ${mark.name} and I am CEO of Facebook`); // this greeting is unique to mark.
                     }
                      </code> </pre><br>


                       <h4 class = "custom_h4">Use the Object Constructor to create more person objects (Step 4)</h4>
                     <p>
                       Using the Person object constructor we have create above, we can create similar objects using the Person object blueprint.
                     </p>
                     <pre><code class = "language-js">   
                
                    // Create a new Person object `elon`.
                     const elon = new Person('Elon',1971,'SpaceX','male');

                    // Create a new Person object `bill`.
                     const bill = new Person('Bill',1955,'Microsoft','male');

                      // Create a new Person object `marissa`.
                     const bill = new Person('Marissa',1975,'Yahoo','female');

                  
                      </code> </pre><br>


                
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pbirthYears -->
   <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
