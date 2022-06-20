<?php 
    include('CRUD/readSingle.php');

   
?>

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
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    
    <title>nexter &mdash; your home, your freedom</title>
</head>
<body >
    <div class="cont">
        
        <div class="cntnt">
            <?php  include('templates/sidebar.php');?>
            <main class="main-content">
                <div class="container">
                <div class="story__pictures">
                        <img src="img/realtor-3.jpeg" alt="Couple with new house" class="story__img--2" style="height:350px">
                        <img src="img/story-2.jpeg" alt="New house" class="story__img--1">
                    </div>

                    <div class="story__content">
                        <h3 class="heading-3 mb-sm"> Ketema </h3>
                        <h2 class="heading-2 heading-2--dark mb-md">&ldquo;Top Realtor&rdquo;</h2>
                        <p class="story__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus. Quidem consequatur harum volupta!
                        </p>
                        <address class="btn">
                            <a type="email" title ="email me" href='mailto:kgirma363gmail.com' class="btn">Email me</a>
                        </address>
                    </div>
                    <section class="homes" id="home">
                       
                        <?php if($house): ?>
                         
                            <div class="home">
                                <img src="img/<?php echo htmlspecialchars($house['house_image']); ?>" alt="<?php echo htmlspecialchars($house['house_image']); ?>" class="home__img">
                                <svg class="home__like">
                                    <use xlink:href="img/sprite.svg#icon-heart-full"></use>
                                </svg> 
                                <h5 class="home__name"><?php echo htmlspecialchars($house['house_title']); ?></h5>
                                <div class="home__location">
                                    <svg>
                                        <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                                    </svg>
                                    <p><?php echo htmlspecialchars($house['house_location']); ?></p>
                                </div>
                                <div class="home__rooms">
                                    <svg>
                                        <use xlink:href="img/sprite.svg#icon-profile-male"></use>
                                    </svg>
                                    <p><?php echo htmlspecialchars($house['house_rooms']); ?> rooms</p>
                                </div>
                                <div class="home__area">
                                    <svg>
                                        <use xlink:href="img/sprite.svg#icon-expand"></use>
                                    </svg>
                                    <p><?php echo htmlspecialchars($house['house_area']); ?> m<sup>2</sup></p>
                                </div>
                                <div class="home__price">
                                    <svg>
                                        <use xlink:href="img/sprite.svg#icon-key"></use>
                                    </svg>
                                    <p>$<?php echo htmlspecialchars($house['house_price']); ?></p>
                                </div>
                                <a class="btn home__btn" href="home.php" style="text-decoration: none">Back</a>
                            </div>
                        <?php else: ?>
                                <h5>No such house exists.</h5>
                        <?php endif ?>
                    </section>

                    <section class="gallery">
                        <figure class="gallery__item gallery__item--2"><img src="img/gal-2.jpeg" alt="Gallery image 2" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--3"><img src="img/gal-3.jpeg" alt="Gallery image 3" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--5"><img src="img/gal-5.jpeg" alt="Gallery image 5" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--6"><img src="img/gal-6.jpeg" alt="Gallery image 6" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--7"><img src="img/gal-7.jpeg" alt="Gallery image 7" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--8"><img src="img/gal-8.jpeg" alt="Gallery image 8" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--9"><img src="img/gal-9.jpeg" alt="Gallery image 9" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--10"><img src="img/gal-15.jpeg" alt="Gallery image 15" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--11"><img src="img/gal-11.jpeg" alt="Gallery image 11" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--13"><img src="img/gal-13.jpeg" alt="Gallery image 13" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--14"><img src="img/gal-16.jpeg" alt="Gallery image 16" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--12"><img src="img/gal-21.jpg" alt="Gallery image 21" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--1 myimg"><img src="img/gal-20.jpg" alt="Gallery image 20" class="gallery__img"></figure>
                        <figure class="gallery__item gallery__item--4"><img src="img/gal-21.jpg" alt="Gallery image 21" class="gallery__img"></figure>
                    </section>
                    <footer class="footer">
                        <?php include('templates/footer.php') ?>
                    </footer>
                </div>
            </main>
        </div>
    </div>
</body>
</html>