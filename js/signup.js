function validatesignupform() {
	var requiredValuesCheck = 0;
	var inputFirstName = document.forms["signupform"]["firstName"].value;
	var inputLastName = document.forms["signupform"]["lastName"].value;
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("confirmPassword").value;
    var inputEmail = document.forms["signupform"]["email"].value;
    var regex1 = /^[a-zA-Z ]{2,30}$/; 
    var regex2 = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$/;
    
	
    if (inputFirstName == null || inputFirstName == "" || inputFirstName == "First name") {
            document.getElementById("firstName_Error").innerHTML="* First name must be filled out";
            document.getElementById("firstName_Error").style.color= "#ff4949";
            document.getElementById("firstName").style.border="1px solid #ff4949";

            requiredValuesCheck = requiredValuesCheck + 1;

            document.getElementById("firstName").style.color="#000000";
        } 
    else if (!regex1.test(inputFirstName)) {
        document.getElementById("firstName_Error").innerHTML="* First name should at least 2 but no more than 30 letters in length";
        document.getElementById("firstName_Error").style.color= "#ff4949";
        document.getElementById("firstName").style.border="1px solid #ff4949";

        requiredValuesCheck = requiredValuesCheck + 1;

        document.getElementById("firstName").style.color="#000000";
    }
   
    else {
            document.getElementById("firstName_Error").innerHTML = "";
            document.getElementById("firstName").style.backgroundColor="#ffffff";
            document.getElementById("firstName").style.border="1px solid #ccc";
            document.getElementById("firstName").style.color="#000000";
        }

    
    if (inputLastName == null || inputLastName == "" ) {
		document.getElementById("lastName_Error").innerHTML="* Last name must be filled out";
        document.getElementById("lastName_Error").style.color= "#ff4949";
        document.getElementById("lastName").style.border="1px solid #ff4949";
        
        
        requiredValuesCheck = requiredValuesCheck + 1;
        
        document.getElementById("lastName").style.color="#000000";
    } 
    
      else if (!regex1.test(inputLastName)) {
        document.getElementById("lastName_Error").innerHTML="* Last name should at least 2 but no more than 30 letters in length";
        document.getElementById("lastName_Error").style.color= "#ff4949";
        document.getElementById("lastName").style.border="1px solid #ff4949";

        requiredValuesCheck = requiredValuesCheck + 1;

        document.getElementById("lastName").style.color="#000000";
    }
   
    else {
        document.getElementById("lastName_Error").innerHTML = "";
        document.getElementById("lastName").style.backgroundColor="#ffffff";
        document.getElementById("lastName").style.border="1px solid #ccc";
        document.getElementById("lastName").style.color="#000000";
    }
    
    
    if (pass1 != pass2) {
        document.getElementById("confirmPassword_Error").innerHTML = "* Passwords do not match,  please check again";
        document.getElementById("confirmPassword_Error").style.color= "#ff4949";
        document.getElementById("confirmPassword").style.border="1px solid #ff4949";
        document.getElementById("password").style.border="1px solid #ff4949";
        
        requiredValuesCheck = requiredValuesCheck + 1;
        
        document.getElementById("confirmPassword").style.color="#000000";
           
    }
    
    else  {
        document.getElementById("confirmPassword_Error").innerHTML = "";
        document.getElementById("confirmPassword").style.backgroundColor="#ffffff";
        document.getElementById("password").style.border="1px solid #ccc";
        document.getElementById("confirmPassword").style.border="1px solid #ccc";
        document.getElementById("confirmPassword").style.color="#000000";
        
        
    }
    
    if (inputEmail == null || inputEmail == "" || inputEmail == "Email") {
            document.getElementById("email_Error").innerHTML="* Email must be filled out";
            document.getElementById("email_Error").style.color= "#ff4949";
            document.getElementById("email").style.border="1px solid #ff4949";

            requiredValuesCheck = requiredValuesCheck + 1;

            document.getElementById("email").style.color="#000000";
        } 
    
    else if (!regex2.test(inputEmail)) {
        document.getElementById("email_Error").innerHTML="Please enter valid Email";
          document.getElementById("email_Error").style.color= "#ff4949";
        document.getElementById("email").style.border="1px solid #ff4949";

        requiredValuesCheck = requiredValuesCheck + 1;

        document.getElementById("email").style.color="#000000";
    }
    
    else {
            document.getElementById("email_Error").innerHTML = "";
            document.getElementById("email_Error").style.backgroundColor="#ffffff";
            document.getElementById("email").style.border="1px solid #ccc";
            document.getElementById("email").style.color="#000000";
        }

    
    if (requiredValuesCheck>0){
        return false;
    }
    else {
        return true;
    }
}