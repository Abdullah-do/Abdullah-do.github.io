<?php
include '../controller/DBController.php';
include '../module/user.php';
include '../controller/AuthController.php';

$errMsg1="";
$errMsg="";

if(isset($_GET["logout"]))
{
  session_start();
  session_destroy();
}
if(isset($_POST["id"]) && isset($_POST["password"]))
{
	if(!empty($_POST["id"])&&!empty($_POST["password"]))
	{
         $user = new User;
		 $auth=new AuthController;
		 $user->setId($_POST['id']);
         $user->setPass($_POST['password']);
		 if(!$auth->login($user))
        {
            if(!isset($_SESSION["user_id"]))
            {
                session_start();
            }
            $errMsg1=$_SESSION["errMsg"];
        }
        else
        {
            if(!isset($_SESSION["user_id"]))
            {
                session_start();
            }
            if($_SESSION["userRole"]=="Admin")
            {
                header("location: ../view/admin/add New Product.php");
            }
            else
            {
                header("location:../view/main.html");
            }
	}
}
	else {
		$errMsg1="Please fill all fields";
	}
}
if(isset($_POST["username"]) && isset($_POST["userId"]) && isset($_POST["age"]) && isset($_POST["phone"]) && isset($_POST["nation"]) && isset($_POST["email"]) && isset($_POST["pass"]))
{
	if(!empty($_POST["username"]) && !empty($_POST["userId"]) && !empty($_POST["age"]) && !empty($_POST["phone"]) && !empty($_POST["nation"]) && !empty($_POST["email"]) && !empty($_POST["pass"]))
	{
         $client = new Client;
		 $auth=new AuthController();
		 $client->setId($_POST['userId']);
         $client->setPass($_POST['pass']);
		 $client->setName($_POST['username']);
		$client->setPhone($_POST["phone"]);
		$client->setAge($_POST["age"]);
		$client->setNationality($_POST["nation"]);
		$client->setEmail($_POST["email"]);
		 if(!$auth->register($client))
        {
            if(!isset($_SESSION["user_id"]))
            {
                session_start();
            }
            $errMsg=$_SESSION["errMsg"];
        }
        else
        {
            if(!isset($_SESSION["user_id"]))
            {
                session_start();
			}
       header("location:../view/main.html");
	}
}
	else {
		$errMsg="Please fill all fields";
	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        <link rel="stylesheet" href="css/cssA/login.css">
        
    </head>
    <body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="index.php" method="POST" >
			<h1>Create Account</h1>
			<h5><?php echo $errMsg ?></h5>
			<input type="text" name="username" placeholder="Name" />
            <input type="text" name ="userId" placeholder="ID" />
            <input type="text" name="age" placeholder="Age" />
            <input type="text" name="phone" placeholder="Phone Number" />
            <input type="text" name="nation" placeholder="Nationality" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="pass" placeholder="Password" />
			<button type="submit">Sign Up</button>  
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="index.php" method="POST">
			<h1>Sign in</h1>
			<h5><?php echo $errMsg1 ?></h5>
			<input type="text" name ="id" placeholder="ID" />
			<input type="password" name ="password" placeholder="Password" />
			<button type="submit">Sign in</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" name="signin" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" name="signup" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="js/jsA/login.js"></script>
</body>