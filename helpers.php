<?php


function getAlbuns(){
    $albums = glob('albuns/*');


    return $albums;
};

function getMusics($album){
  $musics = glob("albuns/{$album}/musics/*.mp3");
  return $musics;
}