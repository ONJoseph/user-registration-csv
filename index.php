<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name">
        </label> <br>
        <label for="email">
            Email: <input type="email" name="email">
        </label><br>
        <label for="email">
            Date of Birth: <input type="DOB" name="DOB">
        </label><br>
        <label for="email">
            Gender: <input type="text" name="gender">
        </label><br>
        <label for="email">
            Country: <input type="text" name="country">
        </label><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    // print_r($_GET['name']);
    print_r($_POST);

    ?>
</body>
</html>