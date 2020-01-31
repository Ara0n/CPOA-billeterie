<?php
require_once(PATH_VIEWS."header.php");

if (isset($_GET['paid'])) {
?>

	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>Successfully paid your tickets !</strong>
	</div>

	<script>
        $(".alert").alert();
	</script>

<?php } ?>

	<h1>Cart</h1>

	<table class="table-striped table-hover col-11">
		<thead>
		<tr>
			<th>Day</th>
			<th>Category</th>
			<th>Promo/License code</th>
			<th>Less than 12 years old</th>
			<th>Price</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$total_price = 0;
		for ($i = 0; $i < sizeof($_SESSION['total']); $i++) {
		?>
			<tr>
				<td scope="row"><?= $_SESSION['total'][$i][0] ?></td>
				<td><?= $_SESSION['total'][$i][1] ?></td>
				<td><?= $_SESSION['total'][$i][2] ? $_SESSION['total'][$i][2] : "no" ?></td>
				<td><?= $_SESSION['total'][$i][3] ? "yes" : "no" ?></td>
				<td><?= $_SESSION['total'][$i][4]."€" ?></td>
				<td class="col-1"><a href="index.php?page=cart&remove=<?= $i ?>" class="btn btn-danger btn-block active" role="button" aria-pressed="true">Delete</a></td>
			</tr>
		<?php
			$total_price += $_SESSION['total'][$i][4];
		} ?>
		</tbody>
		<tfoot>
		<tr class="table-success">
			<th id="total" colspan="4">Total :</th>
			<td><?= $total_price."€" ?></td>
		</tr>
		</tfoot>
	</table>


	<!-- Button trigger modal -->
<?php if ($total_price == 0) { ?>
	<button type="button" class="btn btn-primary btn-lg m-5" data-toggle="modal" data-target="#modelId" disabled>
<?php } else { ?>
	<button type="button" class="btn btn-primary btn-lg m-5" data-toggle="modal" data-target="#modelId">
<?php } ?>
	Pay cart
	</button>

	<!-- Modal -->
	<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Redirection to the bank site</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Thanks for your purchase of tickets, you will now be redirected to the bank website to pay your
					order.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<a href="index.php?page=cart&paid=1" class="btn btn-primary active" role="button" aria-pressed="true">Ok</a>
				</div>
			</div>
		</div>
	</div>

<?php require_once(PATH_VIEWS."footer.php"); ?>