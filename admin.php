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
                        <?php include('CRUD/read.php'); ?>
                        <?php foreach($houses as $house): ?>
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
                                    <form action="CRUD/delete.php" method="POST">
                                        <input class="btn home__btn" type="hidden" name="id_to_delete" value="<?php echo $house['id']; ?>">
                                        <input class="btn home__btn" type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
                                    </from>
                                </div>
                            <?php endforeach; ?>
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
