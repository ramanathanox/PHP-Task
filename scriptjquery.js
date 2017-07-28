 $(document).ready(function () {
                $("#submit").click(function () {
                    var firstName = $('#firstName').val();

                    if (firstName == "") {
                        $("#firstNameerror").css("display", "inline");
                        $('#firstNameerror').html("This field is required");
                        $("input").focus(function () {
                            $("#firstNameerror").css("display", "none");
                        });
                        return false;
                    }
                    var firstnameREGEX = /^[A-Za-z]{3,16}$/;
                    if (!firstnameREGEX.test(firstName)) {
                        $("#firstNameerror").css("display", "inline");
                        $('#firstNameerror').html("Name is incorrect");
                        return false;
                    }

                    var password = $('#password').val();
                    if (password == "") {
                        $("#passworderror").css("display", "inline");
                        $("#passworderror").html("This field is required");
                        $("input").focus(function () {
                            $("#passworderror").css("display", "none");
                        });
                        return false;
                    }
                    var confirmpassword = $('#confirmpassword').val();
                    if (confirmpassword == "") {
                        $("#confirmpassworderror").css("display", "inline");
                        $("#confirmpassworderror").html("This field is required");
                        $("input").focus(function () {
                            $("#confirmpassworderror").css("display", "none");
                        });
                        return false;
                    }
                    
                    var emailID = $('#emailID').val();

                    if (emailID == "") {
                        $("#emailIDerror").css("display", "inline");
                        $("#emailIDerror").html("This field is required");
                        $("input").focus(function () {
                            $("#emailIDerror").css("display", "none");
                        });
                        return false;
                    }
                    var emailREGEX = /^\w+([\._ ]?\w+)*@\w+([\._]?\w+)*(\.\w{2,3})$/;
                    if (!emailREGEX.test(emailID)) {
                        $("#emailIDerror").css("display", "inline");
                        $("#emailIDerror").html("Email is incorrect");
                        return false;
                    }

                    var mobileNumber = $('#mobileNumber').val();
                    if (mobileNumber == "")
                    {
                        $("#mobileNumbererror").css("display", "inline");
                        $("#mobileNumbererror").html("This field is required");
                        $("input").focus(function () {
                            $("#mobileNumbererror").css("display", "none");
                        });
                        return false;
                    }
                    mobilenumberREGEX = /^[0-9]{10}$/;
                    if (!mobilenumberREGEX.test(mobileNumber)) {
                        $("#mobileNumbererror").css("display", "inline");
                        $('#mobileNumbererror').html("Mobile no must 10 digit");
                        return false;
                    }

                    var address = $('#address').val();

                    if (address == "")
                    {
                        $("#addresserror").css("display", "inline");
                        $("#addresserror").html("This field is required");
                        $("textarea").focus(function () {
                            $("#addresserror").css("display", "none");
                        });
                        return false;
                    }
                    var addressREGEX = /^[A-Za-z]*$/;
                    if (!addressREGEX.test(address))
                    {
                        $("#addresserror").css("display", "inline");
                        $('#addresserror').html("Mobile no must 10 digit");
                        return false;
                    }
                    var gender = $('#gender').val();
                    if ($("#gender:checked").length == 0) {
                        $("#gendererror").css("display", "inline");
                        $("#gendererror").html("This field is required");
                        $("input").focus(function () {
                            $("#gendererror").css("display", "none");
                        });
                        return false;
                    }
                    var dob = $('#dateofbirth').val();
                    if (dob == "") {
                        $("#dateofbirtherror").css("display", "inline");
                        $("#dateofbirtherror").html("This field is required");
                        $("input").focus(function () {
                            $("#dateofbirtherror").css("display", "none");
                        });
                        return false;
                    }
                    var photo = $('#profilePicture').val();
                    if (photo == "") {
                        $("#profilePictureerror").css("display", "inline");
                        $("#profilePictureerror").html("This field is required");
                        $("input").focus(function () {
                            $("#profilePictureerror").css("display", "none");
                        });
                        return false;
                    }
                });
            });
