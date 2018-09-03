class UI {
    constructor(makeList){
        this.init();
    }
    init() {
        this.printMakeToUI();
        this.printYearToUI();
    }

    printMakeToUI(){
        let html = `<option value="" disabled selected>-Select Make-</option>`;
        const makesArray = ['Ford','Lincoln','Honda','Toyota','GM','BMW','Audi','VW'];
        makesArray.forEach(make => {
            html+= `<option>${make}</option>`
        });
   
       document.querySelector('#make').innerHTML = html;

        
    }
    printYearToUI(){
        let html =  `<option value="" disabled selected>-Select Year-</option>`;
        const max = (new Date()).getFullYear();
        const min = max - 20;
        for( let year = max; year >= min; year -- ){
            html+= `<option value = ${year}> ${year}</option>`;
        }
        document.querySelector(`#year`).innerHTML = html;
    }
    submitQuote(e){
        e.preventDefault();
        // try catch
        try {
            // get make year and level values from the user input if they are not empty
            const make = document.querySelector('#make').value;
            const year = document.querySelector('#year').value;
            const type = document.querySelector('input[name = "coverageType"]:checked').value;

            if(make === '' || year === '' || type === ''){
                ui.showError('Please select both the year and make!');  
            }

            else{
                 // create a new instance of the insurance object based on the input of the user.
                  const insurance = new Insurance(make,year,type);

                // calculate the insurance of the users
                 const price = insurance.calculateQuote(insurance);

                // show results in the UI
                  ui.showResult(make,year,type,price);

            }
        }
        catch(err){
            ui.showError('Please select all the fields!');
        }
    }
    showError(input){
        document.querySelector('#result').innerHTML = `
            <div class = "error">
                <p class = "alert alert-danger">${input}!</p>
            </div>
        `;
    }
    showResult(make,year,type,price){
        price = ui.formatPrice(price);
        document.querySelector('#result').innerHTML = `
        <div class = "alert result__transition">
            <h4>Quick Quote Summary</h4>
            <p>The base insurance cost for your <strong> ${year} </strong> <strong> ${make} </strong> with <strong>${type}</strong> coverage is:</p>
            <p> <strong>${price}</strong> </p>
        </div>
    `;
    }
    formatPrice(price){
        return accounting.formatMoney(price);
    }
  

}