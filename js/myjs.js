function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var age = document.getElementById("age").value;
    var username= document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var file = document.getElementById("file").value;
    
    
    if (fname == "" || fname.length<5) {
    document.getElementById("error").innerHTML="Please fill out first name and make sure it is at least 5 alphabets";
    return false;
    }
    
    
    
    
    if ( lname == "" || lname.length<5) {
    document.getElementById("error").innerHTML="Please fill out last name and make sure it is at least 5 alphabets";
    return false;
    
    }
    if ( age == "") {
    document.getElementById("error").innerHTML="Please fill out age";
    return false;
    }
    if ( usename == "" || username<5) {
       document.getElementById("error").innerHTML="Please fill out last name and make sure it is at least 5 alphabets";
       return false;
       
       }
    if (document.getElementById("designation1").checked == false &&  document.getElementById("designation2").checked == false &&  document.getElementById("designation3").checked == false)
       {
         document.getElementById("error").innerHTML="Please select any radio button";
         return false;
       }
    
       if (document.getElementById("language1").checked == false &&  document.getElementById("language2").checked == false &&  document.getElementById("language3").checked == false)
       {
         document.getElementById("error").innerHTML="Please select at least one checkbox";
         return false;
       }
    
    
 
    
    if ( email == "") {
    document.getElementById("error").innerHTML="Please fill out email";
    return false;
    }
    if ( password == "" || password.length<8) {
    document.getElementById("error").innerHTML="Please fill out password and make sure it is at least 8 digits/alphabets";
    return false;
    }
    if ( file == "") {
    document.getElementById("error").innerHTML="Please fill out file";
    return false;
    }
    else
    {
    document.getElementById("error").innerHTML= "";
    document.getElementById("a").innerHTML=fname;
    document.getElementById("b").innerHTML=lname;
    document.getElementById("c").innerHTML=age;
   
    document.getElementById("d").innerHTML=email;
    document.getElementById("e").innerHTML=password;
    document.getElementById("f").innerHTML=file;
    return false;
    }
    
    
    }
