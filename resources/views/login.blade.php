<html>

<head>
    <link href="{{asset('public/registration/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <link href="{{asset('public/registration/css/jquery-ui.css')}}" rel="stylesheet" id="bootstrap-css">

    <script src="{{asset('public/registration/js/jquery.min.js')}}"></script>

    <script src="{{asset('public/registration/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/registration/js/jquery-ui.js')}}"></script>


    <style type="text/css">
    .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 10%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }

    .lds-ring {
        display: inline-block;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        text-align: center;
        opacity: 0.7;
        background-color: #fff;
        z-index: 99;
    }

    .lds-ring div {
        position: absolute;
        width: 64px;
        height: 64px;
        border: 8px solid #fff;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: #000 transparent transparent transparent;

        position: absolute;
        top: 40%;
        left: 49%;
        z-index: 100;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>

</head>

<body>
    <div class="lds-ring" style="display:none;">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{asset('public/registration/images/logo_white.png')}}" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">SignUp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Login</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Registration</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="reg-first-name"
                                        placeholder="First Name *" value="" />
                                    <div class="invalid-feedback">
                                        Enter First Name
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="reg-last-name" placeholder="Last Name *"
                                        value="" />
                                    <div class="invalid-feedback">
                                        Enter Last Name
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="reg-password"
                                        placeholder="Password *" value="" />
                                    <div class="invalid-feedback">
                                        Enter Password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" class="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" class="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                    <div class="invalid-feedback gender_val_div">
                                        Choose Your Gender
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="reg-email" placeholder="Your Email *"
                                        value="" />
                                    <div class="invalid-feedback">
                                        Enter Email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" id="reg-mobile" name="txtEmpPhone"
                                        class="form-control" placeholder="Your Phone *" value="" />
                                    <div class="invalid-feedback">
                                        Enter Mobile Number
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Date Of Birth" id="dateofbirth"
                                        value="" />
                                    <div class="invalid-feedback">
                                        Choose Date of Birth
                                    </div>
                                </div>

                                <button type="button" class="btnRegister" id="btn-reg-user">Register</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="log-email-mobile"
                                        placeholder="Email or Mobile No.*" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="log-password"
                                        placeholder="Password *" value="" />
                                </div>
                                <button type="button" class="btnRegister" id="btn-login-user">Login</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
    $(function() {
        $("#dateofbirth").datepicker();
    });

    $(document).on("click", "#btn-reg-user", function() {
        var First_Name = $("#reg-first-name");
        var Last_Name = $("#reg-last-name");
        var Email = $("#reg-email");
        var Mobile = $("#reg-mobile");
        var Password = $("#reg-password");
        var dateofbirth = $("#dateofbirth");
        var gender = $(".gender:checked").val();
        var validate = true;
        if ($.trim(First_Name.val()) == "") {
            $(First_Name).parent().find('div').show();
            if (validate == true) {
                $(First_Name).focus();
            }
            validate = false;
        } else {
            $(First_Name).parent().find('div').hide();
        }
        if ($.trim(Last_Name.val()) == "") {
            $(Last_Name).parent().find('div').show();
            if (validate == true) {
                $(Last_Name).focus();
            }
            validate = false;
        } else {
            $(Last_Name).parent().find('div').hide();
        }
        if ($.trim(Email.val()) == "" && $.trim(Mobile.val()) == "") {
            $(Email).parent().find('div').show();
            $(Email).parent().find('div').text("Enter Email or Mobile Number");
            if (validate == true) {
                $(Email).focus();
            }
            validate = false;
        } else {
            $(Email).parent().find('div').text("Enter Email");
            $(Email).parent().find('div').hide();
        }
        if ($.trim(Password.val()) == "") {
            $(Password).parent().find('div').show();
            if (validate == true) {
                $(Password).focus();
            }
            validate = false;
        } else {
            $(Password).parent().find('div').hide();
        }
        if ($.trim(dateofbirth.val()) == "") {
            $(dateofbirth).parent().find('div').show();
            if (validate == true) {
                $(dateofbirth).focus();
            }
            validate = false;
        } else {
            $(dateofbirth).parent().find('div').hide();
        }
        if(validate){
        $.ajax({
            url : "/save-registration-detail",
            type : 'POST',
            data : { 'First_Name' :First_Name.val() , 'Last_Name' :Last_Name.val() ,  'Email' :Email.val() ,
             'Mobile' :Mobile.val() , 'Password' :Password.val() , 'gender':gender, 'dateofbirth' :dateofbirth.val() ,"_token": "{{ csrf_token() }}", },
            beforeSend : function(){ $(".lds-ring").show() },
            complete : function() { $(".lds-ring").hide() },
            success : function(data){
               if(data.message == "Email_Exist"){
                $("#reg-email").parent().find('div').show();
                $("#reg-email").parent().find('div').text("Email Exist!");
                setTimeout(() => {
                    $("#reg-email").parent().find('div').text("Enter Email");
                    $("#reg-email").parent().find('div').hide();
                }, 1000);
               }else if(data.message == "Mobile_Exist"){
                $("#reg-mobile").parent().find('div').show();
                $("#reg-mobile").parent().find('div').text("Mobile Number Exist!");
                setTimeout(() => {
                    $("#reg-mobile").parent().find('div').text("Enter Mobile");
                    $("#reg-mobile").parent().find('div').hide();
                }, 1000);
               }else{
                 location.replace("/");
               }
            }
        });
    }

    });

    $(document).on("click", "#btn-login-user", function() {
        var Email_Mobile = $("#log-email-mobile");
        var Password = $("#log-password");
        var validate = true;
        if ($.trim(Email_Mobile.val()) == "") {
            $(Email_Mobile).parent().find('div').show();
            if (validate == true) {
                $(Email_Mobile).focus();
            }
            validate = false;
        } else {
            $(Email_Mobile).parent().find('div').hide();
        }
        if ($.trim(Password.val()) == "") {
            $(Password).parent().find('div').show();
            if (validate == true) {
                $(Password).focus();
            }
            validate = false;
        } else {
            $(Password).parent().find('div').hide();
        }
       
        if(validate){
        $.ajax({
            url : "/check-user-validation",
            type : 'POST',
            data : { 'Email_Mobile' :Email_Mobile.val() , 'Password' :Password.val() ,"_token": "{{ csrf_token() }}"},
            beforeSend : function(){ $(".lds-ring").show() },
            complete : function() { $(".lds-ring").hide() },
            success : function(data){
               if(data.message == "Wrong_Credential"){
                $("#log-email-mobile").parent().find('div').show();
                $("#log-email-mobile").parent().find('div').text("Email or Mobile Number Not Exist!");
                setTimeout(() => {
                    $("#log-email-mobile").parent().find('div').text("Enter Email or Mobile");
                    $("#log-email-mobile").parent().find('div').hide();
                }, 1000);
               }else{
                 location.replace("/");
               }
            }
        });
    }

    });
    </script>
</body>

</html>