<a href="?pages=albuns" class="mb-3">Voltar para o Album <?=$_GET['album']?></a>


<h1>Cadastrar nova musica para o Album <?=$_GET['album']?></h1>

  <form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group mb-3">
      <input type="file" name="audio" class="form-control">
     </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>
</div>

<?php

    //var_dump($_SERVER['REQUEST_METHOD']);


  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //var_dump($_FILES);
     $album = $_GET['album'];
     $path = "albuns/{$album}/musics/";

     if(!is_dir($path)){
       mkdir($path);
     }

     $temp = move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name']);

     //var_dump($temp);

  if(move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])){
        header("Location: ?page=musics&album={$album}");
     } else {
        echo "falha no upload";
     }
 }

?>