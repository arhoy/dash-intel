<?php include "includes/header0.php"; ?>
  
  <title>Power BI Waterfall Charts | Dash-Intel</title>
<meta name="title" content= "Power BI Waterfall Charts | Dash-Intel" />
<meta name="metatitle" content= "Waterfall Charts in Power BI | Dash-Intel"/>
<meta name="description" content= "Waterfall charts are a great way to visualize data and understand the cummulative effects of your data over time. A waterfall chart tells you a story from your data by showing you how each positive or negative effect influenced the final outcome.">
   
   
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >NODE JS BASICS </h2>


                <h4 class = custom_h4>Yargs</h4>
                <p>Install Yargs</p>
                <p>In the command line: <span class="command">npm install yargs</span></p>

            <p>Create and save the following as <span class="js_file">app.js file</span></p>
                    	<pre><code class = "language-js">
                    
                            //Using the file system node library for reading and writing files.
                              const fs = require('fs');
                            //adding in yargs library
                              const yargs = require('yargs');

                              var command = process.argv[2];
                            console.log('Command: ', command);

                            if (command === 'add'){
                                console.log('add command executed');
                            }
                            
                            </code></pre>
                     <p>In the command line: <span class="command">node app.js add</span></p>

                     <p>The Final Output: app.js file</p>

                    	<pre><code class = "language-js">
                        console.log('starting app');

                        const fs = require('fs');
                        const _ = require('lodash');
                        const notes = require('./notes.js')
                        const yargs = require('yargs');
                        const argv = yargs.argv;
                        console.log('Yargs: ', argv);

                        var command = process.argv[2];
                        console.log('Command: ', command);

                        if (command === 'add'){
                            console.log('add command executed');
                            notes.addNote(argv.title,argv.body);
                        }
                        else if (command === 'read'){
                            console.log('read command executed');
                            notes.getNote(argv.title);
                        }
                        else if (command === 'remove'){
                            console.log('remove command excecuted');
                            notes.removeNote(argv.title);
                        }
                        console.log(argv);
                            </code></pre>
                     

            <p>The Final Output: notes.js file</p>

            	<pre><code class = "language-js">
                    console.log('starting notes');

                        const fs = require('fs');
                        var addNote = (title,body) => {
                            var notes = [];
                            var note ={
                                title,
                                body
                            };
                            //add the note into the notes array.
                            notes.push(note);
                            //write or create file notes-data.json -- arguments are path and content.
                            fs.writeFileSync('notes-data.json',JSON.stringify(notes));
                            
                        };

                        var getAll = () => {
                            console.log('Getting all Notes');
                        };

                        var getNote = (title) => {
                            console.log('Getting Note',title);
                        }

                        var removeNote = (title) =>{
                            console.log('Removing Note',title);
                        }

                        module.exports = {
                            addNote,
                            getAll,
                            getNote,
                            removeNote
                        };
                </code></pre>
                     
            
                <p>In the command line: <span class="command">node app.js remove --title MyTitle</span></p>
                <p>In the command line: <span class="command">node app.js add --title "Cat In The Hat" --body "The Cat in the Hat by Dr Seuss"</span></p>





































































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
       <?php include "includes/footer.php"; ?>
