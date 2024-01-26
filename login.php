<?php
session_start();
$_SESSION;
$errorMessage;
include('includes/dbcon.php'); // Thirrja e databazes
include('models/UserModel.php'); // Thirrja e user modelit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredUsername = $_POST['email']; 
    $enteredPassword = $_POST['password'];

    $userModel = new UserModel($pdo);
    $user = $userModel->getUserByEmail($enteredUsername);

    if ($user && $enteredPassword == $user['password']) {
        $_SESSION['user'] = $user;
        // qetu pe vendosum ne session userin qe pe perodrim nkrejt webin ka me u perdor
        header('Location: index.php');    
    } else {
        $errorMessage = 'Invalid data';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            width: 25%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: grey;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: red;
        }

        .error-message {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .success-message {
            color: rgb(24, 202, 24);
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <form action="" class="form" onsubmit="return validateForm()" method="POST">
        <?php
        if (!empty($errorMessage)) {
            echo '<p class="error-message">' . $errorMessage . '</p>';
        }?>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p>Password: <input type="password" name="password" id="password"></p>
        <input type="submit">
    </form>

    <script>
        function validateForm() {
            // let name = document.getElementById('name').value;
            // let lastname = document.getElementById('lastname').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            // let nameRegex = /^[a-zA-Z\s]+$/;
            // if (!nameRegex.test(name)) {
            //     alert('Please enter a valid name.');
            //     return false;
            // }

            // let lastnameRegex = /^[a-zA-Z\s]+$/;
            // if (!lastnameRegex.test(lastname)) {
            //     alert('Please enter a valid lastname.');
            //     return false;
            // }

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return false;
            }

            if (password.length < 6) {
                alert('Password must be at least 6 characters long');
                return false;
            }

            
            // displaySuccessMessage();

            
            return true;
        }

        function displaySuccessMessage() {
          
            let successMessage = document.createElement('p');
            successMessage.textContent = 'Form submitted successfully!';
            successMessage.className = 'success-message';

            
            let form = document.querySelector('.form');
            form.appendChild(successMessage);
        }
    </script>

</body>
</html>
