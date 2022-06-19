<?php 

include('config/db_connect.php');


if(isset($_POST['submit'])){
    
    $uname=$_POST['name'];
    $pass=$_POST['password'];

    $sql = "SELECT * FROM log_in WHERE name='$uname' AND password='$pass'";

    $result = mysqli_query($connected, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['user_name'] === $uname && $row['password'] === $pass) {

            echo "Logged in!";
            header("Location: ../admin.php");
            exit();

        }else{

            header("Location: ../home.php");
            exit();
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="../css/login.css">
</head>
<body>
    <form action="#" method="POST">
        <div class="imgcontainer">
            <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <input type="submit" name="submit" value="Login">
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    <main>

        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="#" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    Signin
                                </h2>
                            </div>

                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full name" id="name" required>
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Admin
                                        </label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Realtor
                                        </label>
                                </div>
                            </div>

                            <div class="form__group">
                                <input type="button"  name="submit" class="btn btn--green">Signin>
                                
                                <!-- <button class="btn btn--green" name="submit">Signin &rarr;</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>



    
</body>
</html>