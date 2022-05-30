<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;600&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>nexter &mdash; your home, your freedom</title>
    </head>
    <body >
    <div class="cont">
        
        <?php  include('templates/navbar.php');?>
        
        <div class="cntnt">
            <?php  include('templates/sidebar.php');?>

            <main class="main-content">
                <div class="container">

                    <div class="story__pictures">
                        <img src="img/user.jpg" alt="Couple with new house" class="story__img--2" style="height:350px">
                        <img src="img/story-2.jpeg" alt="New house" class="story__img--1">
                    </div>

                    <div class="story__content">
                        <h3 class="heading-3 mb-sm">Welcome To Admin Page</h3>
                        <h2 class="heading-2 heading-2--dark mb-md">&ldquo;The best Leader&rdquo;</h2>
                        <p class="story__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus. Quidem consequatur harum volupta!
                        </p>
                        <button class="btn">Find your own home</button>
                    </div>     
                        
                    <section class="homes" id="home">
                    <?php  include('templates/delete.php');?>
                    </section>

                    <footer class="footer">
                    <?php include('templates/footer.php'); ?>
                    </footer>
                </div>
            </main>
        </div>
    </div>       
    
</body>
</html>
