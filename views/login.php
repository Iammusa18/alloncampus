<?php
/**
 *  Login form
 */
?>

 <a href="" ><button class="btn btn-sm btn-success " >Home</button></a>

<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div id="loginerror" class="alert alert-danger hidden">
                                <strong>Login Error!</strong>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Login" name="login" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password"
                                       value="" required>
                            </div>
                            <button class="btn btn-sm btn-success " id="btn_login">Login</button>
                           
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h3 class="panel-title">Please signUp</h3>
                </div>
             <div class="signin-form">
                <form class="form-signin" method="post" id="register-form">

                                <div id="error">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                                    <span id="check-e"></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
                                </div>
                                <hr />

                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-success" name="btn-save" id="btn-submit">
                                        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                                    </button>
                                </div>

                </form>
            </div>
                       
            </div>
        </div>
</div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#btn_login').on('click', function (event) { //Login button action sends data to controller
            event.preventDefault();
            $.post(
                'controllers/admin.php',
                {
                    action: 'login',
                    login: $('input[name=login]').val(),
                    password: $('input[name=password]').val()
                },
                function (data) {
                    if (data.login != false) { //if login success shows admin page
                        loadAdmin();
                    } else {
                        $('#loginerror').removeClass('hidden'); //else shows error
                    }
                },
                'json');
        });

});
$('document').ready(function()
{
    /* validation */
    /*here the validation for name email password */
    $("#register-form").validate({
        rules:
        {
             /*here the validation for name check lenght or also check if empty or not */
            user_name: {
                required: true,
                minlength: 3
            },
             /*here the validation for password check lenght or also check if empty or not */
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
                minlength: "Password Needs To Be Minimum Length of 8 Characters"
            },
            user_email: "Enter a Valid Email address",
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
        var data = $("#register-form").serialize();//this will searilize form  

        $.ajax({ //AJAX handles all this in background without refreshing page

            type : 'POST',
            url  : 'controllers/register.php',//this is php file where php coding 
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){//fade feature: fadeIn(speed,easing,callback)


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
</script> 
