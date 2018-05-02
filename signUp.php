<?php
session_start();
include 'session/db_handler.php';
include 'header.php';


?>

<div class="container">
	<div class="row">
		<div class="col-6">
			<form id="signUp" action="session/useSignUp.php" method="POST" onsubmit='return formValidation()'>
				<h2>Sign Up</h2>
				<p id="head"></p>
				<div class="form-group">
					<b><label>First Name</label></b>
					<input id="firstname" type="text" name="firstName"class="form-control" placeholder="Enter Your First Name" required>
					<p id="p1"></p>
					<br>
					<b><label>Last Name</label></b>
					<input id="lastname" type="text" name="lastName" class="form-control" placeholder="Enter Your Last Name" required>
					<p id="p2"></p>
					<br>
					<b><label>Email</label></b>
					<input id="email" type="email" name="email" class="form-control"  placeholder="Enter email" required>
					<p id="p3"></p>
					<br>
					<b><label>Phone</label></b>
					<input id="phone" type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
					<p id="p4"></p>
					<br>
					<b><label>Address</label></b>
					<input id="addr" type="text" name="address" class="form-control" placeholder="Enter address" required>
					<p id="p5"></p>
					<br>
					<b><label >Password</label></b>
					<input id="password" type="password" name="password" class="form-control"  placeholder="Password" required>
                    <p id="p6"></p>
                    <br>
					<b><label >Confirm Password</label></b>
					<input id="confirmpassword" type="password" name="confirmpassword" class="form-control" placeholder="Confirm password" required>
				</div>
				<button type="submit" class="btn btn-primary">Sign Up</button>
				<?php echo $_SESSION["signUp_msg"]?>

				<p>By continuing you agree to our Terms and Conditions and the Music Land ® Program Terms.</p>
				<p>Already have an account? <a href="signIn.php">Sign In</a></p>
			</form>
			<a href="index.php">Back to main page</a>
		</div>
		<div class="col-6"></div>
	</div>
</div>
<script>
    function formValidation() {
// Make quick references to our fields.
        var firstname   = document.getElementById('firstname');
        var lastname    = document.getElementById('lastname');
        var email       = document.getElementById('email');
        var phone       = document.getElementById('phone');
        var addr        = document.getElementById('addr');
        var password    = document.getElementById('password');

// Check each input in the order that it appears in the form.
        if (inputAlphabet(firstname, "* For your first name please use alphabets only *")) {
            if (inputAlphabet(lastname, "* For your last name please use alphabets only *")) {
                if (emailValidation(email, "* Please enter a valid email address *")) {
                    if (textNumeric(phone, "* Please enter a valid phone number *")){
                        if (textAlphanumeric(addr, "* For Address please use numbers and letters *")){
                            if (passwordValidation(password, "* Please enter a valid password *")) {
                                return true;
                            }
                        }

                    }
                }
            }
        }
        return false;
    }

    // Function that checks whether input text is an alphabetic character or not.
    function inputAlphabet(inputtext, alertMsg) {
        var alphaExp = /^[a-zA-Z]+$/;
        if (inputtext.value.match(alphaExp)) {
            return true;
        } else {
            document.getElementById('p1').innerText = alertMsg;
            document.getElementById('p2').innerText = alertMsg;
            inputtext.focus();
            return false;
        }
    }

    // Function that checks whether an user entered valid email address or not and displays alert message on wrong email address format.
    function emailValidation(inputtext, alertMsg) {
        var emailExp = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
        if (inputtext.value.match(emailExp)) {
            return true;
        } else {
            document.getElementById('p3').innerText = alertMsg;
            inputtext.focus();
            return false;
        }
    }

    // Function that checks whether input text is numeric or not.
    function textNumeric(inputtext, alertMsg) {
        var numericExpression = /^[0-9]+$/;
        if (inputtext.value.match(numericExpression) && inputtext.value.length == 8) {
            return true;
        } else {
            document.getElementById('p4').innerText = alertMsg;
            inputtext.focus();
            return false;
        }
    }

    // Function that checks whether input text includes alphabetic and numeric characters.
    function textAlphanumeric(inputtext, alertMsg) {
        var alphaExp = /^[0-9a-zA-Z]+$/;
        if (inputtext.value.match(alphaExp)) {
            return true;
        } else {
            document.getElementById('p5').innerText = alertMsg;
            inputtext.focus();
            return false;
        }
    }



    function passwordValidation(inputtext, alertMsg) {
        var passwordExp = document.getElementById('confirmpassword');
        if (inputtext.value.match(passwordExp)) {
            return true;
        } else {
            document.getElementById('p6').innerText = alertMsg;
            inputtext.focus();
            return false;
        }
    }
</script>
