<!-- connect to the server and read data from database-->
<?php include('CRUD/read.php'); ?>

<?php foreach($houses as $house): ?>
	<div class="home">
			<img src="img/<?php echo htmlspecialchars($house['house_image']); ?>" alt="<?php echo htmlspecialchars($house['house_image']); ?>" class="home__img">
			<svg class="home__like" id="home__like-<?php echo htmlspecialchars($house['id']); ?>" onclick="changeColor()">
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
			<a class="btn home__btn" href="details.php?id=<?php echo $house['id'] ?>" style="text-decoration: none">Contact realtor</a>
		</div>
	<?php endforeach; ?>
