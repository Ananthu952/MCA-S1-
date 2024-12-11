<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="POST">
        Username : <input type="text" name="Username"><br><br>
        email : <input type="email" name="email"><br><br>
        Password : <input type="password" name ="Password"><br><br>
        Confirm Password : <input type="password" name ="cPassword"><br><br>
        <input type="submit"value="Register">
        <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Check if all fields are filled
        if (empty($_POST['Username']) || empty($_POST['email']) || empty($_POST['Password']) || empty($_POST['cPassword'])) {
            die("Please fill all the fields.");
        }

        // Check if Password and Confirm Password match
        if ($_POST['Password'] != $_POST['cPassword']) {
            die("Password and Confirm Password should match.");
        }

        // If validation is successful
        echo "Registration successful!";
    }
    ?>
        </form>
</body>
</html>