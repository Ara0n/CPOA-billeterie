<?php require_once(PATH_VIEWS."header.php"); ?>

    <h1>Home</h1>



	<div id="stadium_info" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#stadium_info" data-slide-to="0" class="active"></li>
			<li data-target="#stadium_info" data-slide-to="1"></li>
			<li data-target="#stadium_info" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner m-auto" role="listbox">
			<div class="carousel-item active">
				<img class="col-5" src="<?= PATH_IMAGES.'places.png' ?>" alt="stadium layout">
                <div class="carousel-caption">
                    <h3>Stadium map</h3>
                    <p>Map of the places in the stadium</p>
                </div>
			</div>
			<div class="carousel-item">
				<img class="col-4" src="<?= PATH_IMAGES.'tarif_gp.png' ?>" alt="basic pricing">
                <div class="carousel-caption">
                    <h3>Normal prices</h3>
                    <p>Base price grid used for everyone except the licensed tennis players</p>
                </div>
			</div>
			<div class="carousel-item">
				<img class="col-5" src="<?= PATH_IMAGES.'tarif_l.png' ?>" alt="licensed pricing">
                <div class="carousel-caption">
                    <h3>Licensed prices</h3>
                    <p>Price grid for the licensed tennis players</p>
                </div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#stadium_info" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#stadium_info" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>




<?php require_once(PATH_VIEWS."footer.php"); ?>