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
            <h1>Log In</h1> 
            <?php
        
            if(isset($_GET['error']));
            {
                $error = isset($_GET['error']);

                if($error == 'wrong_credentials')
                {
                    ?>
                        <div class="wrong_credentials">
                            <h3>Wrong credentials.</h3>
                            <p>Please try again.</p>
                        </div>                    
                    <?php
                }
            }

            if(isset($_GET['register']));
            {
                $register = isset($_GET['register']);

                if($register == 'succes')
                {
                    ?>
                        <div class="registered">
                            <h3>Your account has been created!</h3>
                            <p>You can now log in!</p> 
                        </br>
                        </div>                    
                    <?php
                }
            }

            ?>

        <p>Login to your page</p>
        <form action="login_handler.php" method="POST" class="LoginForm">
        
            <label class for="email">Email</label>
            <br/>
            <input type="email" id="email" name="email" placeholder="Enter your email here...">
            <br/>

            <label for="password">Password</label>
            <br/>
            <input type="password" id="password" name="password" placeholder="Enter your password here...">
            <br/> <br/>
            <input class="Login_button" type="submit" value="Login"> 

        </form>
        <br>
            <div id="menu_blog">
                <button class="Login_button" onclick="location.href='register.php'">
                    Register
                </button>
            </div>  

        </div>
    </div>
    <div class="color-bg">
    </div>
</body>
</html>                
    
