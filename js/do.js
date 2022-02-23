
function myAjax(){
    var cname= document.getElementById("cname").value;
    
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("demo").innerHTML = this.responseText;
    }
    else
    {
    document.getElementById("demo").innerHTML = this.status;
    }
    };
    xhttp.open("POST", "/Project/control/SearchControl.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("cname="+cname);
    }
    