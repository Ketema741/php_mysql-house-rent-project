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
                        <img src="img/user.jpg" alt="Couple with new house" class="story__img--2" style="height:350px">
                        <img src="img/story-2.jpeg" alt="New house" class="story__img--1">
                    </div>

                    <div class="story__content">
                        <h3 class="heading-3 mb-sm">Welcome To Admin Page</h3>
                        <h2 class="heading-2 heading-2--dark mb-md">&ldquo;The best Leader&rdquo;</h2>
                        <p class="story__text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus. Quidem consequatur harum volupta!
                        </p>
                        <button class="btn">Ketema Girma</button>
                    </div>    
                    <section class="features">
                        <div class="section-login">
                            <div class="row">
                                <div class="login">
                                    <div class="login__form">
                                        <form action="CRUD/add.php" class="form" method="POST">
                                           
                                                <input type="text" class="form__input" placeholder="House title" name="title" id="title" required>
                                                <label for="name" class="form__label">House Name</label>
                                            
                                                <input type="text" class="form__input" placeholder="image " name="image" id="image" required>
                                                <label for="name" class="form__label">image</label>
                                                <input type="text" class="form__input" placeholder="Location" name="location" id="location" required>
                                                <label for="name" class="form__label">Location</label>
                                            
                                                <input type="text" class="form__input" placeholder="Rooms " name="rooms" id="rooms" required>
                                                <label for="name" class="form__label">Rooms</label>
                                                <input type="text" class="form__input" placeholder="Area " name="area" id="area" required>
                                                <label for="name" class="form__label">Area</label>
                                                <input type="text" class="form__input" placeholder="Price " name="price" id="price" required>
                                                <label for="name" class="form__label">Price</label>
                                           
                                           
                                                <input type="submit"  value="Add" name="add" class="btn btn--green">
                                                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> 
                        
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
                    
                    <section class="gallery">
                        
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
