$(document).ready(function() {
    $("#feed-create-form").submit(function(e) {
       e.preventDefault();
       $formdata = $(this).serialize();
       console.log($formdata);
       $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: $formdata,
            success: function(data) {
                window.location.href = "index.html";
            },
            error: function(data) {
                $(this).find("#error").html(data);
            }
       });
    });
    
    $('.datum').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 5, // Creates a dropdown of 15 years to control year,
        today: 'Heute',
        clear: 'Neu',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });
    
    $('.time').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'Speichern', // text for done-button
        cleartext: 'Neu', // text for clear-button
        canceltext: 'Schließen', // Text for cancel-button
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });
})