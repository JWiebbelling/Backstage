<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSheet.css">
    <title>Backstage</title>
</head>

<body>
    <div class="container">
      
        <div class="login_wrapper">
    
        <h1> Create account.</h1>

        <p>Create your account.</p>

        <form action="register_handler.php" method="POST" class="LoginForm">
        
            <label class for="name">Name</label><br/>
            <input type="text" id="name" name="name" placeholder="Enter your name here...">

            <br>

            <label class for="email">Email</label><br/>
            <input type="email" id="email" name="email" placeholder="Enter your email here...">

            <br/>

            <label for="password">Password</label><br/>
            <input type="password" id="password" name="password" placeholder="Enter your password here...">

            <br/>
            <input class="Login_button" type="submit" value="Create account"> 

        </form>

        <br>
        <div id="menu_blog">
            <button class="Login_button" onclick="location.href='index.php'">
                Login
            </button>
        </div>

        

        </div>
    </div>

    <div class="color-bg">

    </div>
</body>
</html>