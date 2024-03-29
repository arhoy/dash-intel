
<?php include "../includes/header/header0.php"; ?>
  
  <title>Javascript 101 | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript is a cross platform, light weight object oriented programming language used most commonly in the browser. With Node.JS Javascrip can be used as a server side language too.">
   
   

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
            
            <h2 class = "custom_more_margin" id = "whatIsJS" >Javascript 101 Examples</h2>

                <h3>Summing Elements in an array</h3><br>
  
                     <h4 class = "custom_h4">Summing elements in an array using reduce</h4>
                     <pre><code class = "language-js">   
                     const myArr = [1,2,3,4,5,10];

                        const reduceArray = myArr.reduce((accumulator,num)=>{
                            return accumulator + num;
                        },0);
                        console.log('reduce',reduceArray);
                      </code> </pre><br><br>


                    <h4 class = "custom_h4">Summing elements in an array using simple for loop</h4>
                     <pre><code class = "language-js">   
                        var total = 0;
                        for(var i = 0; i < myArr.length; i++){
                            total += myArr[i];
                        }
                        console.log('simple for loop',total);
                      </code> </pre><br><br>


                    
                    <h4 class = "custom_h4">Summing elements in an array using forEach</h4>
                     <pre><code class = "language-js">   
                        var tot = 0;
                        myArr.forEach((curr)=>{
                            tot +=curr;
                        })

                        console.log('forEach',tot);
                      </code> </pre><br><br><br>
                    
            <h3>Objects</h3><br>


                  <h4>Memory location</h4>
                  <p>When are two objects equal? When they are pointing to the same memory location.</p>
                  <pre><code class = "language-js">
                    var obj1 = { myValue: 100};
                    var obj2 = { myValue: 100};
                    console.log('Are they equal? ',obj1 === obj2); //expected output: false; 

                    var obj3 = obj1;
                    obj1.myValue = 200;                           // upddate value;
                    console.log('Are they equal?',obj1 === obj3); //expected output: true;
                    
                    </code> </pre><br>
                    <p>
                    Note: obj1 and obj3 are pointing to the same memory location.
                    Updating the value of obj1 updates the value of obj3 as well. 
                    </p>
                    <p> It does not matter that obj1 and obj2 have the same value because they are two different objects.
                    Because obj1 and obj2 are two different objects, they point to a different memory location. Thus, they are not the same object.
                    </p>

                    <h4>Array are objects too</h4>
                    <p>An array is also an object in javascript.
                     Because arrays are a special type of js object, the same reasoning from the previous example holds true. 
                    The two arrays below point to different locations in a computers memory. 
                     Eventhough both arrays have the same value, they are two different objects.
                    </p>
                        <pre><code class = "language-js">
                        [1,2,3] === [1,2,3]; //expected output: false;
                    </code> </pre><br>

                      <h4>Object Instantiation Part 1</h4>
                    <p>Object instantiation lets you create instances of objects. Below is a person object constructor.
                    Each person object has a name, a gender, and an age.
                    </p>
                        <pre><code class = "language-js">
                        // INSTANTIATION
                        class Person {
                            constructor(name,gender,age){
                                this.name = name;
                                this.gender = gender;
                                this.age = age;
                                console.log('what is this? ',this); // expected output: Person object.
                            }
                        }
                        const anna = new Person('Anna','female',22);
                    </code> </pre><br>

                    <p>We can keep adding new methods to the Person object.</p>
                    <pre><code class = "language-js">
                        // INSTANTIATION
                        class Person {
                            constructor(name,gender,age){
                                this.name = name;
                                this.gender = gender;
                                this.age = age;
                                console.log('what is this? ',this); // expected output: Person object.
                            }
                        }
                        const anna = new Person('Anna','female',22);
                    </code> </pre><br>





             <h4 id = "jsIntro_anonymousFunction">Anonymous Functions</h4>
             <p>
                 <strong>Anonymous functions</strong> are functions without a name. For instance:
                 <pre><code class = "language-js">
                 //create a function with multiple inputs
                 function(a,b){
                     return a + b;
                 }
                 //An Anonymous function
             </code> </pre> <br>

          <h4 id = "jsIntro_functionExpression">What are function expression?</h4>
             <p><strong>Function expressions: </strong> are anonymous functions that are assigned to a variable. 
             For instance: </p>
             <pre><code class = "language-js">
                 //A function expression
                 var add1 = function(a,b){
                     return a + b;
                 }
                // a function expression.
             </code> </pre><br>
                 <p><strong>Note:</strong>If you call the function <strong>add1</strong> <em>before</em> the function expression you get an undefined TypeError.
                  </p>

                     <pre><code class = "language-js">
                 add1(2,1); // expected output: TypeError: add1 is not a function
                 var add1 = function(a,b){
                     return a + b;
                 }
             </code> </pre><br>
             <h4 id = "jsIntro_functionDeclarations">What are function declarations?</h4>
             <p><strong>Function Declarations</strong> are <em>named functions</em>. They are not assigned to a variable and are written like:</p>
             <pre><code class = "language-js">
                 add2(2,1); // expected output: 3;
                 function add2 (a,b){
                     return a + b;
                 }
                 // add2 is an example of a function declaration. It can be called before the named function.
                 // note function statement and function declaration is often used interchangeablely.
             </code> </pre><br>




         <h4 id = "jsIntro_functionConstructors" class = "custom_h4">Function Constructors</h4>
         <p>
                 Function constructors create blueprints for an object. 
                 They are handy when we know we will be creating many similar objects with similar properties.
                 Below outlines the `steps` or algorithm needed to create function constructors.
         </p>
<pre><code class = "language-js">                           
            // Creating function constructors
            // Here is an example of creating a Person object using the function constructor method.
            // We name function constructors starting with a Capital letter by convention. 
            // This is to distinguish function contstructors from regular objects and functions.

            //Create a `Person` function constructor
            function Person(name,age,netWorth,gender){
                this.name = name;
                this.age = age;
                this.netWorth = netWorth;
                this.gender = gender;
            }

            const mark = new Person('Mark',34,'74 billion','male'); // a new Person object `mark` was created.
            console.log(mark); 

            // we can add a property to the existing Person object of mark.
            mark.nationality = 'American'; // this nationality is unique to the mark object only.
            console.log(mark); 

            // we can add a new method to the existing Person object or mark.
            mark.greeting = () =>{
                console.log(`Hi my name is ${mark.name} and I am CEO bitch`); // this greeting is unique to mark.
            }
            // calling the greeting function
            mark.greeting();


            // we can add additional properties or method to the Person function constructor anytime. 
            // Example 

            function Person(name,age,netWorth,gender){
                this.name = name;
                this.age = age;
                this.netWorth = netWorth;
                this.gender = gender;
                this.greeting = ()=>{
                    console.log(`Hi my name is ${this.name}!`);
                }
            }

            const jeff = new Person('Jeff Bezos', 54,'100 billion','male');
            console.log(jeff); // we see the jeff object does not have the `nationality` property.
            
            // calling the greeting method.
            jeff.greeting();

            // over writing the greeting method with a personalized `jeff` greeting method
            jeff.greeting = ()=>{
                console.log(`Hi my name is ${jeff.name} but you can call me king Bezos! `);
            }
            // calling the updated `jeff` greeting method
            jeff.greeting();
</code> </pre><br><br>



          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
