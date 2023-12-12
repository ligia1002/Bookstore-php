<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_GET['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Checking out";
	require "./template/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<table class="table">
		<tr>
			<th>Item</th>
			<th>Price</th>
	    	<th>Quantity</th>
	    	<th>Total</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookByIsbn($conn, $isbn));
			?>
		<tr>
			<td><?php echo $book['book_title'] . " de " . $book['book_author']; ?></td>
			<td><?php echo "RON" . $book['book_price']; ?></td>
			<td><?php echo $qty; ?></td>
			<td><?php echo "RON" . $qty * $book['book_price']; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo $_SESSION['total_items']; ?></th>
			<th><?php echo "RON" . $_SESSION['total_price']; ?></th>
		</tr>
	</table>
	<form method="post" action="purchase.php" class="form-horizontal">
		<?php if(isset($_POST['submit'])): // Verifică dacă formularul a fost trimis ?>
			<?php
				// Verifică dacă oricare dintre câmpurile necesare nu au fost completate
				$required_fields = array('name', 'address', 'city', 'zip_code', 'country');
				$missing_fields = array();
				foreach ($required_fields as $field) {
					if (!isset($_POST[$field]) || empty($_POST[$field])) {
						$missing_fields[] = $field;
					}
				}

				// Afișează mesajul doar dacă sunt câmpuri necompletate
				if (!empty($missing_fields)) {
					echo '<p class="text-danger">Toate câmpurile trebuie completate!</p>';
					$_SESSION['err'] = 1; // Setează o variabilă de sesiune pentru a reține eroarea
				} else {
					// Continuă cu procesarea formularului
					// ...

					// La final, resetați variabila de sesiune pentru eroare
					unset($_SESSION['err']);
				}
			?>
		<?php endif; ?>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Nume</label>
			<div class="col-md-4">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="control-label col-md-4">Adresa</label>
			<div class="col-md-4">
				<input type="text" name="address" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="control-label col-md-4">Oras</label>
			<div class="col-md-4">
				<input type="text" name="city" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Cod Postal</label>
			<div class="col-md-4">
				<input type="text" name="zip_code" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="control-label col-md-4">Tara</label>
			<div class="col-md-4">
				<input type="text" name="country" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Cumparare" class="btn btn-primary">
		</div>
	</form>
	<p class="lead">Te rog apasa Cumparare pentru a continua.</p>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>


