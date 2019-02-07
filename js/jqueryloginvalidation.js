 jQuery(document).ready(function($){
   $("#loginform").validate({
       focusInvalid: false,//Prevent focus on field when it fails validation


       rules: {
           Username: {
               required: true,
               minlength: 3,
               maxlength: 10
           },
           
           password: "required"
               
       },
       
        messages: {
            Username:"The length should be between 3 and 10",
            password:"It is not valid password. Check again please"
        },
       
        submitHandler: function(form) {
        form.submit(); 
    }
   });
   });

                  
 
      
    
                            