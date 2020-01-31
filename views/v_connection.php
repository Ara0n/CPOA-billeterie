<?php
require_once(PATH_VIEWS."header.php");
if (isset($_GET['last'])) {
?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Please login or register first</strong>
    </div>

    <script>
        $(".alert").alert();
    </script>
<?php
}
if ($create_err) { ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>email already registered</strong>
    </div>

    <script>
        $(".alert").alert();
    </script>

<?php } ?>

    <h1>Connection</h1>

    <form class="container-fluid" action="index.php?page=connection" method="post">
		<div class="form-group">
			<label for="mail">Email</label>
			<input type="email" class="form-control" name="mail" id="mail" aria-describedby="emailHelpId"
				   placeholder="totally@scam.com">
			<small id="emailHelpId" class="form-text text-muted">Emails unique to each account</small>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="123456">
		</div>
		<button type="submit" name="login" value="login" class="btn btn-primary">login</button>
        <button type="submit" name="sign_in" value="sign_in" class="btn btn-secondary">sign in</button>
    </form>

<?php require_once(PATH_VIEWS."footer.php"); ?>