<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f1e1;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .heading {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
           
        }

        .error {
            color: #ff0000;
            margin-bottom: 10px;
            font-size: 14px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 350px;
        }

        form input,
        form textarea {
            margin-bottom: 15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: #117864;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 10px 100px;
            font-size: 17px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: lightblue;
        }

        form textarea {
            resize: vertical;
        }

        p {
            text-align: center;
            font-size: 16px;
        }

        a {
            color: #4CAF50;
            text-decoration: underline;
        }
    </style>
    <script>
        function validateForm() {
            var username = document.forms["registrationForm"]["username"].value;
            var password = document.forms["registrationForm"]["password"].value;
            var email = document.forms["registrationForm"]["email"].value;
            var fullname = document.forms["registrationForm"]["fullname"].value;
            var phone = document.forms["registrationForm"]["phone"].value;
            var country = document.forms["registrationForm"]["country"].value;
            var address = document.forms["registrationForm"]["address"].value;

            // Perform validation checks
            if (username.trim() === "") {
                alert("Username is required");
                return false;
            }

            if (password.trim() === "") {
                alert("Password is required");
                return false;
            }

            if (email.trim() === "") {
                alert("Email is required");
                return false;
            } else if (!isValidEmail(email)) {
                alert("Invalid email format");
                return false;
            }

            if (fullname.trim() === "") {
                alert("Full Name is required");
                return false;
            }

            if (phone.trim() === "") {
                alert("Phone Number is required");
                return false;
            } else if (!isValidPhoneNumber(phone)) {
                alert("Invalid phone number format");
                return false;
            }

            if (country.trim() === "") {
                alert("Country is required");
                return false;
            }

            if (address.trim() === "") {
                alert("Address is required");
                return false;
            }

            return true;
        }

        // Function to check if the email format is valid
        function isValidEmail(email) {
            // Use a regular expression to validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Function to check if the phone number format is valid
        function isValidPhoneNumber(phone) {
            // Use a regular expression to validate phone number format
            var phoneRegex = /^\+?\d+$/;
            return phoneRegex.test(phone);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 class="heading">Create Account</h2>
      
            <form action=" conf_reg.php" method="POST" >
            <input type="text" name="firstname" placeholder="First Name" required>
             <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="conf_password" placeholder=" Confirm Password" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="address" placeholder="Address" rows="4" required></textarea>
            <input type="submit" value="Create Account">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>