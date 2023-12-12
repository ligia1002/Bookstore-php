<?php
// Include funcțiile pentru conectare la baza de date
require_once "./functions/database_functions.php";

// Conectarea la baza de date
$conn = db_connect();

// Verificați conexiunea
if (!$conn) {
    die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
}

// Inițializare variabilă pentru rezultatele căutării
$searchResults = array();

// Verificați dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obțineți interogarea autorului din formular
    $authorQuery = isset($_POST['author']) ? $_POST['author'] : '';

    // Evitați SQL injection prin utilizarea instrucțiunii preparate
    $sql = "SELECT * FROM books WHERE book_author LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $authorQuery);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Atribuie rezultatele la variabila $searchResults
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row;
    }

    // Închideți instrucțiunea pregătită
    mysqli_stmt_close($stmt);
}

// Închideți conexiunea la baza de date
mysqli_close($conn);

$title = "Cautare";
require_once "./template/header.php";
?>

<!-- Formular de căutare -->
<div class="container mt-3">
    <h2>Cautare Autor</h2>
    <form method="post" action="search.php">
        <div class="mb-3">
            <label for="author" class="form-label">Nume Autor</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Introduceți numele autorului">
        </div>
        <button type="submit" class="btn btn-primary">Cauta</button>
    </form>
</div>

<!-- Afișează rezultatele căutării -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
    <div class="container mt-3">
        <h2>Rezultatele căutării pentru autorul: <?php echo $authorQuery; ?></h2>
        <style>
            .carte-img {
                max-width: 150px; /* Setează lățimea maximă la 150px */
                max-height: 200px; /* Setează înălțimea maximă la 200px */
            }
        </style>
        <?php if (count($searchResults) > 0) : ?>
            <?php foreach ($searchResults as $row) : ?>
                <div>
                    <img src='./bootstrap/img/<?php echo $row['book_image']; ?>' alt='Imagine carte' class='img-thumbnail carte-img'>
                    <h3><?php echo $row['book_title']; ?></h3>
                    <p>Autor: <?php echo $row['book_author']; ?></p>
                    <p>Preț: <?php echo $row['book_price']; ?> RON</p>
                    <p>Editor: <?php echo $row['publisherid']; ?></p>
                    <!-- Adăugați alte detalii despre carte după nevoie -->
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Nu s-au găsit cărți pentru autorul: <?php echo $authorQuery; ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php
require_once "./template/footer.php";
?>




