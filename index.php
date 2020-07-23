
<?php
//conects with the code to acess database
include 'includes/database.php';



// this code selects the data from the database
$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);
 // this piece will show an error if there is a problem retrieving the data
 if ($results === false) {
     echo mysqli_error($conn);
 } else {
     $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
 }

 ?>
 <?php require 'includes/header.php';?>
         <?php if (empty($articles)): ?>
             <p>No articles found.</p>
         <?php else: ?>

             <ul>
                 <?php foreach ($articles as $article): ?>
                     <li>
                       <article>
                           <h2><a href="article.php?id=<?= $article['id']; ?>"><?= $article['title']; ?></a></h2>
                           <p><?= $article['content']; ?></p>
                       </article>
                     </li>
                 <?php endforeach; ?>
             </ul>

         <?php endif; ?>
   <?php require 'includes/footer.php';?>