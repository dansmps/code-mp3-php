<a href="?pages=albums" class="mb-3">Voltar para página de álbuns</a>

<h1>Cadastrar novo álbum</h1>

<div class="container">
  <form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group mb-3">
      <input type="text" name="name" placeholder="Nome" class="form-control">
    </div>
    <div class="form-group mb-3">
      <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>
</div>


<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
     $album = $_POST['name'];
     $path = "albuns/{$album}";
     
  };

  if(!is_dir($path)){
    mkdir($path);
  };

  $file = $_FILES['image'];
  $fileInfo = explode('.', $file['name']);
  
  $extension = $fileInfo[1];
  $nameImage = $_POST['name'] . '.' . $extension;

  if(move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)){
     header('Location: ?page=albuns');
 } else {
     
      echo "falha no upload...";
}
  
?>