<?php include "includes/header0.php"; ?>
  
  <title>Javascript 101 | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript is a cross platform, light weight object oriented programming language used most commonly in the browser. With Node.JS Javascrip can be used as a server side language too.">
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css.php"; ?>

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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >Javascript ES6</h2>


                <h4 id = "what_is_es6" class = "custom_h4">What is ES6?</h4>
      <p>
            ES6 denotes the version or standard of javascript. Before ES6, there was versions of javascript from ES1 through ES5. 
            ES6 is sometimes referred to as ES2015 since ES6 first came out in 2015. 
            The advantage of using ES6 is for it's simplicity and powerfull new features, which we discuss below.
            One drawback is that ES6 is not yet fully supported in all modern web browsers. However,
            ES6 javascript can be converted into ES5 code by using a transpiler such as Babel.
            Babel is the most popular transpiler, which converts ES6 into ES5 javascript code, that works in all modern web browsers.

      </p>
               </p>

            <h4 class = "custom_h4">What if I don't want to use a transpiler</h4>
            <p>If you don't wish to use a transpiler, or if you would like to see compatibility over time, you can view this site to see which browsers will support the new ES6
            features. If you are using the latest versions of google chrome, firefox, safari or edge then almost 100% of the new ES6 features will work
            and you will not need to use Babel to run the code in your browser. See that latest compatibility.
            <ul>
            <li>
            <a href="https://caniuse.com/" target = "_blank">https://caniuse.com/</a>
            
            </li>
            <li>
            <a href="https://kangax.github.io/compat-table/es6/" target = "_blank">https://kangax.github.io/compat-table/es6/</a>
            
            </li>
            </ul>
             </p>

        
             <h4 id = "es6_tutorial_let+const" class = "custom_h4">Let and Const: New ways of declaring variables.</h4>
             <p> <strong>Let</strong> and <strong>const</strong> are two new ways of declaring variables: 
             </p>
           
             <p>Once you assign a value or object to the variable <strong>const</strong> you can no longer assign it to another value or object.
                This does NOT make <strong>const</strong> immutable, rather it makes <strong>const</strong> have the property that it cannot be reassigned. 
             </p>
             <p>When you want to reassign the variable such as a counter in a for loop, then <strong>let</strong> is variable of choice. For example: </p>            

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
              </code> </pre>

              



             <h4 id = "es6_tutorial_template_strings" class = "custom_h4">Template Strings</h4>
             <p>Template strings enables us to avoid using the + operator to concatenate strings together. They come in handy when trying to string together
             longer html elements with js variables. The variable must be wrapped inside <strong>${}</strong>.
              For example:</p>
             <pre><code class = "language-js">  
             //ES5 Method
                var name1 = 'Jonny';
                console.log('hello ' + name1);

            //ES6 Method
                const name2 = 'Jonny';
                console.log(`hello ${name2}`)
              </code> </pre>


             <h4 id = "es6_tutorial_arrow_functions" class = "custom_h4">Arrow Functions</h4>
            <p>
            Arrow functions have shorter syntax than functions expressions and are written as
             (parameter1, parameter2,..., parameter3)=>{ statements } <br> 
             The parenthesis is optional when there is only 1 parameter. <br>
             Arrow functions do not have their own this keyword. They cannot be used as function constructors.
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
             <h4 id = "es6_tutorial_destructuring" class = "custom_h4">Destructuring</h4>
             <p>
             
             Destructuring in JS allows us to break up values from arrays into its components. 
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
                
              </code> </pre>

             <h4 id = "es6_tutorial_array_methods" class = "custom_h4">Methods on Arrays</h4>
                <p>Some useful and widely used methods in ES6 that are helpful when looping throug arrays are: 
                <strong>from</strong>,
                <strong>includes</strong> and 
                <strong>findIndex</strong>.
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
             <h4 id = "es6_tutorial_spread_operator" class = "custom_h4">Spread Operator</h4>
            <p>The spread operator takes an array and transform them into components.</p>
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
            
            Rest parameters let us take any number of arbitrary parameters and convert them into an array.
            
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

        





















































                <h4 class = custom_h4> JSON FILES</h4>
                <p>Reading and writing a file in JSON</p>
                    <p>

                    	<pre><code class = "language-js">
                            //Using the file system node library for reading and writing files.
                              const fs = require('fs');
                              // creating JSON object
                              var originalNote = {
                                title: 'Some title',
                                body: 'Some body'
                                };
                            // taking JSON object and converting to string
                            fs.writeFileSync('playground/notes.json',originalNoteString);
                            // writing content to a file.
                            fs.writeFileSync('notes.json',originalNoteString);
                            // read file that you just created. UTF-8 is to used to make file human readable.
                            var noteString = fs.readFileSync('playground/notes.json','UTF-8');
                            //convert noteString to object
                            var note = JSON.parse(noteString);
                            //verify that note is indeed object. Print out the title and body of the note.
                            console.log(typeof note);
                            console.log(note.title);
                            console.log(note.body);
                            </code></pre>
                      
                     </p>



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
