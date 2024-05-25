function validate() {

    
    let name = document.getElementById("name");
    let email = document.getElementById("email").value;
    
    let phone = document.getElementById("phone").value;
    
    let pattern =/^[a-zA-Z/s]+$/;
       
        let check=pattern.test(name.value);
        if(name.value == "")
        {
            alert("Name not empty");
            return false;
        }
        
       
        else if(check!=true)
        {
        
            alert("Name contains only alphabets");
            return false;
        }
    
        let regex = /[a-zA-Z0-9\.\-_]+@{1}[a-zA-Z0-9]+\.{1,2}[a-zA-Z]{2,3}/;
    
        
    if (!regex.test(email)) {
        alert("Email is invalid.");
        return false; // Prevent form submission
    }
    
    
    
        
    

    
    
    return true; // Allow form submission
}


