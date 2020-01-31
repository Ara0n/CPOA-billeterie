<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><?= TITLE ?></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link <?= $page=='home' ? 'active':'' ?>" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $page=='tickets' ? 'active':'' ?>" href="index.php?page=tickets">Tickets</a>
            </li>
        </ul>
        <div class="dropdown open">
            <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                My Account
            </button>
			<?php if (isset($_SESSION["logged"])) { ?>
                <div class="dropdown-menu" aria-labelledby="triggerId">
                    <a class="dropdown-item" href="index.php?page=cart">Cart</a>
                    <a class="dropdown-item" href="index.php?page=connection&disconnect=1">Disconnect</a>
                </div>
			<?php } else { ?>
                <div class="dropdown-menu" aria-labelledby="triggerId">
                    <a class="dropdown-item" href="index.php?page=connection">login</a>
                    <a class="dropdown-item" href="index.php?page=connection">sign in</a>
                </div>
			<?php } ?>
        </div>
    </div>
</nav>