<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <br>
    <form action="user_data.php" method="post">
        <label for="name">Name:</label>
        <br>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <br>
        <br> 
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email" placeholder="email" required>
        <br>
        <br> 
        <label for="dob">Date of Birth:</label>
        <br>
        <input type="date" name="dob" id="dob" placeholder="Date of Birth" required>
        <br>
        <br> 
        <label for="gender">Gender:</label>
        <br>
        <select name="gender" id="gender" required>
            <option value="">-select-</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        <br>
        <br> 
        <label for="Country">Country:</label>
        <br>
        <input type="text" name="country" id="country" placeholder="Country" required>
        <br>
        <br>
        <button type="submit" name="btnRegister" id="btnRegister">Submit</button>
    </form>
</body>
</html>
