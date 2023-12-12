<?php
	session_start();
	$_SESSION['err'] = 1;
	foreach($_POST as $key => $value){
		if(trim($value) == ''){
			$_SESSION['err'] = 0;
		}
		break;
	}

	if($_SESSION['err'] == 0){
		header("Location: checkout.php");
	} else {
		unset($_SESSION['err']);
	}


	$_SESSION['ship'] = array();
	foreach($_POST as $key => $value){
		if($key != "submit"){
			$_SESSION['ship'][$key] = $value;
		}
	}
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Cumparare";
	require "./template/header.php";
	// connect database
	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<table class="table">
		<tr>
			<th>Item</th>
			<th>Pret</th>
	    	<th>Cantitate</th>
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
		<tr>
			<td>Transport</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>20.00</td>
		</tr>
		<tr>
			<th>Total incluzand transportul</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo "RON" . ($_SESSION['total_price'] + 20); ?></th>
		</tr>
	</table>
	<form method="post" action="process.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
		<p class="text-danger">Toate campurile trebuie completate</p>
		<?php } ?>
        <div class="form-group">
            <label for="card_type" class="col-lg-2 control-label">Type</label>
            <div class="col-lg-10">
              	<select class="form-control" name="card_type">
                  	<option value="VISA">VISA</option>
                  	<option value="MasterCard">MasterCard</option>
                  	<option value="American Express">CEC</option>
              	</select>
            </div>
        </div>
        <div class="form-group">
            <label for="card_number" class="col-lg-2 control-label">Numar card</label>
            <div class="col-lg-10">
              	<input type="text" class="form-control" name="card_number">
            </div>
        </div>
        <div class="form-group">
            <label for="card_PID" class="col-lg-2 control-label">IBAN</label>
            <div class="col-lg-10">
              	<input type="text" class="form-control" name="card_PID">
            </div>
        </div>
        <div class="form-group">
            <label for="card_expire" class="col-lg-2 control-label">Data Expirarii</label>
            <div class="col-lg-10">
              	<input type="date" name="card_expire" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="card_owner" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
              	<input type="text" class="form-control" name="card_owner">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              	<button type="reset" class="btn btn-default">Cancel</button>
              	<button type="submit" class="btn btn-primary">Cumparare</button>
            </div>
        </div>
    </form>
	<p class="lead">Te rog apasa Cumparare sa confirmi comanda, ori Continua cumparaturi sa adaugi noi idemi.</p>
<?php
	} else {
		echo "<p class=\"text-warning\">Cosul tau este gol! Fii sigur ca ai niste carti in el!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>