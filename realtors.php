<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    
    <link rel="stylesheet" href="css/realtors.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>nexter &mdash; your home, your freedom</title>
</head>

<body>
    
    <div class="container">
        <?php  include('templates/sidebar.php');?>
        <header class="header">
            <h3 class="heading-3">Your own home:</h3>
            <h1 class="heading-1">The ultimate personal freedom</h1>
            <div class="header__seenon-text">cozzy home</div>
        </header>

        <div class="top__realtors">
            <?php  include('templates/realtors.php');?>
        </div>
        <section class="realtors" id="realtors">
            <div class="realtor">
                <div class = "realtor__description">
                    <div>
                        <span class = "realtor__name"> Betselot Tadele </span> 
                        <span class = "realtor__IsNew" >active </span> 
                    </div>
                    <img src="" alt="" class="realtor__image">
                    <div class="realtor__info">
                        <ul class="realtor__work">
                            <li class="realtor__time">1d ago</li>
                            <li class="realtor__workType">full time</li>
                            <li class="realtor__workPlace">addis</li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="realtor__experience">
                        <span class="realtor__skill">skill</span>
                    </div> 
                </div>
            </div>
            <div class="realtor">
                <div class = "realtor__description">
                    <div>
                        <span class = "realtor__name"> Betselot Tadele </span> 
                        <span class = "realtor__IsNew" >active </span> 
                    </div>
                    <img src="img/realtor-2.jpeg" alt="" class="realtor__image">
                    <div class="realtor__info">
                        <ul class="realtor__work">
                            <li class="realtor__time">1d ago</li>
                            <li class="realtor__workType">full time</li>
                            <li class="realtor__workPlace">addis</li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="realtor__experience">
                        <span class="realtor__skill">skill</span>
                    </div> 
                </div>
            </div>
            <div class="realtor">
                <div class = "realtor__description">
                    <div>
                        <span class = "realtor__name"> Betselot Tadele </span> 
                        <span class = "realtor__IsNew" >active </span> 
                         
                    </div>
                    <img src="img/realtor-2.jpeg" alt="" class="realtor__image">
                    <div class="realtor__info">
                        <ul class="realtor__work">
                            <li class="realtor__time">1d ago</li>
                            <li class="realtor__workType">full time</li>
                            <li class="realtor__workPlace">addis</li>
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="realtor__experience">
                        <span class="realtor__skill">skill</span>
                    </div> 
                </div>
            </div>
            <div class="realtor">realtor 4</div>
            <div class="realtor">realtor 5</div>
            <div class="realtor">realtor 6</div>
            <div class="realtor">realtor 7</div>
            <div class="realtor">realtor 8</div>
        </section>

        <footer class="footer">
            <?php  include('templates/footer.php');?>
        </footer>
    </div>
          
       
    <!-- <script type="text/javascript" src="realtors.js"></script> -->

</body>

</html>