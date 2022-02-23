function SearchForStudent()
{
	var id = document.getElementById("tSearch").value;
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     	 document.getElementById("result").innerHTML = this.responseText;
    	}
		else
		{
			 document.getElementById("result").innerHTML = this.status;
		}
  	};
  	xhttp.open("POST", "/WEBTECH/__FIinalProject__/Update/ProjectV2%20(1)/ProjectFahim/view/showStudent.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);

}


//1 update
$("#pointUpdateButton").click(function(){
  $("#UpdatePointForm").show();
});

//2 click
$("#pointUpdateButton").dblclick(function(){
  $("#UpdatePointForm").hide();
});
//2 click show 
$("#pointUpdateButton").dblclick(function(){
  $("#hideBack").show();
});
//go back hide on 1 click
$("#pointUpdateButton").click(function(){
  $("#hideBack").hide();
});
/*
$(document).ready(function() {
  $('#goBackBtn').click(function(){
    window.history.back();
});
*/
$(document).ready(function(){
  $("#deleteInsTructor").click(function(){
    var deleteConfirm = confirm("Are You Sure You Want to Delete this!"); 
    if (deleteConfirm==true){
      return true;
    }
    else
    {
      return false;
    }
  });
});
/*

$(document).ready(function() {
  $('#backToInstructor').click(function(){
    window.history.back();
});
*/

function Login()
{
  var userId = document.getElementById("userId").value;   
  if(userId=="") 
  {   
         document.getElementById('userIdError').innerHTML="*Invalid Id"; 
         return false;
    }
    var password = document.getElementById( "password").value;   
  if(password == "") 
  {   
         document.getElementById('passwordError').innerHTML="*Password couldn't empty"; 
         return false;
    } 

}
function InstructorRegValidation(){
  
  var instactorEmail = document.getElementById("instactorEmail").value;
   var emailVal = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  if(!instactorEmail.match(emailVal))
  {
    document.getElementById('instactorEmailError').innerHTML="*Email is not valid";
    return false;
  }
var filetoupload = document.getElementById("filetoupload").value;   
  if(filetoupload=="") 
  {   
         document.getElementById('filetouploadError').innerHTML="*Empty file"; 
         return false;
    }
  var teachingExperience = document.getElementById("teachingExperience").value;
  if(teachingExperience==""||teachingExperience<0)
  {
    document.getElementById('teachingExperienceError').innerHTML="*Teaching experience is not valid";
    return false;
  }

var instactorPassword = document.getElementById( "instactorPassword").value;   
  if(instactorPassword == "") 
  {   
         document.getElementById('instactorPasswordError').innerHTML="*Password couldn't empty"; 
         return false;
    } 
    else if(instactorPassword.length<8)
  {   
    document.getElementById('instactorPasswordError').innerHTML="*Paasword can not be less than 8 character";
    return false;
  }

  

    

}
function UpInstructorRegValidation()
{
  var updateInstactorName = document.getElementById("updateInstactorName").value;
   if(updateInstactorName=="")
  {
    document.getElementById('updateInstactorNameError').innerHTML="*Name can not be empty";
    return false;
  }
 var updateInstactorPassword = document.getElementById( "updateInstactorPassword").value;   
  if(updateInstactorPassword == "") 
  {   
         document.getElementById('updateInstactorPasswordError').innerHTML="*Password couldn't empty"; 
         return false;
    } 
    else if(updateInstactorPassword.length<8)
  {   
    document.getElementById('updateInstactorPasswordError').innerHTML="*Paasword can not be less than 8 character";
    return false;
  }
  var updateInstactorEmail = document.getElementById("updateInstactorEmail").value;
   var emailVal = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  if(!updateInstactorEmail.match(emailVal))
  {
    document.getElementById('updateInstactorEmailError').innerHTML="*Email is not valid";
    return false;
  }
var filetoupload = document.getElementById("filetoupload").value;   
  if(filetoupload=="") 
  {   
         document.getElementById('filetouploadError').innerHTML="*Empty file"; 
         return false;
    }
   

      
  var updateTeachingExperience = document.getElementById("updateTeachingExperience").value;
  if(updateTeachingExperience=="")
  {
    document.getElementById('updateTeachingExperienceError').innerHTML="*Teaching experience can not be empty";
    return false;
  }

  
     
}
function UpdateMate()
{
  var filetoupload = document.getElementById("filetoupload").value;   
  if(filetoupload=="") 
  {   
         document.getElementById('filetouploadError').innerHTML="*Empty file"; 
         return false;
    }

}
function UpdateNot()
{
  var notice = document.getElementById("notice").value;   
  if(notice=="") 
  {   
         document.getElementById('noticeError').innerHTML="*Empty !!"; 
         return false;
    }

}
function pointValidation()
{
  var updateLearnerPointsId = document.getElementById("updateLearnerPointsId").value;
   if(updateLearnerPointsId=="")
  {
    document.getElementById('updateLearnerPointsIdError').innerHTML="*Id can not be empty";
    return false;
  }

  var updatePoint = document.getElementById("updatePoint").value;
  if(updatePoint=="" ||updatePoint<0)
  {
    document.getElementById('updatePointError').innerHTML="*Point is not valid";
    return false;
  }
}
function DelPointVal()
{
  var updateLearnerPointsId = document.getElementById("updateLearnerPointsId").value;
   if(updateLearnerPointsId=="")
  {
    document.getElementById('updateLearnerPointsIdError').innerHTML="*Id can not be empty";
    return false;
  }
}