// class for generic UI elements in the page
class UI {
    constructor(){
    }

    // alert user UI method when user input is incomplete or incorrect.
    errorMessage(message,div){
   
            // alert user of error
            document.querySelector(`${div}`).innerHTML = `
                <div class = "alert alert-danger">
                    <p>${message}</p>
                </div>
            `;
        
       
    }
    // takes the data json array and prints content to the UI to the specific div
    showResult(dataArray){
        console.log(dataArray);
        let html = `<div class = "alert alert-success">`;
        dataArray.forEach(element => {
            html += `
                 <p> Hi my name is <strong> ${element.name} </strong> and I'm from <strong> ${element.region} </strong> </p>
            `;
        });
        html += `</div>`
        resultDiv.innerHTML = html;
    }
    displayCurrentYear(){
        document.querySelector('.displayYear').innerHTML = (new Date()).getFullYear();
    }
}