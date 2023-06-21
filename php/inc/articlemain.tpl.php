<h2 class="right__title"><?= $article["Titre"]; ?></h2>
          <article class="article">
            <a href="" class="post__category post__category--color-team"><?= $article["Categorie"]; ?></a>
            <div class="post__meta">
            
              <img class="post__author-icon" src=<?= $article["Image Auteur"]; ?> alt="">
              <strong class="post__author"><?= $article["Auteur"]; ?></strong>
              <time datetime="<?= $article["Time"]; ?>"><?= $article["Date Publication"]; ?></time>
            </div><?= $article["Texte"]; ?>
            <a href="index.php" class="post__link">Back to home</a>
          </article>