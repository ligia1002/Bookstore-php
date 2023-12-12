<?php
  session_start();
  $count = 0;
  // conectează-te la baza de date
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT book_isbn, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Catalogul de carti";
  require_once "./template/header.php";
?>
<div class="container">
  <div class="row">
    <?php 
      while ($query_row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-md-3">
          <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
            <img class="img-responsive img-thumbnail book-thumbnail" src="./bootstrap/img/<?php echo $query_row['book_image']; ?>" alt="Book Image">
          </a>
        </div>
    <?php
        $count++;
        if ($count % 4 == 0) {
          echo '</div><div class="row">'; // Închide rândul curent și deschide unul nou după fiecare 4 cărți
        }
      }
    ?> 
  </div>
</div>
<?php
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>
