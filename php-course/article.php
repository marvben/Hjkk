<?php
require"includes/database.php";


if(is_numeric($_GET["id"]) && isset($_GET["id"])){
  $sql = "SELECT * FROM article
          Where id=" . $_GET["id"];
}else{
  $sql = null;

}


$result = mysqli_query($conn, $sql);

/* fetch associative array */
$article = mysqli_fetch_array($result);

require"includes/header.php";?>
    <?php  if($article===null): ?>
        <p>Article not found</p>
    <?php else: ?>
          <article class="">
            <h1><?= $article["title"] ; ?></h1>
            <p><?= $article["content"]; ?></p>
            <aside class="">Posted on: <?= $article["published_at"] ;?></aside>
          </article>
    <?php  endif;
    require"includes/footer.php"; ?>
