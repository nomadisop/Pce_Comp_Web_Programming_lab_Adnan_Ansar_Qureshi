function validateForm(){
    var password1 =document.form.pp.value;
    var password2 =document.form.cpp.value;
    var email = document.form.emm.value;
    var dotPosition = email.lastIndexOf(".");
    var username = document.form.uun.value;

    if(dotPosition+2>=email.length){
        alert("Please Enter valide Email ID.");
        return false;
    }
    else{
        if(username.length<5){
            alert("Username must be atleast 5 characters long.");
            return false;
        }
        else{
        if(password1.length<7){
            alert("Password must be atleast 7 characters long.")
            return false;
        }
        else{
            if(password1 == password2){
                return true;
            }
            else{
                alert("Password must be same.")
                return false;
            }
        }
        }
    }
    
}