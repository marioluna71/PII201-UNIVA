<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Insert user form</h1>
    <form action="../php/insert_user_controller.php" method="POST">
        
        <input type="text" name="username" placeholder="Insert users">
        <input type="email" name="useremail" placeholder="Insert user email">
        <input type="password" name="userpassword" placeholder="Insert user password">
        <input type="submit" value="Enter">
    </form>
</body>
</html>