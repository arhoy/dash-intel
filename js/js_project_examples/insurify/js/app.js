const vehicleAPI = new VehicleAPI();
const ui = new UI();

// Variables



//event listeners;
        // add event listener for get quote button
const submitQuoteHandler = document.querySelector('#quoteForm').addEventListener('submit',ui.submitQuote);