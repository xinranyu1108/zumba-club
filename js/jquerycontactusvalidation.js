 jQuery(document).ready(function($){
   $("#contactusform").validate({
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
           
          email:{
              required: true,
              email:true
          },
           
            feedback: "required"
           },
       
        messages: {
            firstName:"* The length should be between 2 and 30",
            lastName:"* The length should be between 2 and 30",
            email: "* Please enter a valid email address",
            feedback: "* Please enter your feedback"
             },
       
        submitHandler: function(form) {
        form.submit(); 
        }
   });
   });