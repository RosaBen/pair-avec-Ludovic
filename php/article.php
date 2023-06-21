<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
<?php
    include "inc/header.tpl.php";
?>
      </header>
      <main class="right">

<?php
            $article = [
                "Titre" => "Lorem ipsum dolor article 1",
                "Auteur" => "Darren Collison",
                "Texte" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe necessitatibus labore odit eius quo aperiam, ipsam iusto nulla suscipit, accusamus enim quibusdam ex cupiditate excepturi deserunt ipsum ipsa, voluptatum sed quos animi veritatis! Eius doloribus totam ea? Recusandae officia iusto minus pariatur, dicta itaque, reprehenderit error magni optio ad corrupti fugit fugiat debitis laborum earum ea dolorum aliquid. Et laudantium voluptatum molestias quam mollitia aspernatur excepturi deserunt suscipit? Fugit culpa ut aspernatur quam minus nobis incidunt molestiae assumenda fuga debitis eligendi consectetur consequuntur necessitatibus et nihil, explicabo quo temporibus dolores aliquam deleniti delectus. Aliquam officiis ipsum quaerat, deserunt alias nostrum impedit eum quam dolore corporis! Autem nam, nisi veniam itaque rerum dolore, suscipit amet iure impedit omnis, mollitia perspiciatis natus quis ducimus neque. Nihil, enim qui. Earum, dolorum! Veritatis ipsa exercitationem similique. Sapiente voluptas laudantium dolores quibusdam non amet, nulla est, necessitatibus error maxime eveniet enim magni inventore corporis. Pariatur debitis perferendis earum porro vel sunt dolore magni, possimus, tempore perspiciatis commodi quibusdam animi repellat itaque dicta ea officiis architecto voluptates distinctio sed! Quod ut quam eveniet, odit consequatur praesentium! Corporis ea atque repudiandae veritatis qui quae quasi! Voluptatibus laudantium amet unde alias sit, similique quisquam reprehenderit aut dolor impedit expedita ex ad quaerat velit delectus ratione iusto harum blanditiis! </p>
                <p>Ducimus pariatur explicabo architecto ullam odio dolorem sed! Ab voluptatum ex commodi illum repudiandae sit repellat non excepturi voluptate nesciunt inventore at consequuntur pariatur, impedit placeat iusto tempore libero in veniam cumque quasi temporibus velit. Quia, perspiciatis tenetur earum labore impedit ullam odit quae culpa numquam excepturi voluptatum dicta quaerat, veniam harum optio, repellendus nulla. Quod, officiis nobis. Deleniti, itaque reprehenderit. Delectus saepe nihil error, modi ipsa doloribus alias assumenda, tenetur ratione, aspernatur harum in. Hic sunt enim natus unde aperiam corrupti? Reiciendis deserunt blanditiis doloribus accusamus atque odio officia numquam enim odit quo, ex voluptatem pariatur minima iste voluptatibus dignissimos praesentium omnis est beatae! Eaque mollitia culpa, earum accusamus velit amet ducimus dolores consequuntur. Et distinctio, itaque corrupti officiis dolorum optio autem consequuntur ea praesentium sit nulla eius accusamus ipsa aliquid maiores libero mollitia, dolore laboriosam eos nobis voluptas cupiditate repudiandae iure. Quasi vel impedit necessitatibus nemo alias. Officia labore, fuga ullam nesciunt, illo velit, nisi possimus quis ex fugiat eveniet ea quibusdam hic ratione cumque placeat in aliquam commodi molestias saepe. Nostrum assumenda quia est veritatis eum, obcaecati nihil culpa impedit laboriosam, vitae omnis, ipsum quidem aspernatur eos.</p>",
                "Categorie" => "team",
                "Date Publication" => 'le 10 février 2018',
                "Time" => "2018-02-10",
                "Image Auteur" => "../images/icon-dar.png",
            ]
?>
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<?php
  include "inc/articlemain.tpl.php"
?>
        </div>
      </main>
    </body>
</html>