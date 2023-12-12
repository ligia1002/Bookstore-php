<?php
session_start();
require_once "./functions/admin.php";
$title = "Edit book";
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();

// Verificăm dacă există ISBN în URL
if (isset($_GET['bookisbn'])) {
    $book_isbn = mysqli_real_escape_string($conn, $_GET['bookisbn']);

    // Verificăm dacă formularul a fost trimis
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Colectăm datele din formular
        $book_title = mysqli_real_escape_string($conn, $_POST['book_title']);
        $book_author = mysqli_real_escape_string($conn, $_POST['book_author']);
        $book_descr = mysqli_real_escape_string($conn, $_POST['book_descr']);
        $book_price = floatval($_POST['book_price']);
        $publisherid = intval($_POST['publisherid']);

        // Actualizăm datele în baza de date
        $query = "UPDATE books 
                  SET book_title = CASE WHEN '$book_title' <> '' THEN '$book_title' ELSE book_title END,
                      book_author = CASE WHEN '$book_author' <> '' THEN '$book_author' ELSE book_author END,
                      book_descr = CASE WHEN '$book_descr' <> '' THEN '$book_descr' ELSE book_descr END,
                      book_price = CASE WHEN $book_price > 0 THEN $book_price ELSE book_price END,
                      publisherid = CASE WHEN $publisherid > 0 THEN $publisherid ELSE publisherid END
                  WHERE book_isbn = '$book_isbn'";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Eroare la actualizarea cărții: " . mysqli_error($conn);
        } else {
            echo "Actualizare cu succes!";
        }
    }

    // Obținem datele curente ale cărții
    $query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Eroare la interogare: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_assoc($result);
?>
        <!-- Formularul pentru editare -->
        <form method="post" action="admin_edit.php?bookisbn=<?php echo $book_isbn; ?>">
            <div class="form-group">
                <label for="book_title">Titlu:</label>
                <input type="text" name="book_title" class="form-control" value="<?php echo $row['book_title']; ?>">
            </div>

            <div class="form-group">
                <label for="book_author">Autor:</label>
                <input type="text" name="book_author" class="form-control" value="<?php echo $row['book_author']; ?>">
            </div>

            <div class="form-group">
                <label for="book_descr">Descriere:</label>
                <textarea name="book_descr" class="form-control" rows="5"><?php echo $row['book_descr']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="book_price">Preț:</label>
                <input type="text" name="book_price" class="form-control" value="<?php echo $row['book_price']; ?>">
            </div>

            <div class="form-group">
                <label for="publisherid">Editura:</label>
                <select name="publisherid" class="form-control">
                    <?php
                    $query = "SELECT * FROM publisher";
                    $publishers = mysqli_query($conn, $query);
                    while ($publisher = mysqli_fetch_assoc($publishers)) {
                        echo "<option value='" . $publisher['publisherid'] . "'";
                        if ($publisher['publisherid'] == $row['publisherid']) {
                            echo " selected";
                        }
                        echo ">" . $publisher['publisher_name'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <input type="submit" name="save_change" value="Salvează modificările" class="btn btn-primary">
            <input type="reset" value="Anulează" class="btn btn-default">
            <a href="admin_book.php" class="btn btn-success">Confirmă</a>
        </form>
<?php
    }
} else {
    echo "ISBN lipsă.";
}

if (isset($conn)) {
    mysqli_close($conn);
}
require "./template/footer.php"
?>


