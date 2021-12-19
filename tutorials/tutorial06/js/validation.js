// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$("document").ready(function() {
    $("#name").blur(function() {
        if ($('#name').val() == "") {
            $("#n").html("Please Enter Your Name");
            $("#n").css("color", "red");
            $("#name").removeClass('shadow-success').addClass("shadow-danger");
            $("#n").removeClass("hidden");
        }
        if ($('#name').val()) {
            var name = $('#name').val();
            var name_regex = /^[a-zA-Z][a-zA-Z\s]+$/;
            if (name_regex.test(name)) {
                $("#n").html("");
                $("#n").css("color", "green");
                $("#name").removeClass('shadow-danger').addClass("shadow-success");
                $("#n").addClass("hidden");
            } else {
                $("#name").val("");
                $("#name").focus();
                $("#n").html("For your name please use alphabets only");
                $("#n").css("color", "red");
                $("#name").removeClass('shadow-success').addClass("shadow-danger");
                $("#n").addClass("text-justify");
                $("#n").removeClass("hidden");
            }
        }
    });
    $("#uname").blur(function() {
        if ($('#uname').val() == "") {
            $("#usererr").html("Please Enter The Email");
            $("#usererr").css("color", "red");
            $("#uname").removeClass('shadow-success').addClass("shadow-danger");
            $("#usererr").removeClass("hidden");
        }
        if ($("#uname").val()) {
            var email = $("#uname").val();
            var regexeml = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            if (regexeml.test(email)) {
                $("#usererr").html("");
                $("#usererr").css("color", "green");
                $("#uname").removeClass('shadow-danger').addClass("shadow-success");
                $("#usererr").addClass("hidden");

            } else {
                $("#uname").val("");
                $("#uname").focus();
                $("#usererr").html("Invalid email addresses");
                $("#usererr").css("color", "red");
                $("#uname").removeClass('shadow-success').addClass("shadow-danger");
                $("#usererr").addClass("text-justify");
                $("#usererr").removeClass("hidden");
            }
        }
    });
    $("#pwd").blur(function() {
        if (!$("#pwd").val()) {
            $("#pwderr").html("Please Enter The Password");
            $("#pwderr").css("color", "red");
            $("#pwd").removeClass('shadow-success').addClass("shadow-danger");
            $("#pwderr").removeClass("hidden");
        }
        if ($("#pwd").val()) {
            var pwd = $("#pwd").val();
            var regexpwd = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()-_+*/\`~{}<>,.?[]).{6,20}$/;
            if (regexpwd.test(pwd)) {
                if (pwd.length <= 7) {
                    $("#pwderr").html("Password must be of 8 characters");
                    $("#pwderr").css("color", "red");
                    $("#pwd").val("");
                    $("#pwd").focus();
                    $("#pwd").removeClass('shadow-success').addClass("shadow-danger");
                    $("#pwderr").removeClass("hidden");
                } else {
                    $("#pwderr").html("");
                    $("#pwderr").css("color", "green");
                    $("#pwd").removeClass('shadow-danger').addClass("shadow-success");
                    $("#pwderr").addClass("hidden");
                }
            } else {
                $("#pwd").val("");
                $("#pwd").focus();
                $("#pwderr").html("Your Password must have uppercase, lowercase, number and a special character");
                $("#pwderr").css("color", "red");
                $("#pwd").removeClass('shadow-success').addClass("shadow-danger");
                $("#pwderr").addClass("text-justify");
                $("#pwderr").removeClass("hidden");
                $("#pwderr").addClass("hidden");
            }
        }
    });
    $("#cpwd").blur(function() {
        if (!$("#cpwd").val()) {
            $("#repwderr").html("Please Re-Type The Password");
            $("#repwderr").css("color", "red");
            $("#cpwd").removeClass('shadow-success').addClass("shadow-danger");
            $("#repwderr").removeClass("hidden");
        }
        if ($("#cpwd").val()) {
            var cpwd = $("#cpwd").val();
            var pwd = $("#pwd").val();
            if (pwd != cpwd) {
                $("#repwderr").html("Password doesn't match");
                $("#repwderr").css("color", "red");
                $("#cpwd").val("");
                $("#cpwd").focus();
                $("#cpwd").removeClass('shadow-success').addClass("shadow-danger");
                $("#repwderr").removeClass("hidden");
            } else {
                $("#repwderr").html("");
                $("#repwderr").css("color", "green");
                $("#cpwd").removeClass('shadow-danger').addClass("shadow-success");
                $("#repwderr").addClass("hidden");
            }
        }
    });
    $("#phone").blur(function() {
        if (!$("#phone").val()) {
            $("#moberr").html("Please Enter phone number");
            $("#moberr").css("color", "red");
            $("#phone").removeClass('shadow-success').addClass("shadow-danger");
            $("#moberr").removeClass("hidden");
        }
        if ($("#phone").val()) {
            var phone = $("#phone").val();
            var regexmob = /^[0-9]{10}$/;
            if (regexmob.test(phone)) {
                $("#moberr").html("");
                $("#moberr").css("color", "green");
                $("#phone").removeClass('shadow-danger').addClass("shadow-success");
                $("#moberr").addClass("hidden");
            } else {
                $("#phone").val("");
                $("#phone").focus();
                $("#moberr").html("Invalid phone number only 10 digit valid");
                $("#moberr").css("color", "red");
                $("#phone").removeClass('shadow-success').addClass("shadow-danger");
                $("#moberr").addClass("text-justify");
                $("#moberr").removeClass("hidden");
            }
        }
    });
    $("#btnsignup").click(function() {
        if (!$("#name").val()) {
            $("#n").html("Please Enter Your Name");
            $("#n").css("color", "red");
            $("#name").removeClass('shadow-success').addClass("shadow-danger");
            $("#n").removeClass("hidden");
            return false;
        }
        if (!$("#uname").val()) {
            $("#usererr").html("Please Enter The Email");
            $("#usererr").css("color", "red");
            $("#uname").removeClass('shadow-success').addClass("shadow-danger");
            $("#usererr").removeClass("hidden");
            return false;
        }
        if (!$("#pwd").val()) {
            $("#pwderr").html("Please Enter The Password");
            $("#pwderr").css("color", "red");
            $("#pwd").removeClass('shadow-success').addClass("shadow-danger");
            $("#pwderr").removeClass("hidden");
            return false;
        }
        if (!$("#cpwd").val()) {
            $("#repwderr").html("Please Re-Type Password");
            $("#repwderr").css("color", "red");
            $("#cpwd").removeClass('shadow-success').addClass("shadow-danger");
            $("#repwderr").removeClass("hidden");
            return false;
        }
        if (!$("#phone").val()) {
            $("#moberr").html("Please Enter Phone Number");
            $("#moberr").css("color", "red");
            $("#phone").removeClass('shadow-success').addClass("shadow-danger");
            $("#moberr").removeClass("hidden");
            return false;
        }
        if (!$("#image").val()) {
            $("#imgerr").html("Please Select The Image");
            $("#imgerr").css("color", "red");
            $("#image").removeClass('shadow-success').addClass("shadow-danger");
            $("#imgerr").removeClass("hidden");
            return false;
        } else {
            alert("Form Submitted Successfuly!");
            // $("#status").html("Form Submitted Successfuly!");
            return true;
        }
    });
});