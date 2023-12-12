<?php
  session_start();
  $count = 0;
  // Conectare la baza de date
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  
  $title = "Index";
  require_once "./template/header.php";
  $row = select4LatestBook($conn);
?>
<p class="lead text-center text-muted" style="color: white">Latest books</p>
<div class="row">
  <?php foreach($row as $book) { ?>
    <div class="col-md-3">
      <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
      <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>" style="height: 400px; width: 300px;">
      </a>
    </div>
  <?php } ?>
</div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
