
/* global firstName */

$(document).ready(function () {
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var emailID = $('#emailID').val();
    var mobileNumber = $('#mobileNumber').val();
    var department = $('#department option:selected').val();
    var gender = $('input[name=gender]:checked').length;
    var hobbies = $('input[name="hobbies"]:checked').length;
    var feedBack = $('#feedBack').val();

    $("#firstName").keyup(function ()
    {
        var firstName = $('#firstName').val();
        var firstnameREGEX = /^[A-Za-z]{3,16}$/;
        if (firstName == "" || !firstnameREGEX.test(firstName))
        {
            $('.message-display.firstName').html("<span>Please type Firstname (or) incorrect!!</span>");
           //$('.message-display.firstName').removeClass('hidden');
            return false;
        } else
        {
//            $('.message-display.firstName').addClass('hidden');
            $('.message-display.firstName.hidden').html("<span>Ok!</span>");
            return false;
        }
    });

    $("#password").keyup(function ()
    {
        var password = $('#password').val();
        var passwordREGEX = /^[A-Za-z0-9]]?$)/;
        if (password == "" || !passwordREGEX.test(password))
        {
            $('.message-display.password').html("<span>Please type password (or) incorrect!!</span>");
//            $('.message-display.password').addClass('hidden');
            return false;
        } else
        {
//            $('.message-display.password').removeClass('hidden');
            $('.message-display.password').html("<span>Ok!</span>");
            return false;
        }
    });

    $("#emailID").keyup(function ()
    {
        var emailID = $('#emailID').val();
        var emailREGEX = /^\w+([\._ ]?\w+)*@\w+([\._]?\w+)*(\.\w{2,3})$/;
        if (emailID == "" || !emailREGEX.test(emailID))
        {
            $('.message-display.emailID').html("<span>Enter your email (or) Your email is invalid</span>");
//            $('.message-display.emailID').addClass('hidden');
            return false;
        } else
        {
//            $('.message-display.emailID').removeClass('hidden');
            $('.message-display.emailID').html("<span>Ok!</span>");
            return false;
        }
    });

    $("#mobileNumber").keyup(function ()
    {
        var mobileNumber = $('#mobileNumber').val();
        mobilenumberREGEX = /^[0-9]{10}$/;
        if (mobileNumber == "" || !mobilenumberREGEX.test(mobileNumber))
        {
            $('.message-display.mobileNumber').html("<span> Please type valid number (or) incorrect!!</span>");
//            $('.message-display.mobileNumber').addClass('hidden');
            return false;
        } else
        {
//            $('.message-display.mobileNumber').removeClass('hidden');
            $('.message-display.mobileNumber').html("<span>Ok!</span>");
            return false;
        }
    });

    $("#department").keyup(function ()
    {
        var department = $('#department option:selected').val();
        if (department == "--------select--------")
        {
            $('.message-display.department').html("<span> Please select your department!!</span>");
//            $('.message-display.department').addClass('hidden');
            return false;
        } else
        {
//            $('.message-display.department').removeClass('hidden');
            $('.message-display.department').html("<span>Ok!</span>");
            return false;
        }
    });

 /*   var gender = $('input[name=gender]:checked').length;
    if (gender <= 0)
    {

        alert("Select your gender");
        return false;
    }

    var hobbies = $('input[name="hobbies"]:checked').length;
    if (hobbies <= 0)
    {
        alert("Select your hobbies");
        return false;
    }*/
    $("#address").keyup(function ()
    {
        var address = $('#address').val();
        var addressREGEX = /^[A-Za-z]*$/;
        if (address == "" || !addressREGEX.test(address))
        {
            $('.message-display.address').html("<span> Please type your address!!</span>");
//            $('.message-display.address').addClass('hidden');
            return false;
        } else
        {
//            $('.message-display.address').removeClass('hidden');
            $('.message-display.address').html("<span>Ok!</span>");
            return false;
        }
    });

});
