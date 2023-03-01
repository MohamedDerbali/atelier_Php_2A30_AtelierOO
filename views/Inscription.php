<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="verification.php">
    First Name:<input type="text" name="firstName" id="firstName" /><br/>
    Last Name:<input type="text" name="lastName" id="lastName"><br/>
    Phone:<input type="number" name="phone" id="phone" /><br/>
    Address:<input type="text" name="address" id="address" /><br/>
    Date of Birth:<input type="date" name="Dof" id="Dof" /><br/>
    Password:<input type="password" name="password" id="password" /><br/>
    Confirmation Password:<input type="password" name="confirmPassword" id="confirmPassword" /><br/>
    <input type="submit" value="envoyer" />
    <input type="reset" value="reset" />
    </form>
</body>
</html>