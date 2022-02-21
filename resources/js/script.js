$(document).ready(function(){

    $("#signup").click(function(){
        const firstname = $("#firstname").val();
        const lastname = $("#lastname").val();
        const username = $("#username").val();
        const email = $("#email").val();
        const password = $("#password").val();
        if(firstname!="" && lastname !="" && username !=""&& email != "" && password!=""){
            $.ajax({
                type:"POST",
                url:"signup.php",
                data: form.serialize(),
                dataType:'json',
                success:function(data){
                    if(feedback.status === "error"){
                        $(".email").addClass("");
                        $(".emailError").html(feedback.message);
                    } else if(feedback.status === "success"){
                         window.location = "../login/";
                    }
                }
            })
        }
    
    })
})