<h1>Album</h1>


<a href="?page=new_album" class="btn btn-success">Cadastrar novo album</a>


<div class="row">
  <?php
  
  $albums = getAlbuns();

  foreach($albums as $album):
    $infoAlbum = explode("/", $album);
    $nameAlbum = $infoAlbum[1];
    $imgAlbum = $album . '/' . $nameAlbum . '.jpeg';

   ?>
   <div class="col-3 album">
      <a href="?page=musics&album=<?=$nameAlbum?>">
       <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
      <h4><?=$nameAlbum?></h4>
      </a>
    </div>
  <?php endforeach; ?>
</div>
