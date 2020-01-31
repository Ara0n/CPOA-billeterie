<?php require_once(PATH_VIEWS."header.php"); ?>

<h1>Tickets</h1>

<div class="col-11">
    <?php if (isset($ok)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Successfully added item to <a href="index.php?page=cart" class="alert-link">cart</a></strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
    <?php
    }
    if (isset($bad_promo)) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Invalid promo code !</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
    <?php
    }
    if (isset($bad_license)) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Invalid license number !</strong>
        </div>

        <script>
            $(".alert").alert();
        </script>
		<?php
	}
if (isset($bad_child)) {
	?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Children tickets are only category 2 tickets</strong>
    </div>

    <script>
        $(".alert").alert();
    </script>
<?php } ?>
</div>

    <form action="index.php?page=tickets" class="col-6" method="post">
		<div class="form-group">
			<label for="day">Day</label>
			<select class="form-control form-control-sm" name="day" id="day">
				<option>Sunday</option>
				<option>Monday</option>
				<option>Tuesday</option>
				<option>Wednesday</option>
				<option>Thursday</option>
				<option>Friday</option>
				<option>Saturday</option>
			</select>
		</div>

		<div class="form-group">
			<br />
			<p class="form-text text-muted">
				Select the ticket category
			</p>
			<label class="radio-inline"><input type="radio" value="1" name="category" checked>Category 1</label>
			<label class="radio-inline"><input type="radio" value="2" name="category">Category 2</label>
		</div>


		<div class="form-group">
			<label for="promo">Select and insert promo code or license number if needed</label><br>
            <label class="radio-inline"><input type="radio" value="p0" name="promo" checked>None</label>
            <label class="radio-inline"><input type="radio" value="p1" name="promo">Promo code</label>
            <label class="radio-inline"><input type="radio" value="p2" name="promo">License number</label>
            <label class="radio-inline"><input type="radio" value="p3" name="promo">Less than 12 years old (category 2 only)</label>
			<input type="text"
				   class="form-control" name="code" id="promo" aria-describedby="helpId" placeholder="A5D48FS9">
			<small id="helpId" class="form-text text-muted">not for normal tickets and child tickets</small>
		</div>

		<button type="submit" value="1" class="btn btn-primary">Submit</button>
	</form>

<?php require_once(PATH_VIEWS."footer.php") ?>