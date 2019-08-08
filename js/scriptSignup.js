//my signup script, GUI signup
$('document').ready(function()
{
    /* validation */
    /*here the validation for name email password */
    $("#register-form").validate({
        rules:
        {
             /*validation for name check length or also check if empty or not */
            user_name: {
                required: true,
                minlength: 3
            },
             /*validation for password check lenght or also check if empty or not */
            password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            /*confirm password */
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            /*validation for email */
            user_email: {
                required: true,
                email: true
            },
        },
        /*error message that shown to  user */
        messages:
        {
            user_name: "Enter a Valid Username",
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum length of 8 Characters"
            },
            user_email: "Enter a Valid Email",
            cpassword:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            }
        },
        submitHandler: submitForm
    });
    /* validation */

    /* form submit */
    function submitForm()
    {
        //here first searalize form data 
        var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'register.php',//this is php file where php coding is combined with this 
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry that email address is already taken !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
                else if(data=="registered")
                {

                    $("#btn-submit").html('Signing Up');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("successreg.php"); }); ',5000);

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */

});