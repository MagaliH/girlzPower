// $('.datepicker').pickadate({
//    selectYears: 50, // Creates a dropdown of 15 years to control year,
//    clear: 'Clear',
//    close: 'Ok',
//    closeOnSelect: false // Close upon selecting a date,
//  });

$(".datepicker").pickadate({
  maxDate: '0',
  changeYear: true,
  yearRange: '1960:2017',
  dateFormat: 'yy',
});
