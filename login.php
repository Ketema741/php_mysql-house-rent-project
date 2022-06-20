

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <script src="https://unpkg.com/scrollreveal"></script>
        <title>nexter &mdash; your home, your freedom</title>
    </head>
    <body >

    <div class="cont">
       
        <div class="cntnt">
            <?php  include('templates/sidebar.php');?>
            <main class="main-content">
                <div class="container">
                    <header class="header">
                        <h3 class="heading-3">Your own home:</h3>
                        <h1 class="heading-1">The ultimate personal freedom</h1>
                        <div class="header__seenon-text">cozzy home</div>
                        
                    </header>

                    <div class="realtors">
                        <?php  include('templates/realtors.php');?>
                    </div>

                    <section class="features">
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

                    <section class="gallery">
                        <figure class="gallery__item gallery__item--1 myimg"><img src="img/gal-1.jpeg" alt="Gallery image 1" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--2"><img src="img/gal-2.jpeg" alt="Gallery image 2" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--3"><img src="img/gal-3.jpeg" alt="Gallery image 3" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--4"><img src="img/gal-4.jpeg" alt="Gallery image 4" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--5"><img src="img/gal-5.jpeg" alt="Gallery image 5" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--6"><img src="img/gal-6.jpeg" alt="Gallery image 6" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--7"><img src="img/gal-7.jpeg" alt="Gallery image 7" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--8"><img src="img/gal-8.jpeg" alt="Gallery image 8" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--9"><img src="img/gal-9.jpeg" alt="Gallery image 9" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--10"><img src="img/gal-10.jpeg" alt="Gallery image 10" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--11"><img src="img/gal-11.jpeg" alt="Gallery image 11" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--12"><img src="img/gal-12.jpeg" alt="Gallery image 12" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--13"><img src="img/gal-13.jpeg" alt="Gallery image 13" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--14"><img src="img/gal-14.jpeg" alt="Gallery image 14" class="gallery__img"></figure>
                    </section>

                    <footer class="footer">
                        <?php  include('templates/footer.php');?>
                    </footer>
                </div>
            </main>
        </div>
    </div>
</body>
</html>