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
                });
            });