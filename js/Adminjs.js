function addCourseValidation(){
	var courseTitle = document.getElementById("courseTitle").value;
	if(courseTitle=="")
	{
		document.getElementById('courseTitleError').innerHTML="*Course Title can not be empty";
		return false;
	}
	else if(courseTitle.length<3)
	{
		document.getElementById('courseTitleError').innerHTML="*Course Title can not be less than 3 character";
		return false;
	}

	var courseDescription = document.getElementById("courseDescription").value;
	if(courseDescription=="")
	{
		document.getElementById('courseDescriptionError').innerHTML="*Course Description can not be empty";
		return false;
	}
	else if(courseDescription.length<10)
	{		
		document.getElementById('courseDescriptionError').innerHTML="*Course Description can not be less than 10 character";
		return false;
	}

	var courseCategory = document.querySelector( 'input[name="courseCategory"]:checked');   
	if(courseCategory == null) 
	{   
         document.getElementById('courseCategoryError').innerHTML="*Select a Course Category"; 
         return false;
    } 

    var courseTotalLevels = document.getElementById("courseTotalLevels").value;   
	if(courseTotalLevels=="") 
	{   
         document.getElementById('courseTotalLevelsError').innerHTML="*Please provide total number of levels"; 
         return false;
    }    

    var filetoupload = document.getElementById("filetoupload").value;   
	if(filetoupload=="") 
	{   
         document.getElementById('filetouploadError').innerHTML="*Please upload a file"; 
         return false;
    }
    


}

function addInstactorValidation(){
	var instactorTitle = document.getElementById("instactorTitle").value;
	if(instactorTitle=="")
	{
		document.getElementById('instactorTitleError').innerHTML="*Course Title can not be empty";
		return false;
	}
	else if(instactorTitle.length<3)
	{
		document.getElementById('instactorTitleError').innerHTML="*Course Title can not be less than 3 characters";
		return false;		
	}

	var assignedCourse = document.getElementById("assignedCourse").value;
	if(assignedCourse=="")
	{
		document.getElementById('assignedCourseError').innerHTML="Please assign a course";
		return false;
	}

	var instactorPassword = document.getElementById("instactorPassword").value;
	if(instactorPassword=="")
	{
		document.getElementById('instactorPasswordError').innerHTML="Please set a password";
		return false;
	}
	else if(instactorPassword.length>14 || instactorPassword.length<8)
	{
		document.getElementById('instactorPasswordError').innerHTML="Password must me grater than 8 and less than 14 characters";
		return false;
	}
}

function searchId()
{
    var table = document.getElementById('table');
                
   for(var i = 1; i < table.rows.length; i++)
   {
      table.rows[i].onclick = function()
      {
         document.getElementById("searchId").value = this.cells[0].innerHTML;
      };
   }
}

$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#data tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


$(document).ready(function(){
	$("#back").click(function(){
 		$("#popUp").hide();
	});
});

$(document).ready(function(){
	$("#changeTheme").click(function(){
 		$("#themes").show();
	});
});

$(document).ready(function(){
	$("#update").click(function(){
 		$("#popUp").show();
	});
});


$(document).ready(function(){
	$("#blue").click(function(){
 		$("body").css({"background-color": "#2b2b6d"});
	});
});

$(document).ready(function(){
	$("#purple").click(function(){
 		$("body").css({"background-color": "#4b004b"});
	});
});

$(document).ready(function(){
	$("#gray").click(function(){
 		$("body").css({"background-color": "#494848"});
	});
});

$(document).ready(function () {  
    $('#instactorPassword').keyup(function () {
    	var value = $(this).val();  
        $('#instactorPasswordError').html(checkStrength(value));  
    })  
    function checkStrength(password) {  
        var strength = 0;  
        if (password.length < 8) {  
            $('#instactorPasswordError').removeClass();  
            $('#instactorPasswordError').addClass('ShortPass');  
            return 'Too short';  
        }  
        if (password.length > 7) strength += 1;  
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1;  
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1; 
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1  
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;  

        if (strength < 2) {  
            $('#instactorPasswordError').removeClass()  
            $('#instactorPasswordError').addClass('WeakPass')  
            return 'Weak'  
        } else if (strength == 2) {  
            $('#instactorPasswordError').removeClass()  
            $('#instactorPasswordError').addClass('GoodPass')  
            return 'Good'  
        } else {  
            $('#instactorPasswordError').removeClass()  
            $('#instactorPasswordError').addClass('StrongPass')  
            return 'Strong'  
        }  
    }  
}); 


