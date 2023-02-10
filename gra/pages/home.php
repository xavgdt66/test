//<?php 
// bien mettre cette url => http://localhost/gra/public/index.php?p=home
//$db = new App\Database('blog');
//$datas = $db->query('SELECT * FROM  articles ');
//var_dump($datas);
//?>
<?php foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>

    <?php  //var_dump($post);  ?>
 <h2>  
    <!----getUrl retourn la function getURL qui permet de faire l'id  à la palce de la faire en procedural et ajouter id -------->
 <a href="<?=  $post->url ?>"><?= $post->titre; ?>  </a>
</h2>
<!-----Affcihe le texte de contenu en bdd avec la page Article.php ------->
<p><?= $post->extrait; ?>  </p>


    <?php endforeach ?>







