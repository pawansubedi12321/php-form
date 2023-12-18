<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="test.css"/>
</head>
<body>
    <form action="save.php"method="post" class="form">
    <label>Name:</label>
    <input type="text" name="name"class="name"placeholder="enter your name"/>
    <label>Contact:</label>
    <input type="text" name="contact" class="phone"placeholder="enter your contact"/>
    <labe>Email:</label>
    <input type="email"name="email"class="email" placeholder="enter your email"/>
    <label>Password:</label>
    <input type="password"name="password"class="password"placeholder="enter password"/>
    <label>Cofirmpassword:</label>
    <input type="password"name="confirmpassword"class="confirmpassword"placeholder="confirm password"/>
    <input type="submit" value="submit"/>
    </form>

    <?php
    echo "Hello everyone";
    ?>
</body>
</html>