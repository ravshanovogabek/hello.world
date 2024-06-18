<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('84yls3nv4ei81.webp'); /* Replace 'your-background-image.jpg' with the actual path to your image */
            background-size: cover;
            background-position: center ;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label, input {
            display: block;
            margin-bottom: 15px;
            width: 100%;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: green;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .fa {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form action="app.php" method="post">
        <label for="name"><i class="fa fa-user"></i>Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email"><i class="fa fa-envelope"></i>Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password"><i class="fa fa-lock"></i>Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password"><i class="fa fa-lock"></i>Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <input type="submit" value="Register">
    </form>
</body>
</html>
