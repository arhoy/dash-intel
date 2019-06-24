class Names {
    constructor(){
        
    }

    init(){
        this.generateRandomName();
    }


    // query a single random name from the uinames.com API
    async queryRandomName(){
        const url = await fetch(`https://uinames.com/api/?ext`);
        const result = await url.json();
        return{
            result
        }
    }
    // call the queryRandomName function to get the person object from the API.
    generateRandomName(){
        //3.preventDefault();
        // call the query Random Name API
        names.queryRandomName()
            .then(data =>{
                const person = data.result;
               // call the showRandomPersonUI
               names.showRandomPersonUI(person);
                console.log(person);
            })
            .catch(data=>{console.log(data)});
    }
    // show Random Person generated to the UI.
    showRandomPersonUI(person){
        resultRandomDiv.innerHTML = `
            <div class = "alert alert-primary">
                <img class = "random__photo" src = "${person.photo}"/>
                <h4><strong>${person.name} ${person.surname}</strong>    </h4>
                <p> ${person.age} year old ${person.gender} from ${person.region} </p>
                <p>Date of Birth:  &nbsp;  ${person.birthday.mdy}</p>
                <p>Phone: ${person.phone}</p>
                <p>email: ${person.email}</p>
                
                <p></p>
                <p></p>
            </div>
        `;
    }


    /* Get names based on user inputs for the country*/
    // will have three parameters needed to build the url
    async queryAPI(region,gender,quantity){
        // QUery the URL
        const url = await fetch(`http://uinames.com/api/?region=${region}&gender=${gender}&amount=${quantity}`);
        // Return result as JSON
        const result = await url.json();
        // Return the object
        return{
            result
        }
    }
    generateNames(e){
        e.preventDefault();
        // read in the values from the user input.
        const region = document.querySelector('#region').value;
        const gender = document.querySelector('#gender').value;
        const quantity = document.querySelector('#quantity').value;

        //validate that use input
        if(region === '' || gender === '' || quantity === ''){
            ui.errorMessage(`All fields required`,'#result');
        }
        else{
            // send the user input to the API to get promise. Store promise in variable.
             names.queryAPI(region,gender,quantity)
                .then(data =>{
                    const dataArray = data.result;

                //     let html = ``;
                //     dataArray.forEach(element => {
                //         html+= `<p>${element.name}</p>`
                //     });
                //    // ui.showResult(dataArray,`#result`);
                //    resultDiv.innerHTML = html;
                    ui.showResult(dataArray);
                    
                })
            // fetch data from API
            
            // show results in the UI
            
        }
    }
   

}