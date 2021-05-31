<?php

require"includes/database.php";


$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);

/* fetch associative array */
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

  require"includes/header.php"; ?>

  <ul>
    <?php foreach ($articles as $article):
      if($article===false): ?>
        <p>Article not found</p>
    <?php else: ?>
        <li>
          <article class="">
            <a href="article.php?id= <?= $article["id"]; ?>" >
              <h1><?= $article["title"] ; ?></h1>
            </a>
            <p><?= $article["content"]; ?></p>
            <aside class="">Date: <?= $article["published_at"] ;?></aside>
          </article>
        </li>
    <?php  endif;
  endforeach; ?>
  </ul>

    <?php require"includes/footer.php"; ?>
