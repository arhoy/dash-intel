<?php include "includes/header0.php"; ?>
  
  <title>Es6 Basics of inheritance | Dash-Intel</title>
<meta name="title" content= "Inheritance using Es6 | Dash-Intel" />
<meta name="metatitle" content= "Inheritance using es2015| Dash-Intel"/>
<meta name="description" content= "Javascript inheritance using es6/es2015. Using the constructor, extends and super method.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >Javascript ES6/ES2015</h2>

        
             <h4 id = "es6_tutorial_let+const" class = "custom_h4">Example of inheritiance in javascript using ES6/ES2015</h4>

                <p>The following <strong>Person</strong> class is created using ES6 syntax</p>
              <pre><code class = "language-js">   
              class Person {
                    constructor(firstname,lastname){
                        this.firstname = firstname;
                        this.lastname = lastname;
                    }
                    sayHello(){
                        console.log(`Hello my name is ${this.firstname} ${this.lastname}!`);
                    }
                }
              </code> </pre>

              <p>This Person class has the properties of <strong>firstname</strong> and <strong>lastname</strong> as defined in the constructor function.
                It also has the <strong>sayHello</strong> method.
               </p>

               <p>
                Next, the <strong>class</strong> Student will inherit all the properties and methods of the Person class. This is done using the extends keyword.
                The <strong>super</strong> keyword is used to access and call the parents constructor. In this case, the Parent is the Person class.
               </p>


              <pre><code class = "language-js">  
              class Student extends Person {
                    constructor(firstname,lastname,school,major){
                    super(firstname,lastname);
                    this.major = major;
                    this.school = school;
                    }
                    sayHello(){
                        console.log(`Hello my name is ${this.firstname} ${this.lastname} majoring in ${this.major} at ${this.school}!`);
                    }
                }
              </code> </pre>
              <p>The arguments of <strong> super </strong>are only the parents constructor, and the arguments of the constructor function are all the properties of the student class.
                Two new properties of the student we must declare them as shown above.
              </p>
       

             <h4 id = "es6_tutorial_template_strings" class = "custom_h4">Try it out</h4>
             <p>
                Try out the code above by creating an instance of the the classes above.
             </p>

             <pre><code class = "language-js">  

             // create a new person instance
                const anna = new Person('Anna','Maluk');
                anna.sayHello();

                //create a new student instance
                const ava = new Student('Ava', 'Ivanovic','University of Belgium','Psychology');
                ava.sayHello();
        
              </code> </pre><br>

              <p>Note: The <strong>class</strong> keyword is just another way to create function constructors and prototype methods using ES5 syntax.
              Classes are <strong>syntactic sugar</strong>. Classes in javascript, under the hood, are really just functions and objects. When using classes, we can use the concept of inheritance by using 
              <strong>extends</strong> and <strong>super</strong> keywords.
              </p>
        
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
