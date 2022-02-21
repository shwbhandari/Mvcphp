$(document).ready(function(){
    var sEmail = $('#email').val(); 
    $('#usercheck').hide();
    $('#firstnamecheck').hide();
    $('#lastnamecheck').hide();
    $('#mobilecheck').hide();
    $('#passcheck').hide();
   

    let usernameError = true;
    $('#username').keyup(function(){
        validateUsername();
    });
    
    let firstnameError = true;
    $('#firstname').keyup(function(){
        validateFirstname();
    });
    let lastameError = true;
    $('#lastname').keyup(function(){
        validateLastname();
    });
      
});
//validate username
    function validateUsername(){
        let usernameValue = $('#username').val();
        if(usernameValue.length==''){
        $('#usercheck').show();
        usernameError = false;
        return false;
       
        }
        else if((usernameValue.length<3)||(usernameValue.length>10)){
            $('#usercheck').show();
            $('#usercheck').html("**length of username must be between 3 and 10")
            usernameError = false;
            return false;
            
        }
        else{
            $("#usercheck").hide();
        }
        
    }
     //validate firstname
   
     function validateFirstname(){
         let firstnameValue = $('#firstnamecheck').val();
         if(firstnameValue.length==''){
         $('#firstnamecheck').show();
         firstnameError = false;
         return false;
         }
         else if((firstnameValue.length<3)||(firstnameValue.length>10)){
             $('#firstnamecheck').show();
             $('#firstnamecheck').html("**length of firstname must be between 3 and 10")
             firstameError = false;
             return false;
             
         }
         else{
             $("firstnamecheck").hide();
         }
     }
     function validateLastname(){
        let lastnameValue = $('#lastnamecheck').val();
        if(lastnameValue.length==''){
        $('#usercheck').show();
        lastnameError = false;
        return false;
        }
        else if((lastnameValue.length<3)||(lastnameValue.length>10)){
            $('#lastname').show();
            $('#lastname').html("**length of lastname must be between 3 and 10")
            usernameError = false;
            return false;
           
        }
        else{
            $("#lastname").hide();
        }
    }
        //validate mobileno
   
        function validateMobile(){
            let mobileValue = $('#mobilecheck').val();
            if(mobileValue.length==''){
            $('#firstnamecheck').show();
            firstnameError = false;
            return false;
            }
            else if(mobileValue.length!=10){
                $('#mobilecheck').show();
                $('#mobilecheck').html("**Mobile should be of 10 digits")
                mobileError = false;
                return false;
                
            }
            else{
                $("mobilecheck").hide();
            }
        }
    function validateEmail(sEmail) {
        var filter = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
        if (filter.test(sEmail)) {
        return true;
        }
        else {
        return false;
        e.preventDefault();
        }
    }