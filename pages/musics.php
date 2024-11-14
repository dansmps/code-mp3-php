<a href="?pages=albuns">Voltar para o Album</a>


<h1>Musicas do album <?=$_GET['album']?></h1>


<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Cadastrar nova música</a>

<hr>
<pre>

<?php
$album = $_GET['album'];
$musics = getMusics($album);

foreach($musics as $music):


?>

<audio src="<?=$music?>" controls></audio>

<?php
endforeach;
?>