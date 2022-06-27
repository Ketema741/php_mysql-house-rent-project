

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <script src="https://unpkg.com/scrollreveal"></script>
        <title>nexter &mdash; your home, your freedom</title>
    </head>
    <body >

  
        
        <div class="container">
        <?php  include('templates/sidebar.php');?>
        <header class="header">
            <h3 class="heading-3">Your own home:</h3>
            <h1 class="heading-1">The ultimate personal freedom</h1>
            <div class="header__seenon-text">cozzy home</div>
            
        </header>

        <section class="login__section">
            <div class="section-login">
                <div class="row">
                    <div class="login">
                        <div class="login__form">
                            <form action="CRUD/login.php" class="form" method="POST">
                                
                                    <input type="text" class="form__input" placeholder="Your first name" name="name" id="name" required>
                                    <label for="name" class="form__label">First Name</label>
                                
                                    <input type="password" class="form__input" placeholder="Password " name="password" id="Password" required>
                                    <label for="name" class="form__label">Password</label>
                                
                                    <input type="submit"  value="Signin" name="submit" class="btn btn--green">
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <footer class="footer">
            <?php  include('templates/footer.php');?>
        </footer>
    </div>
           
</body>
</html>