<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Log In - WBC</title>
            <link rel="stylesheet" href="css/Login.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">                
        </head>
        <body>
                <img src="images/logo.jpg" alt="logo" style="width:400px; height:200px; " id="logo">
                <header>
                            
                        <div class="Log">
                            <a href="Log In.php"><input type="button" value="Log in" class="btn btn-danger btn-lg"></a>
                        </div>
                        <div class="Sign">
                            <a href="Registration.php"><input type="button" value="Sign Up" class="btn btn-danger btn-lg"></a>
                        </div>
                </header>   
            <center>
                <form style="margin-top:20px;">
                    
                            <div>
                                <input type="email" placeholder="Enter your email address" class="form-control" style="max-width:250px;" required />
                            </div>
                    
                            <br>
                                <input type="password"  placeholder="Enter your password" required class="form-control" style="max-width:250px;" />
                                                    
                            <div class="Login">
                                    <a href="WelcomeToWBC.html"><input type="button" value="Log In" class="btn btn-primary" ></a>
                                </div>


                            <a href="Forgotten Mail.html" class="forgot" >Having trouble logging in?</a>
                            <br>

                                    <label>-------------or-------------</label>

                            <div class="Signup">
                                     <a href="Registration.php"><input type="button" value="Sign Up" class="btn btn-primary"></a>
                            </div>
            
            </form>
        </center>
    </body>
 </html>