$(document).ready(function() {
  $('#baCktoPrev').click(function(){
    window.history.back();
  });
});

function updateFunc(id,table)
{
    var popUp = document.getElementById("popUp");
    var back = document.getElementById("back");
    var updateDetails = document.getElementById("updateDetails");
    var emailVal = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;

		var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     	 document.getElementById("display").innerHTML = this.responseText;
    	}
		else
		{
			 document.getElementById("display").innerHTML = this.status;
		}
  	};
    xhttp.open("POST", "/Project/view/showUser.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id+"&table="+table);


		updateDetails.onclick = function()
		{
				    if(table=="instactor")
				    {
				    	var instTitle = document.getElementById("instTitle").value;
				    	var instEmail = document.getElementById("instEmail").value;
				    	var instInstitution = document.getElementById("instInstitution").value;
				    	var instExprience = document.getElementById("instExprience").value;

				    	if(instTitle=="" || instEmail=="" || instInstitution=="" || instExprience=="")
				    	{
				    			alert("Please insert the information Correctly.")
				    	}
				    	else
				    	{				        
				    		xhttp.open("POST", "/Project/view/updateUser.php", true);
    						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    						xhttp.send("id="+id+"&table="+table+"&instTitle="+instTitle+"&instEmail="+instEmail+"&instInstitution="+instInstitution+"&instExprience="+instExprience);
    						popUp.style.display = "none";
    						location.reload();
    						document.getElementById("message").innerHTML = "Data Updated Successfully.";

				   		}
				    }
				    else if(table=="learner")
				    {
				    	var learEmail = document.getElementById("learEmail").value;
				    	var username = document.getElementById("username").value;

				    	if(learEmail=="" || username=="")
				    	{
				    			alert("Please insert the information Correctly.")
				    	}
				    	else if(!learEmail.match(emailVal))
				    	{
				    		alert("Please insert Valid email.")
				    	}
				    	else
				    	{				        
				    		xhttp.open("POST", "/Project/view/updateUser.php", true);
    						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    						xhttp.send("id="+id+"&table="+table+"&learEmail="+learEmail+"&username="+username);
    						popUp.style.display = "none";
    						location.reload();
    						document.getElementById("message").innerHTML = "Data Updated Successfully.";

				   		}
				    }
				    else if(table=="course")
				    {
				    	var courTitle = document.getElementById("courTitle").value;
				    	var courCategory = document.getElementById("courCategory").value;
				    	var totalCourLevel = document.getElementById("totalCourLevel").value;

				    	if(courTitle=="" || courCategory=="" || totalCourLevel=="")
				    	{
				    			alert("Please insert the information Correctly.")
				    	}
				    	else
				    	{				        
				    		xhttp.open("POST", "/Project/view/updateUser.php", true);
    						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    						xhttp.send("id="+id+"&table="+table+"&courTitle="+courTitle+"&courCategory="+courCategory+"&totalCourLevel="+totalCourLevel);
    						popUp.style.display = "none";
    						location.reload();
    						document.getElementById("message").innerHTML = "Data Updated Successfully.";

				   		}
				   		
				    }

				    else if(table=="company")
				    {
				    	var comTitle = document.getElementById("comTitle").value;
				    	var comEmail = document.getElementById("comEmail").value;

				    	if(comTitle=="" || comEmail=="")
				    	{
				    			alert("Please insert the information Correctly.");
				    	}

				    	else if(!comEmail.match(emailVal))
				    	{
				    		alert("Please insert Valid email.")
				    	}
				    	else
				    	{				        
				    		xhttp.open("POST", "/Project/view/updateUser.php", true);
    						xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    						xhttp.send("id="+id+"&table="+table+"&comTitle="+comTitle+"&comEmail="+comEmail);
    						popUp.style.display = "none";
    						location.reload();
    						document.getElementById("message").innerHTML = "Data Updated Successfully.";

				   		}
				    }

		}

		window.onclick = function(event) {
  		if (event.target == popUp) {
    	popUp.style.display = "none";
  	}
   }
}

function deleteFunc(id,table)
{
	    if(id=="")
	    {
	    	alert("Please inter a ID");
	    }
	    else
	    {
	    	var decession=confirm("Are You Sure You Want to Delete this!");	
	    	if(decession == true)	
	    	{	
	    		var xhttp = new XMLHttpRequest();
    			xhttp.open("POST", "/Project/view/deleteUser.php", true);
    			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    			xhttp.send("id="+id+"&table="+table);
    			location.reload();
    			document.getElementById("message").innerHTML = "Data Deleted Successfully.";
	    	}		    		
	    }
}
