<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hello </h2>
    <form action="phpfile.php" method="post" target="_blank">
    <div>
        
        <label for="fastname">First Name</label>
        <input type="text" id="fastname" name="firstname" required>
        <br><br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
        <br> <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br> <br>
        <input type="submit" value="login">
    </div>
    </form>

</body>
</html>