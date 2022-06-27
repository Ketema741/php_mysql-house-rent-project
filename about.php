<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;600&display=swap" rel="stylesheet"/>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
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

             <section class="features">
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
            </section>
            
            <div class="story__pictures">
            <img src="img/house-about.jpg" alt="Couple with new house" class="story__img--1">
                <img src="img/story-2.jpeg" alt="New house" class="story__img--2">
            </div>

            <div class="story__content">
                <h2 class="heading-2 heading-2--dark mb-md">&ldquo;Find your dream home&rdquo;</h2>
                <h1 class="heading-3 mb-sm"> The most homes. The best agents. The right tools.</h1>
                <p class="story__text">
                    Nexter is a premier online resource for finding homes for sale and rentals in the Ethiopia States. With hundreds of real estate listings, including home foreclosures and rent to own homes, Nexter will bring the real estate market to your fingertips.
                    Nexter is recognized by Housing Wire  agents as one of the trusted real estate sites for streamlined home searches. Nexter's real estate portal includes hundreds of listings to help buyers, sellers, renters, and landlords reach their real estate goals. We connect you with the right agent to fit your individual needs.
                </p>
                <button class="btn"><a href="home.php" class="nav__link">Explore Now</a></button>
                
            </div>   
            
         

            <footer class="footer">
            <ul class="nav">
                    <li class="nav__item">
                        <a href="#" class="nav__link"> 
                            <svg class="about__icon">
                                <use xlink:href="img/sprite.svg#icon-facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link"> 
                            <svg class="about__icon">
                                <use xlink:href="img/sprite.svg#icon-twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link"> 
                            <svg class="about__icon">
                                <use xlink:href="img/sprite.svg#icon-instagram"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link"> 
                            <svg class="about__icon">
                                <use xlink:href="img/sprite.svg#icon-telegram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link"> 
                            <svg class="about__icon">
                                <use xlink:href="img/sprite.svg#icon-linkedIn"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link"> 
                            <svg class="about__icon">
                                <use xlink:href="img/sprite.svg#icon-help"></use>
                            </svg>
                            
                        </a>
                    </li>

                </ul>
            </footer>
        </div>
            
</body>
</html>
