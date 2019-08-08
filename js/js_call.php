<?php include "includes/header0.php"; ?>
  
  <title> Using Call methods in Javascript | Dash-Intel</title>
<meta name="title" content= "What is Call in Javascript | Dash-Intel" />
<meta name="metatitle" content= "Call in Javascript | Dash-Intel"/>
<meta name="description" content= "Call method in javascript and how to use some examples">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >Using Call with Objects</h2>

        
             <h4 class = "custom_h4">What is call</h4>

               <p> <strong>Call</strong> is a method in javascript that can be used in objects
               We can use call to point the <em>this</em> keyword to a specific object. For example:
               </p>

      <pre><code class = "language-js">   
      function greeting(){
        console.log(`Hello this is ${this.firstName} ${this.lastName}`);
      }

        const bilbo = {
            firstName: 'Bilbo',
            lastName: 'Baggins',
            age: 32,
            occupation: 'Developer'
        };

        const lara = {
            firstName: 'Lara',
            lastName: 'Croft',
            age: 25,
            occupation: 'Assassin'
        }

        greeting.call(lara); // Hello this is Lara Croft

       
       </code> </pre><br>
       <p>
       In this example we used <strong>call</strong> to point the <strong>this</strong> keyword of the <strong>greeting</strong> function to the <strong>lara</strong> object.
       </p>

                <h4 class = "custom_h4">Borrowing Methods from Different Objects</h4>

                <p>
                We can use call to change where the this keyword is being pointed. This allows us to borrow methods from different objects. For example: 
                </p>

            <pre><code class = "language-js">   
            const person = {
                firstName: 'unknown',
                lastName: 'unknown',
                sayHello: function(){
                    console.log(`Hello this is ${this.firstName} ${this.lastName}`);
                } 
            }

            person.sayHello(); // Hello this is unknown unknown
            person.sayHello.call(bilbo); // Hello this is Bilbo Baggins

            // We have borrowed the sayHello method from the person object and passed it onto the bilbo object.
            </code> </pre><br>

            <p>The example above shows how to borrow methods from diffent objects by changing where we point the <strong>this</strong> keyword.
                In this example, we changed the <strong>this</strong> keyword to pointed to the <strong>bilbo</strong> object. Originally, it was pointing to the person object. 
            </p>


        

            <h4 class = "custom_h4">Using call with parameters</h4>

              <pre><code class = "language-js">   
              const employee = {
                firstName: '',
                lastName: '',
                age: '',
                occupation: 'new hire',
                sayHello: function(){
                    console.log(
                            `Hey fellas this is ${this.firstName} ${this.lastName} 
                            age ${this.age} and i'm an ${this.occupation}!
                            ` 
                        );
                },
            }
            employee.sayHello.call(lara);
              </code> </pre><br>


            <p>
            Why are we setting <strong>firstName</strong>, <strong>lastName</strong> and <strong>age</strong> to blank? We really don't have to. 
            In fact, we don't need to even include these parameters at all. 
            I just want to make it clear these objects can be anything and that we can borrow methods from other objects using call. 
            </p>

            <h2 class = "custom_more_margin" id = "pb_intro" >Using Call with Function Constructors</h2>
            <p>
            We can use call with function constructors of an object.
            One reason to do this is to create another object constructor which shares similar properties and methods of the base function constructor.
            For example:
            </p>

            <pre><code class = "language-js">   
            function Animal(species,arms,legs,eyes){
                this.species = species,
                this.arms = arms;
                this.legs = legs;
                this.eyes = eyes;
            }

            function Tiger(species,arms,legs,eyes){
                Animal.call(this,species,arms,legs,eyes);
                this.predator = 'yes';
                this.sound = function(){
                    console.log('roar');
                }
            }

            Tiger.prototype = Object.create(Animal.prototype);

            // create a new instance leo of the Tiger object.
            const leo = new Tiger('tiger',4,4,2);


            console.log(leo.predator); // yes
            leo.sound(); // roar
              </code> </pre><br>

        <p>
            Here we first create a generic <strong>Animal</strong> function constructor. 
            Then we create a more specific <strong>Tiger</strong> function constructor.
            The line Tiger.prototype = Object.create(Animal.prototype) sets the Tiger prototype to have access to the Animal prototypes.
            By that, we mean that any instance of Tiger we create will have access to the properties and methods defined by the Animal function constructor.
        </p>





        
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
