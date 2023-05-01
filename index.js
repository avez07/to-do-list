function validate(){                                          //validation for signup form
    var titlle = document.getElementById("titlle").value;
    var task = document.getElementById("task").value;
   


    if(titlle == null || titlle == ""){ 
        document.getElementById("v-tittle").innerHTML = "Please fill the text" ;
        return false;
    }
}