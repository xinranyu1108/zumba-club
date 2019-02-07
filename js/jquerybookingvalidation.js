 jQuery(document).ready(function($){
   $("#bookingform").validate({
       focusInvalid: false,//Prevent focus on field when it fails validation


       rules: {
           firstName: {
               required: true,
               minlength: 2,
               maxlength: 30
           },
           
           lastName: {
               required: true,
               minlength: 2,
               maxlength: 30
           },
           className: "required",
           classId: "required",
           datePicker: "required",
           location:"required"
               
           
       },
       
        messages: {
            firstName:"* The length should be between 2 and 30",
            lastName:"* The length should be between 2 and 30",
            className: "* Please choose a class",
            classId: "* Plase type the class Id",
            location: "* Please choose a location",
            datePicker: "* Please choose a date to attend"
             },
       
        submitHandler: function(form) {
        form.submit(); 
        }
   });
   });