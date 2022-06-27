<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link rel="stylesheet" href="css/nav.css">
        <!-- <link rel="stylesheet" href="css/login.css"> -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        <script src="https://unpkg.com/scrollreveal"></script>
        <title>nexter &mdash; your home, your freedom</title>
    </head>
    <body >
        <div class="container">
            <?php  include('templates/navbar.php');?>
            <?php  include('templates/sidebar.php');?>
            <header class="header">
                
                <h1 class="heading-1">The ultimate personal freedom</h1>
            </header>

            <!-- <div class="realtors">
                <?php  include('templates/realtors.php');?>
            </div> -->
            <!-- <section class="features">
                <div class="feature">
                    <svg class="feature__icon">
                        <use xlink:href="img/sprite.svg#icon-global"></use>
                    </svg>
                    <h4 class="heading-4 heading-4--dark">World's best luxury homes</h4>
                    <p class="feature__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus.</p>
                </div>

                <div class="feature">
                    <svg class="feature__icon">
                        <use xlink:href="img/sprite.svg#icon-trophy"></use>
                    </svg>
                    <h4 class="heading-4 heading-4--dark">Only the best properties</h4>
                    <p class="feature__text">Voluptatum mollitia quae. Vero ipsum sapiente molestias accusamus rerum sed a eligendi aut quia.</p>
                </div>

                <div class="feature">
                    <svg class="feature__icon">
                        <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                    </svg>
                    <h4 class="heading-4 heading-4--dark">All homes in in top locations</h4>
                    <p class="feature__text">Tenetur distinctio necessitatibus pariatur voluptatibus quidem consequatur harum.</p>
                </div>

                <div class="feature">
                    <svg class="feature__icon">
                        <use xlink:href="img/sprite.svg#icon-key"></use>
                    </svg>
                    <h4 class="heading-4 heading-4--dark">New home in one week</h4>
                    <p class="feature__text">Vero ipsum sapiente molestias accusamus rerum. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="feature">
                    <svg class="feature__icon">
                        <use xlink:href="img/sprite.svg#icon-presentation"></use>
                    </svg>
                    <h4 class="heading-4 heading-4--dark">Top 1% realtors</h4>
                    <p class="feature__text">Quidem consequatur harum, voluptatum mollitia quae. Tenetur distinctio necessitatibus pariatur voluptatibus.</p>
                </div>

                <div class="feature">
                    <svg class="feature__icon">
                        <use xlink:href="img/sprite.svg#icon-lock"></use>
                    </svg>
                    <h4 class="heading-4 heading-4--dark">Secure payments on nexter</h4>
                    <p class="feature__text">Pariatur voluptatibus quidem consequatur harum, voluptatum mollitia quae.</p>
                </div>
            </section> -->
            <section class="homes" id="home">
            <?php  include('templates/houses.php');?>
            </section>
            <!-- <section class="gallery">
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
            </section> -->
            <div class="story__pictures">
                <img src="img/story-1.jpeg" alt="Couple with new house" class="story__img--1">
                <img src="img/story-2.jpeg" alt="New house" class="story__img--2">
            </div>

            <div class="story__content">
                <h3 class="heading-3 mb-sm">Happy Customers</h3>
                <h2 class="heading-2 heading-2--dark mb-md">&ldquo;The best decision of our lives&rdquo;</h2>
                <p class="story__text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus. Quidem consequatur harum volupta!
                </p>
                <button class="btn">Find your own home</button>
            </div>

            <footer class="footer">
                <?php  include('templates/footer.php');?>
            </footer>
        </div>
    <script src="app.js"></script>
</body>
</html>