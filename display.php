!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Confirmation Status</title>
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
            box-sizing: border-box;
        }

        .heading {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        a {
            color: #4CAF50;
            text-decoration: underline;
        }

        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .heading {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="heading">Account Confirmation</h2>
        <p>Successfully created.</p>
        <p>You can now <a href="login.php">login</a> to access your account.</p>
    </div>
</body>
</html>