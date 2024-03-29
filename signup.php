<?php
include('dbcon.php');
include('UserModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formMessage ;
    $name = $_POST['name'];
    $surname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userModel = new UserModel($pdo);
    $existingUser = $userModel->getUserByEmail($email);
    
    if ($existingUser) {
        $formMessage = "Email is already registered. Please choose another email.";
    } else {
        $userModel->createUser($name, $surname, $email, $password);
        // $_SESSION['user'] = $userModel;
        // header('Location: index.php');    
       //var_dump($userModel);

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        button {
            background-color: grey;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: red;
        }

        .error-message {
            color: red;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
<form id="signup" action="" method="POST">
    <?php 
    if (!empty($errorMessage)) {
        echo '<p class="error-message">' . $errorMessage . '</p>';
    }?>
    <label>Name:</label>
    <input type="text" id="name" name="name">
    <div class="error-message" id="nameError"></div>

    <label>Surname:</label>
    <input type="text" id="surname" name="lastname">
    <div class="error-message" id="surnameError" ></div>

    <label>Email:</label>
    <input type="text" id="email" name="email">
    <div class="error-message" id="emailError"></div>

    <label>Password:</label>
    <input type="password" id="password" name="password">
    <div class="error-message" id="passwordError"></div>

    <button type="submit" onclick="validateForm()">Submit</button>
</form>

<script>
    let nameRegex = /^[A-Z][a-z]{3,8}$/;
    let surnameRegex = /^[A-Z][a-z]{3,8}$/; 
    let emailRegex = /[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
    let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/; 

    function validateForm(event) {
        let nameInput = document.getElementById('name');
        let nameError = document.getElementById('nameError');
        let surnameInput = document.getElementById('surname');
        let surnameError = document.getElementById('surnameError');
        let emailInput = document.getElementById('email');
        let emailError = document.getElementById('emailError');
        let passwordInput = document.getElementById('password');
        let passwordError = document.getElementById('passwordError');

        nameError.innerText = '';
        surnameError.innerText = '';
        emailError.innerText = '';
        passwordError.innerText = '';

        if (!nameRegex.test(nameInput.value)) {
            nameError.innerText = 'Invalid name';
            event.preventDefault();
            return false;
        }

        if (!surnameRegex.test(surnameInput.value)) {
            surnameError.innerText = 'Invalid surname';
            event.preventDefault();
            return false;
        }

        if (!emailRegex.test(emailInput.value)) {
            emailError.innerText = 'Invalid email';
            event.preventDefault();
            return false;
        }

        if (!passwordRegex.test(passwordInput.value)) {
            passwordError.innerText = 'Invalid password';
            event.preventDefault();
            return false;
        }

        alert('Form submitted successfully!');
        return true;
    }
</script>

</body>
</html>
