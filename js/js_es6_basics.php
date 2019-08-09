<?php include "includes/header0.php"; ?>
  
  <title>Javascript ES6 Basics | Dash-Intel</title>
<meta name="title" content= "Es6 javascript summary overview | Dash-Intel" />
<meta name="metatitle" content= "What is new in es6 | Dash-Intel"/>
<meta name="description" content= "What are some examples of using Es6 javascript.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >Javascript ES6</h2>


                <h4 id = "what_is_es6" class = "custom_h4">What is ES6?</h4>
      <p>
      <span class = "myword myword__green">ES6</span> denotes the version or standard of javascript. 
            Before ES6, there was versions of javascript from ES1 through ES5. 
            ES6 is sometimes referred to as ES2015 since ES6 first came out in 2015. 
            <br><br>
            The advantage of using ES6 is for it's simplicity and powerfull new features, which we discuss below.
            One drawback is that ES6 is not yet fully supported in all modern web browsers. However,
            ES6 javascript can be converted into ES5 code by using a <span class = "myword myword__green">transpiler</span> such as 
            <a class = "hyperlink" href="#"> <span class="underline">Babel</span></a> .
            Babel is the most popular transpiler, which converts ES6 into ES5 javascript code, that works in all modern web browsers.

      </p>
               </p>

            <h4 class = "custom_h4">What if I don't want to use a transpiler</h4>
            <p>If you don't wish to use a transpiler, or if you would like to see compatibility over time, you can view this site to see which browsers will support the new ES6
            features. If you are using the latest versions of google chrome, firefox, safari or edge then almost 100% of the new ES6 features will work
            and you will not need to use Babel to run the code in your browser. See the latest compatibility.
            <ul>
            <li>
            <a class = "hyperlink" href="https://caniuse.com/" target = "_blank"> <span class="underline">https://caniuse.com/</span></a>
            
            </li>
            <li>
            <a class = "hyperlink" href="https://kangax.github.io/compat-table/es6/" target = "_blank">
            <span class="underline">
            https://kangax.github.io/compat-table/es6/</a>
            </span>
            </li>
            </ul>
             </p>
            <br>
        
             <h4 id = "es6_tutorial_let+const" class = "custom_h4">Let and Const: New ways of declaring variables.</h4>
             <p> 
             The new way to declare variables in ES6 is using
             <span class = "myword myword__green">let</span> and 
             <span class = "myword myword__green">const</span>
             </p>
           
             <p>Once you assign a value or object to the variable <strong>const</strong> you can no longer assign it to another value or object.
                This does NOT make <strong>const</strong> immutable, rather it makes <strong>const</strong> have the property that it cannot be reassigned. 
             </p>
             <p>When you want to reassign the variable such as a counter in a for loop, then <strong>let</strong> is the variable of choice. For example: </p>            

              <pre><code class = "language-js">   
              // Example 1 using let and const
                const fruits = ['apples','bananas','oranges'];
                let total = 0;
                fruits.forEach(function(cur){
                    console.log(cur);
                    total++;
                })
                console.log(total);
              </code> </pre>


              <pre><code class = "language-js">  
              // Example 2: Note the differences between x and y.
                  let x = 1000;
                    for(let x = 0; x < 3; x++){
                        console.log(x);
                    }
                    console.log(x); // expected output: 1000


                    var y = 1000;
                    for(var y = 0; y < 3; y++){
                        console.log(y);
                    }
                    console.log(y); // expected output: 3

                // Characteristics:
                    // Note: let and const are block scoped, while var is function scoped
                    // we cannot use let and const before it is declared. 
              </code> </pre>

               <pre><code class = "language-js">  
              // Example 3: Let and const are block scoped.
            {
                const a = 'apples';
                let b = 'bananas';
                var c = 'carrots';
            }
            console.log(a); // expected output: a is not defined
            // This is because const and let are block scoped.
              </code> </pre><br><br>

              



             <h4 id = "es6_tutorial_template_strings" class = "custom_h4">Template Strings</h4>
             <p>concatenating strings with the + sign was always annoying in javascript.
             
            <span class = "myword myword__green">Template strings</span> enables us to avoid using the + sign 
            to concatenate strings together. 
             They are extremely handy when trying to string together long html elements with js variables.

             <br><br>
              Variables must be wrapped inside a dollar sign followed by curly braces.
               This is how the javascript engine distinguishes between what is a string and what is a variable
              For example:</p>
             <pre><code class = "language-js">  
             //ES5 Method
                var name1 = 'Jonny';
                console.log('hello ' + name1);

            //ES6 Method
                const name2 = 'Jonny';
                console.log(`hello ${name2}`)
              </code> </pre><br><br>


             <h4 id = "es6_tutorial_arrow_functions" class = "custom_h4">Arrow Functions</h4>
            <p>
            It might take a bit a time to get use to, but once you do you will always want to write 
            <span class = "myword myword__green">arrow functions.</span>
            
            Arrow functions have shorter syntax than functions expressions and are written as
             (parameter1, parameter2,..., parameter3)=>{ statements } <br> 
             The parenthesis is optional when there is only 1 parameter. <br><br>
             Things to be aware of: Arrow functions do not have their own this keyword and the syntax cannot be used to create function constructors.
            </p>

             <pre><code class = "language-js">
            


            // Example 1
                //ES5
                var myFunction1 = function(){
                    console.log('hello world 1');
                }
                myFunction1();

                //ES6
                var myFunction2 = ()=>{
                    console.log('hello world 2');
                }
                myFunction2();

            // Example 2

            var names = ['Sheila','Tanya','Kirby','Taylor','Naomi'];
                //ES5
                names.forEach(function(cur){
                    console.log(cur.length);
                })
                //ES6
                names.forEach(cur =>{
                    console.log(cur.length);
                })

            // Example 3
            // Print the length of the names greater than threshold of 5.
                //ES6

                names.forEach((cur,i)=>{
                    if(cur.length > 5){
                        console.log(`${cur} is in position ${i+1} in the list`);
                    }
                })
             </code></pre>
             <br><br>

             <h4 id = "es6_tutorial_destructuring" class = "custom_h4">Destructuring</h4>
             <p>
             <span class = "myword myword__green">Destructuring</span>
              in JS allows us to break up values from arrays into its components. 
             We can also use it to seperate properities from objects into seperate variables.


             </p>

             <pre><code class = "language-js">  
            // Example 1: 
                const [name,number] = ['hydrogen',1];
                console.log(name);
                console.log(number);

            // Example 2: 
                // Destructuring makes it easy to swap two variables
            let a = 'apples';
            let b = 'bananas';

            [a,b] = [b,a];
            console.log(b); // expected output: 'apples';
            // note: we use let instead of const because of reassignment. 

            // Example 3
                // Is faster and cleaner to access object variables.
            const elonMusk = {
                name: 'Elon Musk',
                born: 'Pretoria, South Africa'
                netWorth: 20000000000,
                residence: 'Los Angeles'
            }
            const {name,born} = elonMusk;
            let {netWorth,residence} = elonMusk;
              </code> </pre>
              <br><br>

             <h4 id = "es6_tutorial_array_methods" class = "custom_h4">Methods on Arrays</h4>
                <p>Some useful and widely used methods in ES6 that are helpful when looping throug arrays are: 
                <span class = "myword myword__green">from</span>
                <span class = "myword myword__green">includes</span>
                <span class = "myword myword__green">findIndex</span>
                </p>
             <pre><code class = "language-js">  
            // Example 1 The from Method
            // The Array.from method converts a node list into an array so we can easily loop through.
            const boxes = document.querySelectorAll('.box');
            console.log(boxes);

            const boxesArray = Array.from(boxes);
            console.log(boxesArray);

            // changing the styles of all classes in the querySelector
            boxesArray.forEach(cur=>{
                cur.style.backgroundColor = 'red';
                cur.style.fontWeight = '900';
            })


            // Example 2: The includes Method
            // Suppose we have three boxes with css classNames "box red", "box blue" and "box green";
            // We want to turn the blue box into a black box. Note, this simply changes the styles not the className.

            boxesArray.forEach(cur=>{
                if(cur.className.includes('blue')){
                    cur.style.backgroundColor = 'black';
                }
            })

            // Example 3: findIndex
            // findIndex is a ES6 function that helps us find the value in array which meets a certain criteria.
            // Like the forEach method of an array, findIndex has access to the current element, the index and the array.
            // The second and third parameters of findIndex are optional.

            const prices = [10,99,50,150,100,1.99];
            prices.findIndex((curr,index,array)=>{
                if(curr > 100){
                    console.log(curr); // expected output 150;
                    console.log(index); // returns the position in the array.
                // console.log(array); // returns the whole array. 
                }
            });
              </code> </pre>
              <br><br>
             <h4 id = "es6_tutorial_spread_operator" class = "custom_h4">Spread Operator</h4>

            <p>

            The<span class = "myword myword__green">spread operator</span>
            takes an array and transform them into components.</p>
             <pre><code class = "language-js">
                // Example 1
                function totalPrices (a,b,c,d){
                    console.log(a+b+c+d);
                }

                totalPrices(10,20,20,50); // expected output: 100;

                // what if the prices we want are in an array?
                myPrices = [10,20,20,50];
                totalPrices(...myPrices);


                // Example 2
                    // Getting all the prices in an array.
                function sumAllPrices(array){
                    tot = 0;
                    array.forEach(cur=> {
                        tot+=cur;
                    });
                    console.log(tot);
                }
                sumAllPrices(myPrices);
             
             </code></pre>

             <h4 id = "es6_tutorial_rest_parameters" class = "custom_h4">Rest Parameters</h4>
            <p>
            <span class = "myword myword__green">Rest parameters</span>
 let us take any number of arbitrary parameters and convert them into an array.            
            </p>
              <pre><code class = "language-js">
            // Example 1
            function myGreeting(...names){
                //names is now an array that we can loop through.
                names.forEach(cur=>console.log(`Hello ${cur}`));

            }
            myGreeting('Jon','Danaerys','Tyrion');

            // Example 2
            // We can pass other arguments into the myGreeting function in addition to the rest parameters. For example
            function myGreeting2(language,...names){
                //names is now an array that we can loop through.
                if(language === 'Spanish'){
                    names.forEach(cur=>console.log(`Hola ${cur}`));
                }
                else {
                    names.forEach(cur=>console.log(`Hello ${cur}`));
                }
            

            }

            myGreeting2('Spanish','Jon','Danaerys','Tyrion');

            // we can pass any number of arguments before the spread operator. It this case the spread operator is ...names.
             </code></pre>

            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
